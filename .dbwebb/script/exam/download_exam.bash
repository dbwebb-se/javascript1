#!/usr/bin/env bash

# Include ./functions.bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
source "$DIR/../functions.bash"



#
# Download a students exam and generate a response suitable for an email.
#
MAIL_TEMPLATE="$DIR/mail/download_acknowledge"
export STUD
STUD=${STUD:-$1}
STUD=$( input "Akronym att ladda ned?" "$STUD" )

[[ -d exam ]] \
    || die "You need to create the directory 'exam' where downloaded files reside."



rm -rf me \
    rm -rf exam/$STUD* \
    && dbwebb init-me \
    && yes | dbwebb -f download exam $STUD \
    && rm -rf $STUD \
    && mv me exam/$STUD \
    && eval echo "\"$( cat $MAIL_TEMPLATE/header.html )"\" > exam/$STUD.html \
    && tree -D -s exam/$STUD/kmom10/exam >> exam/$STUD.html \
    && eval echo "\"$( cat $MAIL_TEMPLATE/footer.html )"\" >> exam/$STUD.html \
    && md5sum exam/$STUD.html >> exam/$STUD.html \
    && cp exam/$STUD.html exam/latest.html \
    && cat exam/latest.html

#"\"$(cat FILE)\""
