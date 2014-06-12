Lab questions
==============================

// Create each one these questions in separate functions that returns the appropriate type. 
// Use exercise.js to call the function and print out the result on separate lines.

1. Create an empty object called "person" at the top in functions.js. This will be a global variable that can be reached from inside the exercise functions.

2. An empty object is not so fun so how about to give your object some properties called "firstName", "lastName", "age", "height", "eyecolor". Name the function "firstObject" and return the whole object. Print out the different attributes by calling the function for example: firstObject().age or firstObject().name.

3. Now your person needs to be able to present itself. Create a new attribute, called "presentation" that is a method which returns a presentation phrase, for example: Hello! My name is Fox Mulder. Dont forget to give it a lastname aswell (perhaps called lastName). Name the function "firstMethod" and print out the result.

4. Your person seems to be alone. Now that we have a good foundation for a person, we use this to create another. Outside the functions, create a new "person" in another way. Use "function Person() {this.firstName = firstName, this.lastName = lastName, etc}". This way you could make instances out of that person for further use. Make your instances with: var male = new Person("John", "Doe", etc). Create one "male" and one "female" and give them different attributes. The presentation method should be the same for both. Create a function below, called "myPersons" that returns the two new objects. 

5. Nice! Now you have two persons. Lets make them talk to each other. Create a method in "Persons" that greets the other one. Create a function that returns the result. Name the function "personsGreet", return the result and print it.   

------------------------------

2014-06-03 (Zingo89) PA1 First try.