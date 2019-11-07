#!/usr/bin/env bash

printf ">>> -------------- Pre inspect -------------------------\n"

port=$(cat me/kmom04/server/dockerhub.txt.txt | head -n1 | sed 's/.*\([0-9]\{4\}\).*/\1/')
url=$(cat me/kmom04/server/dockerhub.txt.txt | head -n2 | tail -n1)

echo "Using port: $port"
echo "Docker image: $url"
read -p "Lets go! <press key>"

# port=""
# url=""

function menu
{
    local language

    read -p "Server type? 1) /var/www/html, 2) /app/data/, 3) /data/, 4) /server/data/: " lang

    if [[ "$lang" = "1" ]]; then
        language="/var/www/html/data/"
    elif [[ "$lang" = "2" ]]; then
        language="/app/data/"
    elif [[ "$lang" = "3" ]]; then
        language="/data/"
    elif [[ "$lang" = "4" ]]; then
        language="/server/data/"
    fi

    echo "$language"
}

lang=$(menu)

tput setaf 7
echo "Going with: $lang"
tput sgr0

dockerId=$(docker run --rm --name kmom04 -d -p "$port":"$port" -it -v "$(pwd)"/example/json/:"$lang" "$url")

function testServer
{
    tput setaf 6
    read -p "Curling localhost:$port/$1 <Press Enter>"
    tput sgr0
    curl "http://localhost:$port/$1"
    tput setaf 6
    echo ""
    read -p "Done viewing? <Press Enter>"
    tput sgr0
}

testServer "all"
testServer "names"
testServer "color/Yellow"
testServer "color/yellow"

eval "$BROWSER" "http://localhost:$port/all" &

tput setaf 6
read -p "Done with viewing browser? <Press Enter>"
tput sgr0

# docker kill "$dockerId"
