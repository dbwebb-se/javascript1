(function(){
    "use strict";

    //var value = 42;
    var output = document.getElementById("output");
    var anchor = document.getElementById("anchor");
    var confirm = document.getElementById("confirm");

    //document.write("<h3>This is a template!</h3>")
    output.innerHTML = "<h3>This is a template!</h3>";

    console.log("Hello in the consol.");
    console.log("Here you can write inline code of JavaScript and debug your programs.");
    console.log("Try writing 1+1 (at the bottom of the developer tool) and see what happens.");
    console.log("Try writing: console.log('Hi')");
    console.log("Try writing: value");


    // <p><a href="#" onclick='alert("This is a message in a popup saying Hello World");'>Show an alert popup.</a></p>
    //alert("This is a message in a popup saying Hello World");
    anchor.addEventListener("click", function() {
        window.alert("This is a message in a popup saying Hello World");
    });


    //<p><button onclick='confirm("Press F12 to open the developer tools for your browser, select the console. Then reload the page and see the message in the console.");'>Show a confirm popup.</button></p>
    //confirm("Press F12 to open the developer tools for your browser, select the console. Then reload the page and see the message in the console.");
    confirm.addEventListener("click", function() {
        window.confirm("Press F12 to open the developer tools for your browser, select the console. Then reload the page and see the message in the console.");
    });


    /*
    <p><a href="#" onclick='alert("This is a message in a popup saying Hello World");'>Show an alert popup.</a></p>

    <p><button onclick='confirm("Press F12 to open the developer tools for your browser, select the console. Then reload the page and see the message in the console.");'>Show a confirm popup.</button></p>
    */

})();
