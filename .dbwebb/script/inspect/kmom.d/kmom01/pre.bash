#!/usr/bin/env bash

# Open sandbox
printf "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/sandbox/\n" 2>&1


eval "$BROWSER" "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/sandbox/" &

# Open lab1
printf "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/lab1/answer.html\n" 2>&1

eval "$BROWSER" "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/lab1/answer.html" &
