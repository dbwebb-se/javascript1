#!/usr/bin/env bash

printf ">>> -------------- Pre inspect -------------------------\n"

cd me/kmom05/maze || exit 1
path=$(pwd)

# View server Dockerfile
tput setaf 6
read -r -p "View Server Dockerfile? [Y/n] " response
tput sgr0

if [ ! "$response" = "n" ]
then
    cd "$path/server" && more Dockerfile
fi

# View Client Dockerfile
tput setaf 6
read -r -p "View Client Dockerfile? [Y/n] " response
tput sgr0

if [ ! "$response" = "n" ]
then
    cd "$path/client" && more Dockerfile
fi

# View kmom05.bash
tput setaf 3
read -r -p "View kmom05.bash? [Y/n] " response
tput sgr0

if [ ! "$response" = "n" ]
then
    cd "$path" && more kmom05.bash
fi

# Execute kmom05.bash
tput setaf 6
read -r -p "Execute kmom05.bash? [Y/n] " response
tput sgr0

if [ ! "$response" = "n" ]
then
    cd "$path" && chmod +x kmom05.bash && ./kmom05.bash
fi
