#!/usr/bin/env bash

printf ">>> -------------- Pre (all kmoms) ----------------------\n"

# KMOM=$1
# COURSE_REPO="$PWD"
# ACRONYM="$2"

# Open me/kmom01/redovisa
url="$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/$REDOVISA_HTTP_POSTFIX"
printf "$url\n" 2>&1
eval "$BROWSER" "$url" &

echo
