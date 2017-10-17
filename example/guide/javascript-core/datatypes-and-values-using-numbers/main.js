/**
 * Datatypes using numbers and math.
 */
window.onload = function () {
    "use strict";

    var html,
        value,
        element = document.getElementById('flash');

    console.log('Starting');

    // Make a html string to contain all examples in a ul/li list
    html  = "<p>Math constants</p><ul>";

    html += '<li>Eulers constant E = ' + Math.E;
    html += '<li>PI = ' + Math.PI;
    html += '<li>Largest value possible = ' + Number.MAX_VALUE;
    html += '<li>Positive infinity = ' + Number.POSITIVE_INFINITY;
    html += "</ul>";

    html += "<p>Ways of representing a value of 4.2</p><ul>";

    value = 4.2;
    html += '<li>Exponentialform = ' + value.toExponential();
    html += '<li>Fixed form, three decimals = ' + value.toFixed(3);
    html += '<li>Round to closes integer = ' + Math.round(value);
    html += '<li>Square root, three decimals = ' + Math.sqrt(value).toFixed(3);
    html += '<li>Value for sinus, three decimals = ' + Math.sin(value).toFixed(3);

    html += "</ul>";
    element.innerHTML = html;

    console.log('Ready');
};
