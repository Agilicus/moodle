#!/bin/sh

do_cron() {
    trap "echo Cron Quitting && exit 0" EXIT SIGINT SIGHUP
    echo "Cron Starting"
    <&-
    while true
    do
        sleep 60
        php admin/cli/cron.php >/dev/null
        kill -0 1 || exit 0
    done
}

do_cron &
