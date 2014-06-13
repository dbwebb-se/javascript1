/**
 * Question 1
 **/
 var firstPerson = {};
/**
 * Question 2
 **/
 function firstAttributes() {
    firstPerson.firstName = "John",
    firstPerson.lastName = "Doe",
    firstPerson.age = 30,
    firstPerson.height = '180cm',
    firstPerson.eyecolor = "blue";
    return firstPerson;
 }
/**
 * Question 3
 **/
 function firstMethod() {
    firstPerson.presentation = function () {
        return 'Hello! My name is ' + firstPerson.firstName + ' ' + firstPerson.lastName;
    };
    return firstPerson.presentation();
 }
 
/**
 * Question 4
 **/
 function Person(firstName, lastName, age, height, eyecolor) {
    this.firstName = firstName,
    this.lastName = lastName,
    this.age = age,
    this.height = height + 'cm',
    this.eyecolor = eyecolor,
    this.presentation = function() {
        return 'Hello! My name is ' + this.firstName + ' ' + this.lastName;
    },
    this.greet = function(other) {
        console.log(typeof(other.firstName));
        return 'Hi ' + other.firstName + '! ' + 'It is ' + this.firstName + '.';
    }
 }
 var male = new Person("Fox", "Mulder", 30, 183, "brown");
 var female = new Person("Dana", "Scully", 28, 167, "green");

 function myPersons() {
    return {male: male,female: female};
 }

/**
 * Question 5
 **/
 function personsGreet(personOne, personTwo) {
    var result = personOne.greet(personTwo);
    return result;
 }
 
/**
 * Question 6
 **/
 function isInstance() {
    return male instanceof Person;
 }
 
/**
 * Question 7
 **/
 function delAttribute() {
    delete male.eyecolor;
    delete female.eyecolor;
    return {male: male, female:female};
 }
/**
 * Question 8
 **/
 function Pet(species, name, color, age) {
    this.species = species,
    this.name = name,
    this.color = color,
    this.age = age;
 }

 function addProperty() {
    var dog = new Pet("dog", "Cujo", "yellow", 10);
    var cat = new Pet("cat", "Oliver", "orange", 4);
    male.pet = cat; 
    female.pet = dog;
    return Object.keys(male);
 }

/**
 * Question 9
 **/
 function usePrototype(currPerson) {
    Person.prototype.presentPet = function() {
        return 'My ' + this.pet.species + ' is called ' + this.pet.name + ' and its ' + this.pet.color + ' and ' + this.pet.age + ' years old.';
    }
    return currPerson.presentPet();
 }

/**
 * Question 10
 **/
 function useCall() {
    delete male.greet;
    return female.greet.call(male, female);   
 }

/**
 * Question 11
 **/
 

/**
 * Question 12
 **/
 

/**
 * Question 13
 **/
 

/**
 * Question 14
 **/
 