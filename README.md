**thinkphp framework 3.2.5 version and the simple project**

## Instruction:

**start the docker:**

*(php version - 7.1.33, nginx newest version, composer)*
- $ cd ./docker
- $ docker-compose up -d --build
- // database sql file you can find at ./docker folder
- // nginx site confix at ./docker/nginx_php/thinkphp.conf
- // php and nginx configurations at ./docker/nginx_php/
- // database will be created at ./docker/database/db_file

*you can go to the nginx_php container with a command:*
- $ docker exec -it docker_nginx_php_1 /bin/sh