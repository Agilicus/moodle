# Docker-Moodle-IOMAD
# 
# Forked from Jonathan Hardison's docker version. https://github.com/jmhardison/docker-moodle
FROM ubuntu:18.04
LABEL maintainer="Jamie Chapman-Brown <jamie.chapman-brown@agilicus.com>"

WORKDIR /var/www/moodle

# Let the container know that there is no tty
ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update \
 && apt-get -y install curl gnupg2 dumb-init libfcgi0ldbl \
 && curl -L https://nginx.org/keys/nginx_signing.key | apt-key add - \
 && echo "deb http://nginx.org/packages/mainline/debian/ stretch nginx" >> /etc/apt/sources.list \
 && apt-get install -y nginx \
 && rm -rf /var/lib/apt/lists/*

#RUN apt-get update && apt-get -y install unzip php \
#    php-gd postfix wget supervisor php-pgsql curl libcurl4 \
#    libcurl3-dev php-curl php-xmlrpc php-intl php-mysql git-core php-xml php-mbstring php-zip php-soap cron php-ldap

RUN apt-get update && \
    apt-get -y install git libpq-dev \
    zlib1g-dev libzip-dev libpng-dev ghostscript aspell aspell-en aspell-fr aspell-es \
    libcurl4-gnutls-dev libxml2-dev php-fpm && rm -rf /var/lib/apt/lists/*

# create a user so we know the id in k8s
RUN useradd -ms /bin/bash moodle


RUN chown moodle:moodle /var/lib/nginx


#RUN rm /etc/nginx/sites-available/default
COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /var/moodledata
RUN chown moodle:moodle /var/moodledata
RUN echo "clear_env = no" >> /etc/php/7.2/fpm/pool.d/www.conf && \
    echo "catch_workers_output = yes" >> /etc/php/7.2/fpm/pool.d/www.conf


RUN apt-get update && \
    apt-get -y install php-curl \
                       php-gd \
                       php-intl \
                       php-mbstring \
                       php-pgsql \
                       php-redis \
                       php-soap \
                       php-xml \
                       php-xmlrpc \
                       php-zip \
    && rm -rf /var/lib/apt/lists/*

RUN ln -sf /dev/stderr /var/log/nginx/error.log


# uncomment to build php-src
#RUN apt-get update && apt-get install -y gdb
#RUN cd /tmp && git clone https://github.com/php/php-src.git --depth=1
#RUN apt-get update && apt-get install -y re2c bison sqlite3 libsqlite3-dev libonig4 libssl-dev \
#                             libjpeg-turbo8-dev libfreetype6-dev libxslt-dev autoconf libonig-dev libtool

ADD --chown=moodle:moodle . .
ADD --chown=www-data:www-data docker/moodle-config.php ./config.php
COPY --chown=moodle:moodle docker/info.php .

RUN php docker/install_plugins.php

USER 1000

CMD docker/entry.sh
