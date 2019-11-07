#!/usr/bin/env bash

tput setaf 6
read -r -p "----- Do you want to start a bashprompt in Docker? [Y/n] ----- " response
tput sgr0

if [ ! "$response" = "n" ]
then
    bash
fi
