/**
 * Testing let
 */
"use strict";

let a = "a";
let b = "b";

let c = function c() {
    let a = "A";

    console.log(a);
    console.log(b);
};

c();

console.log(a);
console.log(b);
