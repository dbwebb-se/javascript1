/**
 * Question 1
 **/
 var person = {};
/**
 * Question 2
 **/
 function firstAttributes() {
    person.firstName = "John",
    person.lastName = "Doe",
    person.age = 30,
    person.height = '180cm',
    person.eyecolor = "blue";
    return person;
 }
/**
 * Question 3
 **/
 function firstMethod() {
    person.presentation = function () {
        return 'Hello! My name is ' + person.firstName + ' ' + person.lastName;
    };
    return person.presentation();
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
    this.greet = function(name) {
        return 'Hi ' + this.firstName + '! ' + 'It is ' + name + '.';
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
 function personsGreet() {
    var result = male.greet(female.firstName);
    return result;
 }
 
/**
 * Question 6
 **/
 
/**
 * Question 7
 **/
 
/**
 * Question 8
 **/
 

/**
 * Question 9
 **/
 

/**
 * Question 10
 **/
 

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
 