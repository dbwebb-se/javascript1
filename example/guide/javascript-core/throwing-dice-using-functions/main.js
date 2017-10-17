/**
 * Work with strings.
 */
window.onload = function () {
    "use strict";

    var html,
        element = document.getElementById('flash');


    /**
     * Random number between (and including) min and max.
     *
     * @return Integer
     */
    function random(min, max) {
        return Math.floor(Math.random() * (max + 1 - min) + min);
    }



    /**
     * Roll, or throw, a dice a number of times, default as one time.
     *
     * @return String
     */
    function rollDice(times) {
        var i,
            val,
            res = '',
            sum = 0;

        times = times || 1;

        for (i = 0; i < times; i++) {
            val = random(1, 6);
            sum += val;
            res += val + ', ';
        }

        return 'Average: ' + (sum/times).toPrecision(2) + ' Serie: ' + res;
    }



    console.log('Starting');

    html  = "<p>Throw a dice 6 times</p><ul>";
    html += "<li>" + rollDice(6);
    html += "</ul>";

    html += "<p>Throw a dice 12 times</p><ul>";
    html += "<li>" + rollDice(12);
    html += "</ul>";

    html += "<p>Throw a dice 100 times</p><ul>";
    html += "<li>" + rollDice(100);
    html += "</ul>";

    element.innerHTML = html;

    console.log('Ready');
};
