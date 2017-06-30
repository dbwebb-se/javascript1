(function(){
	var askBtn = document.getElementById("questionButton");
	var quoteBtn = document.getElementById("quoteButton");

var Marvin = function(){
	this.marvinType = [{
		replies: ['It is sunny as hell!', 'I\'m doing good, thanks!']
	},
	{
		quotes: [
			'I could calculate your chance of survival, but you won\'t like it.',
		    'I\'d give you advice, but you wouldn\'t listen. No one ever does.',
		    'I ache, therefore I am.',
		    'I\'ve seen it. It\'s rubbish. (About a Magrathean sunset that Arthur finds magnificent)',
		    'Not that anyone cares what I say, but the Restaurant is on the other end of the universe.',
		    'I think you ought to know I\'m feeling very depressed.',
		    'My capacity for happiness," he added, "you could fit into a matchbox without taking out the matches first.',
		    'Arthur: "Marvin, any ideas?" Marvin: "I have a million ideas. They all point to certain death."',
		    '"What\'s up?" [asked Ford.] "I don\'t know," said Marvin, "I\'ve never been there."',
		    'Marvin: "I am at a rough estimate thirty billion times more intelligent than you. Let me give you an example. Think of a number, any number." Zem: "Er, five." Marvin: "Wrong. You see?"',
		    'Zaphod: "Can it Trillian, I\'m trying to die with dignity. Marvin: "I\'m just trying to die."',]
	},
	{
		audio: [
			'audio/sunday.mp3',
			'audio/monday.mp3',
			'audio/tuesday.mp3',
			'audio/wednesday.mp3',
			'audio/thursday.mp3',
			'audio/friday.mp3',
			'audio/saturday.mp3'
			],
		info: [
			'Lyckliga valsen (The happy waltz)<br>It\'s Sunday! Can you feel the happiness?',
			'Steve Demo - Affirmation<br>It\'s finally Monday!',
			'Big Mike G - Como Han Pasado Los Anos<br>It\'s Tuesday!',
			'Leonardo Cortellazzi & Valdis Jansons - Agnus Dei<br>It\'s Wednesday!',
			'Hotel California Cover<br>It\'s Thursday! Really, really nice cover... :)',
			'Hairy Larry - Mono Monster<br>It\'s Friday! Shred it Larry!',
			'Singer in a Cowboy Band<br>It\'s Saturday! Cowboy up!']
	},
	{
		video: [
			'<iframe width="500" height="250" src="//www.youtube.com/embed/VxvDVhjALoU" frameborder="0" allowfullscreen></iframe>',
			'<video width="500" height="250" controls><source src="video/monday.mp4" type="video/mp4"> Your browser does not support the video tag.</video>',
			'<iframe width="500" height="250" src="//www.youtube.com/embed/pKmNzjKUNJg" frameborder="0" allowfullscreen></iframe>',
			'<iframe width="500" height="250" src="//www.youtube.com/embed/yQaAGmHNn9s" frameborder="0" allowfullscreen></iframe>',
			'<iframe width="500" height="250" src="//www.youtube.com/embed/JGCsyshUU-A" frameborder="0" allowfullscreen></iframe>',
			'<iframe width="500" height="250" src="//www.youtube.com/embed/njos57IJf-0" frameborder="0" allowfullscreen></iframe>',
			'<iframe width="500" height="250" src="//www.youtube.com/embed/YuOBzWF0Aws" frameborder="0" allowfullscreen></iframe>'
			],
		info: [
			'Funny animals!<br>This videofile is streaming from Youtube, using iframe!<br>',
			'Life Of A Programmer<br>This videofile is located on the studentserver. Stream using html5 video.<br>',
			'The world is awesome!<br>This videofile is streaming from Youtube, using iframe!<br>',
			'Javascript tutorial from theNewBoston...nice!<br>This videofile is streaming from Youtube, using iframe!<br>',
			'Lindsey Stirling - Shadows<br>This videofile is streaming from Youtube, using iframe!<br>',
			'Bill Gates vs Steve Jobs<br>This videofile is streaming from Youtube, using iframe!<br>',
			'CollegeHumor - If google was a guy<br>This videofile is streaming from Youtube, using iframe!<br>']
	}];
};

function askMarvin(){
	var test = new Marvin();
	var currDate = new Date();
	var currDay = currDate.getDay();
	var question = document.getElementById('question').value.toString();
	var answer = document.getElementById('answerSpan');

	if (question.indexOf("weather") > -1){
		answer.innerHTML = test.marvinType[0].replies[0];
	}
	else if (question.indexOf("are you") > -1){
		answer.innerHTML = test.marvinType[0].replies[1];
	}
	else if (question.indexOf("play audio") > -1){
		var audioElement = document.createElement('audio');
		var audioSrc = document.createElement('source');
		audioSrc.preload='auto';

		audioSrc.type='audio/mpeg';
		audioSrc.src=test.marvinType[2].audio[currDay];
		audioElement.appendChild(audioSrc);
		answer.innerHTML = 'Now playing: ' + test.marvinType[2].info[currDay] + '<br><br>';
		answer.appendChild(audioElement);
		audioElement.controls = true;
		audioElement.play();
	}
	else if (question.indexOf("play video") > -1){
		answer.innerHTML = test.marvinType[3].info[currDay] + '<br>' + test.marvinType[3].video[currDay];
	}
	else {
		answer.innerHTML = "I don't understand...try something like this: How are you?, Is the weather nice?, play audio, play video";
	}

	console.log('Current day number: ' + currDay);
	console.log('Question asked: ' + question);
}

function getQuote(){
	var quoteNr = Math.floor(Math.random() * 11);
	var test = new Marvin();
	var quote = document.getElementById('answerSpan');
	quote.innerHTML = test.marvinType[1].quotes[quoteNr];
	console.log('Randomized number: ' + quoteNr);
	console.log('Delivered quote: ' + test.marvinType[1].quotes[quoteNr]);

}

askBtn.addEventListener("click", askMarvin);
quoteBtn.addEventListener("click", getQuote);

}());
