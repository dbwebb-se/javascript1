
/**
 * Code sample
 */
function f1 (a) {
    var b = a + 1;

    function f2 (c) {
        var d = c + 1;
        return a + b + c + d - 2; // a, b, c, d is available
    }

    return f2(b);
}

console.log("f1(10): " + f1(10)); // Returns 42
//f2(); // Not callable



/**
 * Code sample
 */
// Example on closure where inner function has access to non-local variables
var accessToInner = (function() {
    var a = 1;

    function inner (b) {
        a += b;
        return a;
    }

    return inner; // returns access to inner function so it can be called outside of its environment.
})();


console.log("accessToInner(1): " + accessToInner(1)); // returns 2
console.log("accessToInner(1): " + accessToInner(1)); // returns 3
console.log("accessToInner(1): " + accessToInner(1)); // returns 4
console.log("accessToInner(1): " + accessToInner(1)); // returns 5



/**
 * Code sample
 */
var Mos = (function() {
  var Mos = {};

    /**
    * Dump own properties of an object
    * @param the object to show
    */
    Mos.dump = function (obj) {
    for (var prop in obj) {
        if (obj.hasOwnProperty(prop)) {
            console.log(prop);
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

console.log("Mos.random(1, 6): " + Mos.random(1, 6));
console.log("Mos.dump(window.localStorage): " + Mos.dump(window.localStorage));



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

console.log("Mumin1.myNameIs(): " + Mumin1.myNameIs()); // returns 'Mumintrollet'



/**
 * Code sample
 */
var Mumin2 = (function () {

    function getName() {
        return "Mumintrollet";
    }

  return {
        myNameIs: getName
  };

})();

console.log("Mumin2.myNameIs(): " + Mumin2.myNameIs()); // returns 'Mumintrollet'
