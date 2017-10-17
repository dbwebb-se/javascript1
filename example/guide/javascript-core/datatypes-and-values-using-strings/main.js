/**
 * Work with strings.
 */
window.onload = function () {
    "use strict";

    var html,
        str,
        pos,
        element = document.getElementById('flash');

    console.log('Starting');

    // Make a html string to contain all examples in a ul/li list
    html  = "<p>String concatenation</p><ul>";

    str = "\u00A9";
    html += "<li>" + str + " (" + str.length + ")";

    str = "Copyright \u00A9 by XXX";
    html += "<li>" + str + " (" + str.length + ")";

    str = str + " Mumintrollet ";
    html += "<li>" + str + " (" + str.length + ")";

    str = str + 1942;
    html += "<li>" + str + " (" + str.length + ")";

    str = str + ".";
    html += "<li>" + str + " (" + str.length + ")";

    pos = 15;
    str = str.substr(0, pos) + str.substring(pos + 4, str.length);
    html += "<li>" + str + " (" + str.length + ")";

    html += "</ul>";
    element.innerHTML = html;

    html += "<p>String concatenation mixed types</p><ul>";

    str = "19" + "42";
    html += "<li>" + str + " (" + typeof(str) + ", " + str.length + ")";

    str = "19" + 42;
    html += "<li>" + str + " (" + typeof(str) + ", " + str.length + ")";

    str = 19 + 42;
    html += "<li>" + str + " (" + typeof(str) + ", " + str.length + ")";

    str = 19 + "42";
    html += "<li>" + str + " (" + typeof(str) + ", " + str.length + ")";

    html += "</ul>";
    element.innerHTML = html;

    console.log('Ready');
};
