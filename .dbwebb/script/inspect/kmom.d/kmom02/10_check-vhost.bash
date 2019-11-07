#!/usr/bin/env bash
cd me/kmom02/vhost || exit 1

echo ""
tput setaf 6
echo "----- Check for dump.png, log.txt and a config-file -----"
tput sgr0
ls

read -p "Done?"

echo ""
tput setaf 6
echo "----- Dumping log.txt -----"
tput sgr0
more *.txt
echo ""

echo ""
tput setaf 6
echo "----- Dumping config-file.txt -----"
tput sgr0
more *.conf*
echo ""

read -p "Done viewing vhost?"
