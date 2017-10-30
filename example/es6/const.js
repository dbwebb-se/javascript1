/**
 * Testing const
 */
"use strict";

const a = "a";
const b = "b";

let c = function c() {
    const a = "A";

    console.log(a);
    console.log(b);
};

c();

console.log(a);
console.log(b);
