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
 function joinArray(testArray) {
    var aString = testArray.join(' ');
    return aString;
 }

/**
 * Question 10
 **/
 function lastIndex(testArray) {
    return testArray.lastIndexOf(5);
 }

/**
 * Question 11
 **/
 function popArray(testArray) {
    var result, arrBefore, arrAfter, removed;
    arrBefore = 'Before: ' + testArray.join();
    result = arrBefore;
    removed = ' Removed: ' + testArray.pop();
    arrAfter = ' After: ' + testArray.join();
    result += arrAfter + removed;
    
    return result;
 }

/**
 * Question 12
 **/
 function pushArray(testArray, val) {
    testArray.push(val);
    
    return testArray;
 }

/**
 * Question 13
 **/
 function shiftArray(testArray) {
    var result, arrBefore, arrAfter, removed;
    arrBefore = 'Before: ' + testArray.join();
    result = arrBefore;
    removed = ' Removed: ' + testArray.shift();
    arrAfter = ' After: ' + testArray.join();
    result += arrAfter + removed;
    
    return result;
 }

/**
 * Question 14
 **/
 function sortArray(testArray) {
    return testArray.sort(function(a,b) {
        return a-b;
    });
 }