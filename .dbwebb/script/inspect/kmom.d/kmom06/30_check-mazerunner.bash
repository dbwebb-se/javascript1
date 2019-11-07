#!/usr/bin/env bash

cd "me/kmom06/maze2/client"

tput setaf 6
read -r -p "----- View mazerunner.bash? [Y/n] ----- " response
tput sgr0

if [ ! "$response" = "n" ]
then
    more mazerunner.bash
fi
