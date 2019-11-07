#!/usr/bin/env bash

# Include ./functions.bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
source "$DIR/../functions.bash"



#
# Check the exam for a student
#
MAIL_TEMPLATE="$DIR/mail/verify_exam"
export DBWEBB_PORT=1337
export STUD
STUD=${STUD:-$1}
STUD=$( input "Studentens akronym?" "$STUD" )
database=${2:-exam}



#
# Main
#
function main
{
    echo "This is a log of the run for $STUD."
    date
    echo "(To proceed, press Enter after each, or press 'q' to quit)"

    info "--> Recreate the database '$database' as root"
    mysql -uroot -e "DROP DATABASE IF EXISTS $database; CREATE DATABASE $database; GRANT ALL ON $database.* TO user@localhost IDENTIFIED BY 'pass';"

    dir=exam/$STUD/kmom10/exam
    info "--> Change working dir into $dir"
    cd $dir || exit
    tree -L 2 -I "node_modules*".
    pwd

    info "--> Setting up database as user:pass (ddl + insert)"
    for file in ddl insert dml; do
        echo sql/$file.sql
        mysql -uuser -ppass $database < sql/$file.sql
    done;
    mysql --table -uuser -ppass $database -e "SHOW TABLES;"

    info "--> Show details of views, procedures, functions and triggers"
    mysql --table -uuser -ppass $database -e "SHOW FULL TABLES IN $database WHERE TABLE_TYPE LIKE 'VIEW';"
    mysql --table -uroot $database -e "select name, type from mysql.proc where db = database() order by type, name;"
    #mysql -uuser -ppass exam -e "SHOW FUNCTION STATUS WHERE Db = DATABASE();"
    #mysql -uuser -ppass exam -e "SHOW TRIGGER STATUS WHERE Db = DATABASE();"

    info "--> Check comments in SQL-files"
    head -5 sql/ddl.sql sql/insert.sql

    info "--> Check comments in JS-files"
    head -5 index.js cli.js

    info "--> NPM install"
    npm install

    info "--> Starting Node.js server through index.js in the background"
    node index.js &
    INDEX_PID=$!
    echo $INDEX_PID
    echo "cd $(pwd) && npm install express ejs cookie-session"
    sleep 2

    info "--> Starting terminal cli.js in the foreground"
    node cli.js
    kill $INDEX_PID
}



#
# Create response email
#
function create_mail
{
    local target="exam/${STUD}_run.html"
    local urlReceipt="http://www.student.bth.se/~mosstud/kod-exempel/lab/?action=exam-receipt&examId=$EXAM_ID&acronym=$STUD"

    info "--> Create mail"
    eval echo "\"$( cat $MAIL_TEMPLATE/header.html )"\" > "$target"
    cat exam/feedback.txt | sed 's/$/<br>/g' >> "$target"
    eval echo "\"$( cat $MAIL_TEMPLATE/header2.html )"\" >> "$target"
    curl --silent "$urlReceipt" >> "$target"
    cat exam/runlog.txt >> "$target"
    eval echo "\"$( cat $MAIL_TEMPLATE/footer.html )"\" >> "$target"
    md5sum "$target" >> "$target"
    cp "$target" exam/latest.html
    cat exam/latest.html
}



#
# Run it all
#
main |& tee exam/{runlog,${STUD}_run}.txt
create_mail
