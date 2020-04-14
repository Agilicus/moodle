# Moodle Iomad

## recent modifications

### roles
Using our fork of iomad we can automatiaclly give users the correct auth options based on the url, which directs to the correct auth provider. Iomad than stores the id_token and introspects it to find what role a user belongs to.

We have 5 roles implemented:

- ignore: The user's role will not be ovverwritten. Useful primarily for debug perposes
- user: able to enrol in self-enrole courses and see courses with default visibility. Will be automatically enrolled in configured courses
- manager: able to see all courses, view grades and check on completion status.
- Instructor: able to modify courses see all courses and grades.
- admin: able to assign users to teach courses, enrol students and change all course settings. Should be able to modify company appearnace and completion certificates but that isn't implemented atm



## Investigation

### Cockroachdb

Has a number of issues:

#### pg_my_temp_schema

iomad does not work due to :https://github.com/cockroachdb/cockroach/pull/4019://github.com/cockroachdb/cockroach/pull/40194 , specifically  pg_my_temp_schema() needed.

Current 19.1.5 does not have this, currently ned 19.2 (not yet out).

Have tried the beta version (19.2.0-beta.20190930), however php/apache2 core dumps now. Have not yet tried nginx.

#### no support for varchar_pattern_ops

The moodle db tries to create a schema with  varchar_pattern_ops, not supported in cockroachdb. I hack workaround
was applied to remove this index:

```
RUN sed -e 's/.*varchar_pattern_ops.*//g' -e '/^\s*$/d' -i /var/www/moodle/lib/db/install.xml
```

#### Crash with cockroachdb

this occurs with apache and nginx:

root@cbcb90996016:/var/log# tail -f php7.2-fpm.log
[15-Oct-2019 18:53:38] NOTICE: ready to handle connections
[15-Oct-2019 18:53:38] NOTICE: systemd monitor interval set to 10000ms
[15-Oct-2019 18:53:51] WARNING: [pool www] child 25 exited on signal 11 (SIGSEGV) after 12.614072 seconds from start
[15-Oct-2019 18:53:51] NOTICE: [pool www] child 30 started
[15-Oct-2019 18:53:55] WARNING: [pool www] child 26 exited on signal 11 (SIGSEGV) after 17.390363 seconds from start
[15-Oct-2019 18:53:55] NOTICE: [pool www] child 31 started
[15-Oct-2019 18:53:56] WARNING: [pool www] child 30 exited on signal 11 (SIGSEGV) after 5.859552 seconds from start
[15-Oct-2019 18:53:56] NOTICE: [pool www] child 32 started
[15-Oct-2019 18:53:57] WARNING: [pool www] child 31 exited on signal 11 (SIGSEGV) after 2.047414 seconds from start
[15-Oct-2019 18:53:57] NOTICE: [pool www] child 33 started

With gdb:

(gdb) set follow-fork-mode child
(gdb) c
Continuing.
[15-Oct-2019 19:24:57] WARNING: [pool www] child 34 exited on signal 2 (SIGINT) after 63.716487 seconds from start
[15-Oct-2019 19:24:57] NOTICE: [pool www] child 36 started
[New process 36]
[15-Oct-2019 19:24:57] WARNING: [pool www] child 35 exited on signal 2 (SIGINT) after 59.366040 seconds from start
[Thread debugging using libthread_db enabled]
Using host libthread_db library "/lib/x86_64-linux-gnu/libthread_db.so.1".
[15-Oct-2019 19:24:57] NOTICE: [pool www] child 37 started

Thread 2.1 "php-fpm7.2" received signal SIGSEGV, Segmentation fault.
[Switching to Thread 0x7ffff7fe3c00 (LWP 36)]
__strlen_avx2 () at ../sysdeps/x86_64/multiarch/strlen-avx2.S:62
62      ../sysdeps/x86_64/multiarch/strlen-avx2.S: No such file or directory.
(gdb) bt
#0  __strlen_avx2 () at ../sysdeps/x86_64/multiarch/strlen-avx2.S:62
#1  0x00007fffe7eb21d8 in ?? () from /usr/lib/php/20170718/pgsql.so
#2  0x000055555589375b in execute_ex ()
#3  0x000055555589b557 in zend_execute ()
#4  0x00005555557e9ec2 in zend_execute_scripts ()
#5  0x0000555555785a00 in php_execute_script ()
#6  0x000055555563579b in ?? ()
#7  0x00007ffff57aab97 in __libc_start_main (main=0x555555634910, argc=2, argv=0x7fffffffe5f8, init=<optimized out>, fini=<optimized out>, rtld_fini=<optimized out>, stack_end=0x7fffffffe5e8)
    at ../csu/libc-start.c:310
    #8  0x000055555563650a in _start ()


