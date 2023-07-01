#!/bin/bash
IMAGE_TAG=$1

DOCKER_BUILDKIT=1 docker build . -t anhminhbo/php-apache-linux-sysadm:$IMAGE_TAG

docker push anhminhbo/php-apache-linux-sysadm:$IMAGE_TAG