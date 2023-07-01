#!/bin/bash
IMAGE_TAG=$(curl -s -S https://registry.hub.docker.com/v2/repositories/anhminhbo/php-apache-linux-sysadm/tags |
jq '."results"[]["name"]' | sed -n 1p | cut -d'"' -f2)

TEMPLATE_DIR=infra/k8s/templates
DEPLOY_DIR=infra/k8s


cat $TEMPLATE_DIR/php-apache.yaml.tpl | \
    sed "s/\[\[IMAGE_TAG\]\]/$IMAGE_TAG/g" \
    > $DEPLOY_DIR/php-apache.yaml

kubectl apply -f $DEPLOY_DIR/be.yaml

echo "Deploy successfully."