#!/usr/bin/env bash

# Open me/kmom01/lab1
url="$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/lab1/answer.html"
printf "$url\n" 2>&1
eval "$BROWSER" "$url" &
