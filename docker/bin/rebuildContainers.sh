#!/bin/bash

# usage
# cd to directory containing docker-compose.yml
# bin/rebuildContainers.sh
# EG:
# cd ~/src/laravel-in-docker/docker
# bin/rebuildContainers.sh

clear; printf "\033[3J"
docker compose down --remove-orphans --volumes
docker compose build
docker compose up --force-recreate --detach
