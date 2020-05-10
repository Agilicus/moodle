#!/bin/bash

#
# Run until killed or pid 1 (nginx) done.
# Every 60 seconds, or every file modified in the objectfs cache,
# wake up and run all cron items.
# Don't wake up more than every 2 seconds to avoid a storm
# of file changes.

objectfs_sync() {
    trap "echo Cron Objectfs Quitting && exit 0" EXIT SIGINT SIGHUP
    t0=$SECONDS
    inotifywait  -q -m -r -e close_write,moved_to /var/moodledata/filedir | while read dir event file
    do
        t1=$SECONDS
        if (( $t1 - $t0 > 2))
        then
            echo "$(date -Is): Cron: inotify process ${dir}${file}"
            php admin/tool/task/cli/schedule_task.php --execute=\\tool_objectfs\\task\\push_objects_to_storage
        fi
        t0=$t1
    done
}

do_cron() {
    trap "echo Cron Quitting && exit 0" EXIT SIGINT SIGHUP
    echo "Cron Starting"
    <&-

    # Asynchronously setup the caches while the main startup goes
    mkdir -p /var/moodledata/filedir /var/moodledata/localcache
    echo "$(date -Is): build theme cache"
    php admin/cli/build_theme_css.php --themes=iomad
    php admin/cli/build_theme_css.php --themes=iomadboost

    objectfs_sync &

    echo "$(date -Is): Cron: 60s start loop"
    while true
    do
        # Add a bit of jitter to prevent beating effect
        sleep $(( $RANDOM % 5 + 60))
        php admin/cli/cron.php >/dev/null
        kill -0 1 || exit 0
    done
    echo "$(date -Is): Cron: 60s end loop"
}

do_cron &
