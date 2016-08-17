/**
 *
 */

/*
(function() {

    function a() {
        console.log(a);
    }

    var b = function() {
        console.log(b);
    }

    var c = a;

    a();
    b();
    c();

    a.toString(); // Has a name
    b.toString(); // Has no name
    c.toString(); // Has a name
}())

//a(); // Not visible
//b(); // Not visible


/* ------------------------------------------------------------- */
var jack = {
    name: "Spaceball Jack",
    age: 45,
    income: 35000
};

console.log(jack.name);
console.log(jack.age);
console.log(jack.income);


var jill = Object.create(jack);

console.log(jill.name);
console.log(jill.age);
console.log(jill.income);

jill.name = "Jill";
jill.age = 42;
jill.income = 36000;

console.log(jill.name);
console.log(jill.age);
console.log(jill.income);


console.log("------------------------------------------------");



/* ------------------------------------------------------------- */

var Person = {
    "name": "Spaceball Jack"
};
console.log(Person.name);

var newPerson = Person;
newPerson.name = "Madame Von Bartlesby";

console.log(Person.name);
console.log(newPerson.name);


console.log("------------------------------------------------");



/* ------------------------------------------------------------- */

var Person = {
    name: "",
    age: null,
    income: null
};
console.log(Person.name);

var madame = Object.create(Person);
var mister = Object.create(Person);
madame.name = "Madame Von Bartlesby";
mister.name = "Mister Von Bartlesby";

console.log(Person.name);
console.log(madame.name);
console.log(mister.name);



console.log("------------------------------------------------");



/* ------------------------------------------------------------- */

/*
ellen.name = "Ellen";
ellen.age = 35;
ellen.income = 45000;
*/

Person.init = function(name, age, income) {
    this.name = name;
    this.age = age;
    this.income = income;
};

Person.print = function() {
    console.log(this.name + " is " + this.age + " years old and earns " + this.income);
};

var kalle = Object.create(Person);
var ellen = Object.create(Person);

kalle.init("Kalle", 17, 10000);
ellen.init("Ellen", 35, 45000);

kalle.print();
ellen.print();

console.log(kalle);


console.log("------------------------------------------------");



/* --------  CONSTRUCTOR ------------------------------------------ */

function Animal(species, sound) {
    this.species = species;
    this.sound = sound;
}

Animal.prototype.print = function() {
     console.log(this.species + " says " + this.sound);
};

Animal.moped = "3";

var tiger = new Animal("Tiger", "Raour");
var mouse = new Animal("Mouse", "Piip, piip");

var tiger1 = Object.create(new Animal("cow", "moooo"));

console.log(tiger1);

tiger.print();
mouse.print();
tiger1.print();


console.log("------------------------------------------------");




/* ------------------------------------------------------------- */

/*
var John = {
    name: "John",
    age: 45,
    income: 35000
};

var Ellen = {
    name: "Ellen",
    age: 35,
    income: 45000
};

var Kalle = {
    name: "Kalle",
    age: 17,
    income: 10000
};
console.log(John.income); // 35000
console.log(Kalle.income); // 80000
console.log(Ellen.income); // 10000


var John = {
    name: "John",
    age: 45,
    income: 35000,
    updateIncome: function(newIncome) {
        this.income = newIncome;
    }
};



console.log("------------------------------------------------");

*/

/* --------  CONSTRUCTOR ------------------------------------------ */


/*
function Person() {
    this.name = "Spaceball Jack";
};

var myPerson = new Person();



function Person(newName) {
    this.name = newName;
};

var newPerson = new Person("Spaceball Jack");



function Person(newName) {
    this.name = newName;
};

var malePerson = new Person("Spaceball Jack");
var femalePerson = new Person("Madame Von Bartlesby");

console.log(malePerson.name);
console.log(femalePerson.name);


function Person(newName, newAge, newIncome) {
    this.name = newName;
    this.age = newAge;
    this.income = newIncome;
    this.updateIncome = function(updatedIncome) {
        this.income = updatedIncome;
    }
};

var John = new Person("John", 45, 35000);
var Ellen = new Person("Ellen", 35, 45000);
var Kalle = new Person("Kalle", 17, 10000);

John.updateIncome(33500);
console.log(John.income); // 33500
*/
