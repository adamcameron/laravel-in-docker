#!/bin/bash

composer install

exec php-fpm
