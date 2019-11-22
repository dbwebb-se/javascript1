#!/usr/bin/env bash

# Open lab1
printf "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/lab1/answer.html\n" 2>&1

eval "$BROWSER" "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/lab1/answer.html" &
