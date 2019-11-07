#!/usr/bin/env bash

printf ">>> -------------- Pre inspect -------------------------\n"

url=$(< me/kmom03/script/dockerhub.txt)

docker run --rm -it "$url" && read -p "Press Enter to move on..."
