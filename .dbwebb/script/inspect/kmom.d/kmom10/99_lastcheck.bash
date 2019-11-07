#!/usr/bin/env bash

read -r -p "Do you want to start a bashprompt in Docker? [Y/n] " response

if [ ! "$response" = "n" ]
then
    bash
fi
