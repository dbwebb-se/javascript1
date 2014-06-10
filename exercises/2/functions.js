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