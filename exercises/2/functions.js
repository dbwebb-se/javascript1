/**
 * Question 1
 **/
 function sumNumbers(a, b) {
 	var sum = a + b;
 	return sum;
 }

/**
 * Question 2
 **/
 function productNumbers(a, b) {
 	var sum = a * b;
 	return sum;
 }

/**
 * Question 3
 **/
 function sumRangeNumbers(lowest, highest) {
 	var sum = 0;
 	for(var i = lowest+1; i < highest; i++) {
 		sum += i;
 	}
 	return sum;
 }

/**
 * Question 4
 **/
 function stringPhrase(name) {
 	var phrase = "Hi " + name + ", how are you?";
 	return phrase;
 }

/**
 * Question 5
 **/
 function stringResponse(question) {
 	var response = "Try again";

 	if(question === "How are you?") {
 		response = "I am fine";
 	}
 	return response;
 }

/**
 * Question 6
 **/
 function checkIfHigher(a, b) {
 	var isHigher = false;

 	if(a > b) {
 		isHigher = true;
 	}
 	return isHigher;
 }

/**
 * Question 7
 **/
 function printRange(a, b) {
 	var result = "";
 	var i = 0;

 	if(a < b) {
 		for(i = a; i < b+1; i++) {
 			result += i + ",";
 		}
 	}
 	else if(a > b) {
 		for(i = a; i > b-1; i--) {
 			result += i + ",";
 		}
 	}
 	else {
 		result = a;
 	}

 	return result;
 }

/**
 * Question 8
 **/
 function stringRepeat(text, number) {
 	var result = '';

 	for(var i = 0; i < number; i++) {
 		result += text + ",";
 	}
 	return result;
 }

/**
 * Question 9
 **/
 function calculateInterest(money, years, interest) {
 	var result = money, currentInterest = 0;

 	for(var i = 0; i < years; i++) {
 		currentInterest = (result / 100) * interest;
 		result += currentInterest; 
 	}
 	return result;
 }

/**
 * Question 10
 **/
 function countNumbers(a, b) {
 	var counter = 0;

 	if(a < b) {
 		for(var i = a+1; i < b; i++) {
 			counter++;
 		}
 	}
 	else if(a > b) {
 		for(var i = a; a > b+1; a--) {
 			counter++;
 		}
 	}
 	return counter;
 }

/**
 * Question 11
 **/
 function inRange(value) {
 	var isInRange = false;

 	if(value > 10 && value < 20) {
 		isInRange = true;
 	}
 	return isInRange;
 }