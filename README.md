# php-docker-hub
PHP in a docker image

General purpose of this repo is to have a docker images for PHP CLI.
Each of them works fine with i.e. PhpStorm debugger. All you have to do is a script like this:

~~~bash
#!/bin/bash
docker run -i --rm -v "${PWD}":"${PWD}" -v /tmp/:/tmp/ -w ${PWD} --net=host --sig-proxy=true --pid=host marekfilip/php[:TAG] php "$@"
~~~
Give it a chmod +x and add to PhpStorm interpreters. After that you are ready, set a breakpoint,
click "Start Listening for PHP Debug Connections" and "Debug".

Happy debugging

Go to my [Docker Hub](https://hub.docker.com/r/marekfilip/php) or [Github](https://github.com/marekfilip/php-docker-hub)
