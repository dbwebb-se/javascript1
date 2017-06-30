(function () {
    'use strict';


    /**
     * Code sample
     */
    function f1(a) {
        var b = a + 1;

        function f2(c) {
            var d = c + 1;

            return a + b + c + d - 2; // a, b, c, d is available
        }
        return f2(b);
    }

    window.console.log("f1(10): " + f1(10)); // Returns 42
    //f2(); // Not callable



    /**
     * Code sample
     */
    // Example on closure where inner function has access to non-local variables
    var accessToInner = (function () {
        var a = 1;

        function inner(b) {
            a += b;
            return a;
        }

        // returns access to inner function so it can be called outside of its environment.
        return inner;
    })();


    window.console.log("accessToInner(1): " + accessToInner(1)); // returns 2
    window.console.log("accessToInner(1): " + accessToInner(1)); // returns 3
    window.console.log("accessToInner(1): " + accessToInner(1)); // returns 4
    window.console.log("accessToInner(1): " + accessToInner(1)); // returns 5



    /**
     * Code sample
     */
    var Mos = (function () {
        var Mos = {};

        /**
        * Dump own properties of an object
        * @param the object to show
        */
        Mos.dump = function (obj) {
            for (var prop in obj) {
                if (obj.hasOwnProperty(prop)) {
                    window.console.log(prop);
                }
            }
        };

        /**
        * Generate a random number.
        * @param min the smallest possible number
        * @param max the largest possible number
        * @returns a random number where min >= number <= max
        */
        Mos.random = function (min, max) {
            return Math.floor(Math.random()*(max+1-min)+min);
        };

        // Expose public methods
        return Mos;
    })();

    window.console.log("Mos.random(1, 6): " + Mos.random(1, 6));
    window.console.log("Mos.dump(window.localStorage): " + Mos.dump(window.localStorage));



    /**
     * Code sample
     */
    var Mumin1 = (function () {
        return {
            myNameIs: function () {
                return "Mumintrollet";
            }
        };
    })();

    window.console.log("Mumin1.myNameIs(): " + Mumin1.myNameIs()); // returns 'Mumintrollet'



    /**
     * Code sample
     */
    var Mumin2 = (function () {
        function getName() {
            return "Mumintrollet";
        }

        return {myNameIs: getName};
    })();

    window.console.log("Mumin2.myNameIs(): " + Mumin2.myNameIs()); // returns 'Mumintrollet'
}());
