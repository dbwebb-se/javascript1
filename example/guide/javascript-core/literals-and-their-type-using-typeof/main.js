/**
 * Print out literals and their type.
 */
window.onload = function () {
    "use strict";

    var html,
        literal,
        element = document.getElementById('flash');

    console.log('Starting');

    // Make a html string to contain all examples in a ul/li list
    html  = "<ul>";

    literal = 42;
    html += "<li>" + literal + " - " + typeof(literal);

    literal = 4.2;
    html += "<li>" + literal + " - " + typeof(literal);

    literal = "hello world";
    html += "<li>" + literal + " - " + typeof(literal);

    literal = 'hello world';
    html += "<li>" + literal + " - " + typeof(literal);

    literal = true;
    html += "<li>" + literal + " - " + typeof(literal);

    literal = false;
    html += "<li>" + literal + " - " + typeof(literal);

    literal = null;
    html += "<li>" + literal + " - " + typeof(literal);

    literal = undefined;
    html += "<li>" + literal + " - " + typeof(literal);

    literal = /javascript/;
    html += "<li>" + literal + " - " + typeof(literal);

    literal = {x: 1, y: 2};
    html += "<li>" + literal + " - " + typeof(literal);

    literal = [1, 2, "three"];
    html += "<li>" + literal + " - " + typeof(literal);

    literal = function () {};
    html += "<li>" + literal + " - " + typeof(literal);

    html += "</ul>";
    element.innerHTML = html;

    console.log('Ready');
};
