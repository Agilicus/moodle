FROM cr.agilicus.com/applications/php:v0.0.11
LABEL maintainer="Agilicus Devs <dev@agilicus.com>"

WORKDIR /var/www/moodle
COPY --chown=web . /var/www/moodle
COPY --chown=web:web docker/moodle-config.php /var/www/moodle/config.php
# COPY --chown=web:web docker/info.php /var/www/moodle/info.php
COPY docker/nginx.conf /etc/nginx/conf.d/moodle.conf
COPY docker/health.php /var/www/moodle/health.php
COPY docker/cron.sh /startup.d/cron.sh

RUN mkdir -p /var/www/phpunitdata /var/moodledata/muc \
 && chown -R web:web /var/www/phpunitdata /var/moodledata /var/lib/php/sessions \
 && php docker/install_plugins.php \
 && chown -R web:web /var/www/moodle \
 && chmod 555 /startup.d/cron.sh \
 && curl -s https://binaries.cockroachdb.com/cockroach-v20.1.0.linux-amd64.tgz | tar -xzf - -C /bin --strip-components=1 \
 && chmod a=rx /bin/cockroach \
 && git clone https://github.com/tmuras/moosh.git /moosh \
 && cd /moosh; git checkout b0c39b47931c2f90fc083abef210adade20e5cd1; composer install \
 && ln -s $PWD/moosh.php /bin/moosh

USER web
