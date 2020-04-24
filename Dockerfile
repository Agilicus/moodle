FROM cr.agilicus.com/applications/php:v0.0.6
LABEL maintainer="Agilicus Devs <dev@agilicus.com>"

WORKDIR /var/www/moodle
COPY --chown=web . /var/www/moodle
COPY --chown=web:web docker/moodle-config.php /var/www/moodle/config.php
# COPY --chown=web:web docker/info.php /var/www/moodle/info.php
COPY docker/nginx.conf /etc/nginx/conf.d/moodle.conf
COPY docker/health.php /var/www/moodle/health.php

RUN mkdir /var/www/phpunitdata /var/moodledata \
 && chown web:web /var/www/phpunitdata /var/moodledata \
 && php docker/install_plugins.php \
 && chown -R web:web /var/www/moodle

USER web
