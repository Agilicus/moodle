#!/usr/bin/dumb-init /bin/bash

_forwardTerm () {
    echo "Caught signal SIGTERM, passing it to child processes..."
    pgrep -P $$ | xargs kill -15 2>/dev/null
    wait
    exit $?
}

trap _forwardTerm TERM

log() {
  >&2 echo "{ \"time\": \"$(date -Is)\", \"log\": \"$*\"}"
}

log "Start nginx"
nginx -g 'daemon off;' &
php-fpm7.2 -F -y docker/php-fpm.conf -c docker/php.ini