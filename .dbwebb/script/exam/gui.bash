#!/usr/bin/env bash

# Include ./functions.bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
source "$DIR/../functions.bash"



# Preconditions
hash dialog 2>/dev/null \
    || die "You need to install 'dialog'."



# Settings
BACKTITLE="dbwebb/databas"
TITLE="Work with exams"



#
#
#
gui-firstpage()
{
    local message

    read -r -d "" message << EOD
Before you start, clone a separate course repo and work in that.
In that repo, create a directory 'exam', all downloaded files reside here.
You need to do a 'npm install' in the root of the course repo.

Each student is downloaded into their own subdirectory in 'exam/\$acronym'.

Each download generates an email in 'exam/{latest,\$acronym}.html'. Preview that in Atom with atom-html-preview. Open the file 'exam/latest.html' and toggle the preview. Den previwade texten går att göra copy-paste på in i din epostklient.

You can then run and verify the exam. A log of the run is saved in 'exam/{runlog,\$acronym}.txt'.

Ensure to set EXAM_DATE, EXAM_TITLE and EXAM_URL to ensure the mail is correctly generated in 'exam/{latest,\$acronym_res}.html'.

Set EXAM_ID to get a receipt from the exam-tool.

Write your feedback in `exam/feedback.txt` and it will be merged into the email.

EOD
    
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --msgbox "$message" \
        20 80 \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-main-menu()
{
    local result
    #local exitCode

    #exec 3>&1 
    result=$( dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --menu "Main menu" \
        20 80 \
        20 \
        "d" "Download student exam" \
        "p" "Potatoe student" \
        "r" "Run" \
        "i" "Info" \
        "q" "Quit" \
        3>&1 1>&2 2>&3 3>&-
    )
    #exitCode=$?
    #exec 3>&-;
    #echo $result $exitCode
    echo $result
}




#
#
#
gui-read-acronym()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --inputbox "Select student acronym" \
        20 80 \
        "$1" \
        3>&1 1>&2 2>&3 3>&-
}



#
# Main function
#
main()
{
    local output
    local acronym=

    gui-firstpage
    while true; do
        output=$( gui-main-menu )
        case $output in
            d)
                acronym=$( gui-read-acronym $acronym )
                $DIR/download_exam.bash $acronym && acronym=
                pressEnterToContinue
                ;;
            i)
                gui-firstpage
                ;;
            p)
                potatoe $acronym
                pressEnterToContinue
                ;;
            r)
                acronym=$( gui-read-acronym $acronym )
                $DIR/run_and_verify_exam.bash $acronym && acronym=
                pressEnterToContinue
                ;;
            q)
                exit 0
                ;;
        esac
    done
}
main
