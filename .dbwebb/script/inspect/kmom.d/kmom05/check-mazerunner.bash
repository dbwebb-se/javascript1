#!/usr/bin/env bash

cd me/kmom05/maze
#userserver=$(sed -En 's/.*\-\-name ([a-zA-Z0-9]+).*/\1/p' < kmom05.bash | head -1)
cd client
#cp mazerunner.bash mazerunner.backup
#sed -i -E "s/$userserver/localhost/g" mazerunner.bash

function testMaze {
    tput setaf 6
    read -r -p "Execute mazerunner $2? [Y/n] " response
    tput sgr0

    if [ ! "$response" = "n" ]
    then
        echo ""
        echo "#################"
        echo "Testing: $1"
        echo "#################"
        shift
        echo ""
        bash mazerunner.bash $@
        echo ""
        sleep 1
    fi
}
docker network create dbwebb
# Start server
tput setaf 6
echo "Starting server..."
tput sgr0

cd "../server" && node index.js &
sleep 2



# Test client.bash
cd "../client"

testMaze "Init" "init"
testMaze "Maps" "maps"
testMaze "Select" "select 1"
testMaze "Enter" "enter"
testMaze "Go EAST" "go east"
testMaze "Go EAST" "go east"
testMaze "Go SOUTH" "go south"
testMaze "Go SOUTH" "go south"
testMaze "Go SOUTH" "go south"
testMaze "Go WEST" "go west"
testMaze "Go WEST" "go west"
testMaze "LOOP" "loop"



# View mazerunner.bash
tput setaf 6
read -r -p "View mazerunner.bash? [Y/n] " response
tput sgr0

if [ ! "$response" = "n" ]
then
    more mazerunner.bash
fi

docker network remove dbwebb

# Kill server
# echo ""
# echo "Killing the server..."
# if [ -f "pid" ]
# then
#     PID=$(< "pid")
# fi
#
# kill $PID
# sleep 1
# echo "Server dead :)"
