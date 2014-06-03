(function(){
    'use strict';

    var myContent = document.getElementById('content');

    myContent.innerHTML = '<h3>This is a template!</h3>';
    myContent.innerHTML += '<button onclick="buttonone()">Show</button>'
    myContent.innerHTML += '<button onclick="buttontwo()">Hide</button>'

    myContent.innerHTML += '<p id="hello" class=hide>Hello world</p>'

})();

function buttonone() {
	document.getElementById("hello").className = "show";
}

function buttontwo() {
	document.getElementById("hello").className = "hide";
}