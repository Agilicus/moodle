# Moodle Iomad

## recent modifications

### roles
Using our fork of iomad we can automatiaclly give users the correct
auth options based on the url, which directs to the correct auth
provider. Iomad than stores the id_token and introspects it to find what
role a user belongs to.

We have 5 roles implemented:

- ignore: The user's role will not be ovverwritten. Useful primarily for debug perposes
- user: able to enrol in self-enrole courses and see courses with default visibility. Will be automatically enrolled in configured courses
- manager: able to see all courses, view grades and check on completion status.
- Instructor: able to modify courses see all courses and grades.
- admin: able to assign users to teach courses, enrol students and change all course settings. Should be able to modify company appearnace and completion certificates but that isn't implemented atm

## Local Development

Running moodle from docker locally

```
docker-compose build
docker-compose up
```

The first time you run you might need to install schema:

```
docker-compose exec moodle sh -c "php admin/cli/install_database.php  --agree-license --adminuser=\$ADMIN_USER --adminpass=\$ADMIN_PASSWORD --adminemail=admin@localhost.org --fullname=localhost --shortname=localhost"
docker-compose exec cockroach /cockroach/cockroach sql --insecure -e "insert into mdl_company(id, name, shortname,hostname) values(1, 'localhost','localhost','localhost');"
```

Now open a browser to [here](http://localhost/login/index.php), initial user/password is admin/foobar.
