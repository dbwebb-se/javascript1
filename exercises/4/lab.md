Lab questions
==============================

// Create each one these questions in separate functions that returns the appropriate type. 
// Use exercise.js to call the function and print out the result on separate lines.

1. Create an empty object called "firstPerson" at the top in functions.js. This will be a global variable that can be reached from inside the exercise functions. Also create a function, called "firstObject" that returns the new object.

2. An empty object is not so fun so how about to give your object some properties called "firstName", "lastName", "age", "height", "eyecolor". Name the function "firstAttributes" and return the whole object. Test to print out the different attributes by calling the function for example: firstAttributes().age or firstAttributes().name.

3. Now your person needs to be able to present itself. Create a new attribute, called "presentation" that is a method which returns a presentation phrase, for example: Hello! My name is Fox Mulder. Dont forget to give it a lastname aswell (perhaps called lastName). Name the function "firstMethod" and print out the result.

4. Your person seems to be alone. Now that we have a good foundation for a person, we use this to create another. Outside the functions, create a new "person" in another way. Use "function Person() {this.firstName = firstName, this.lastName = lastName, etc}". This way you could make instances out of that person for further use. Make your instances with: var male = new Person("John", "Doe", etc). Create one "male" and one "female" and give them different attributes. The presentation method should be the same for both. Create a function below, called "myPersons" that returns the two new objects. 

5. Nice! Now you have two persons. Lets give them the ability to say hi to the other one. Create a method in "Persons" that greets the other one. Create a function that returns the result. The function should take two arguments, for example if the male is going to say hi to the female: personsGreet(male, female) and the other way around. Name the function "personsGreet". Print out the result.

6. When you get a lot of instances it can be hard to keep track on what the objects are an instance of. Create a function that returns true/false depending on if "male" or "female" are instances of "Person". Name the function "isInstance" and print out the result.  

7. If you dont want to keep an attribute for some reason you can delete it with a command. Create a function that deletes the property "eyecolor" from "male" and "female". Name the function "delAttribute" and return the objects.  

8. What if your persons need a pet? Create a global object called "Pet" and give the male and female a new property called "pet". Give the male an instance of "Pet" called "cat" and the female an instance called "dog". The Pet properties should be "species", "name", "color", "age". Name the function "addProperty" and return the keys (properties) of the male or female.

9. We need more functionality to our persons. Use prototyping to add a method to "Person" that makes a presentation of the pet that the person have. Name the function "usePrototype" and the method "presentPet". The function should take one argument, male or female, that represents the person that should present their pet. Return the presentation and print out the result.

10. If you would remove the method "greet" from the male, he could still access the females method. Create a function called "useCall" and delete the males "greet" method. Use object.call() to make the male say hi to the female via her "greet" method. Return the result and print it out.

------------------------------

2014-06-03 (Zingo89) PA1 First try.