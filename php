#!/bin/bash
docker run -i --rm -v "${PWD}":"${PWD}" -v /tmp/:/tmp/ -w ${PWD} --net=host --sig-proxy=true --pid=host marekfilip/php php "$@"
