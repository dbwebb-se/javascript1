#!/usr/bin/env bash

cd "me/kmom06/maze2"

function executeDockerCompose
{
    tput setaf 6
    read -r -p "----- Execute $@? [Y/n] ----- " response
    tput sgr0

    if [ ! "$response" = "n" ]
    then
        eval "$@"
    fi
}

tput setaf 6
read -r -p "----- View docker-compose? (look for :loop tag) [Y/n] ----- " response
tput sgr0

file=""

if [ ! "$response" = "n" ]
then
    if [[ -f "docker-compose.yml" ]]; then
        file="docker-compose.yml"
    else
        file="docker-compose.yaml"
    fi
    more "$file"
fi

executeDockerCompose "docker-compose up -d server"
executeDockerCompose "docker-compose run client"
executeDockerCompose "docker-compose down"


# tput setaf 6
# read -r -p "----- Execute docker-compose up -d server? [Y/n] ----- " response
# tput sgr0
#
# if [ ! "$response" = "n" ]
# then
#     docker-compose up -d server
# fi



# tput setaf 6
# read -r -p "----- Execute docker-compose up client? [Y/n] ----- " response
# tput sgr0
#
# if [ ! "$response" = "n" ]
# then
#     docker-compose up client
# fi
#
#
#
# tput setaf 6
# read -r -p "----- Execute docker-compose down? [Y/n] ----- " response
# tput sgr0
#
# if [ ! "$response" = "n" ]
# then
#     docker-compose down
# fi
