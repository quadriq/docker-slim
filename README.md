# Docker container with PHP-Slim framework

A simple docker container that setup a slim framework 3.x with some basic functionalities. Could be useful for testing purposes.

Here the link to Slim framework website: http://www.slimframework.com/

Its based on `ubuntu:latest`, using `apache2`, `php5`, and `supervisord` for startup

# Install

clone this project, `cd` into directory and run

```bash
docker build -t slim:1 .
```

After container is build you could run it with

```
docker run -d -p 8001:80 slim:1
```

it would start the container and you could access it at port `8001`.

some example routes are configure already

```
/

/list

/name/John
```

You are welcome to contribute.
