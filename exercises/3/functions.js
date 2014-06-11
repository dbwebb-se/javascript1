/**
 * Question 1
 **/
 function myFirstArray() {
    var myArray = new Array(5);

    for(var i = 0; i < myArray.length; i++) {
        myArray[i] = i+1;
    }
    return myArray;
 }

/**
 * Question 2
 **/
 function arraySentence() {
    var sentence = ["Hello!", "My", "name", "is", "John", "Doe"];
    return sentence;
 }

/**
 * Question 3
 **/
 function checkArray(testArray) {
    return Array.isArray(testArray);
 }

/**
 * Question 4
 **/
 function concArrays() {
    var arrOne = ["This", "can", "be", "useful"];
    var arrTwo = [1,2,3,4,5];
    var arrThree = arrOne.concat(arrTwo);

    return arrThree;
 }

/**
 * Question 5
 **/
 function reverseArray(testArray) {
    return testArray.reverse();
 }

/**
 * Question 6
 **/
 function findIndex(testArray, val) {
    return testArray.indexOf(val);
 }

/**
 * Question 7
 **/
 function countArray(testArray) {
    var counter = 0;

    testArray.forEach(function(entry) {
        counter++;
    });

    return counter;
 }

/**
 * Question 8
 **/
 function changeArrayElements(testArray) {
    var result = [];

    testArray.forEach(function(entry) {
        result.push(entry + 'x');
    });
    
    return result;
 }

/**
 * Question 9
 **/

/**
 * Question 10
 **/