And when compiled with php-src:

(gdb) bt
#0  __strlen_avx2 () at ../sysdeps/x86_64/multiarch/strlen-avx2.S:62
#1  0x0000555555954ca8 in php_pgsql_get_field_info (return_value=<optimized out>, entry_type=<optimized out>, execute_data=<optimized out>) at /tmp/php-src/ext/pgsql/pgsql.c:2564
#2  0x0000555555be98e3 in ZEND_DO_ICALL_SPEC_RETVAL_USED_HANDLER () at /tmp/php-src/Zend/zend_vm_execute.h:621
#3  execute_ex (ex=0x0) at /tmp/php-src/Zend/zend_vm_execute.h:59754
#4  0x0000555555bf1759 in zend_execute (op_array=op_array@entry=0x7fffed26e0e0, return_value=0x0, return_value@entry=0x7fffecbaf720) at /tmp/php-src/Zend/zend_vm_execute.h:63780
#5  0x0000555555b40ee2 in zend_execute_scripts (type=type@entry=8, retval=0x7fffecbaf720, retval@entry=0x0, file_count=-316529904, file_count@entry=3) at /tmp/php-src/Zend/zend.c:1498
#6  0x0000555555add040 in php_execute_script (primary_file=0x7fffffffe0f0) at /tmp/php-src/main/main.c:2599
#7  0x00005555556d19e1 in main (argc=<optimized out>, argv=<optimized out>) at /tmp/php-src/sapi/cgi/cgi_main.c:2679

#0  __strlen_avx2 () at ../sysdeps/x86_64/multiarch/strlen-avx2.S:62
#1  0x00007ff1900b11d8 in ?? () from /usr/lib/php/20170718/pgsql.so
#2  0x000055a4e1af9e3b in execute_ex ()
#3  0x000055a4e1b01ca7 in zend_execute ()
#4  0x000055a4e1a50432 in zend_execute_scripts ()
#5  0x000055a4e19ebe90 in php_execute_script ()
#6  0x000055a4e189b7bb in ?? ()
#7  0x00007ff19da5db97 in __libc_start_main (main=0x55a4e189a930, argc=4, argv=0x7ffc6e3244d8, init=<optimized out>, 
    fini=<optimized out>, rtld_fini=<optimized out>, stack_end=0x7ffc6e3244c8) at ../csu/libc-start.c:310
#8  0x000055a4e189c53a in _start ()

Seems I can't it to crash now, but it fails on:
	Table "config" does not exist
	
	More information about this error
	
	It is usually not possible to recover from errors triggered during installation, you may need to create a new database or use a different database prefix if you want to retry the installation.
	
This suggests the config table is not there, but it clearly is.


### php-fpm Environment variables
Environment variables do not get passed nicely into the FPM. Need to set "clear_env=no" inside fpm, and then add specific
env['var'] = $var on startup of process (inside the php-fpm config file)

### oauth2 support
see: iomad/auth/oauth2/

Initialy used dex for oidc/oath2 and ran into snag. The 'userinfo' api as part of oauth2, uses the access_token returned from the POST token request. The policy/OPA is not allowing this since its not a key that it understands (separtately controlled with Dex), even though the api is whitelisted. This will need to be updated

### datastore cache
The datastore cache by default writes to local disk, but redis store is supported.

#### Background:

Running moodle from docker:

docker-compose up


#### Building PHP from source:


./configure --with-curl --enable-gd --enable-intl --enable-mbstring --with-xmlrpc --enable-soap --with-zip --with-pgsql --enable-fpm
./configure   --prefix=/usr/local/php   --enable-mbstring   --with-curl   --with-openssl   --with-xmlrpc   --enable-soap   --enable-zip   --with-gd   --with-jpeg-dir   --with-png-dir   --with-mysqli   --with-pgsql   --enable-embedded-mysqli   --with-freetype-dir    --enable-intl   --with-xsl   --with-zlib --enable-fpm


with newer php versions:
./buildconf
./configure   --prefix=/usr/local/php   --enable-mbstring   --with-curl   --with-openssl   --with-xmlrpc   --enable-soap   --with-zip   --with-gd   --with-jpeg-dir   --with-png-dir   --with-mysqli   --with-pgsql   --enable-embedded-mysqli   --with-freetype-dir    --enable-intl   --with-xsl   --with-zlib --enable-fpm
