#!/usr/bin/env bash

tput setaf 6
read -r -p "----- Do you want to start a bashprompt in Docker? [y/N] ----- " response
tput sgr0

if [ "$response" = "y" ]
then
    bash
fi
