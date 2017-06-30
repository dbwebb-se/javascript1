(function () {
    "use strict";

    //var value = 42;
    var output = document.getElementById("output");
    var anchor = document.getElementById("anchor");
    var confirm = document.getElementById("confirm");

    //document.write("<h3>This is a template!</h3>")
    output.innerHTML = "<h3>This is a template!</h3>";

    window.console.log("Hello in the consol.");
    window.console.log("Here you can write inline code of JavaScript and debug your programs.");
    window.console.log("Try writing 1+1 (bottom of the developer tool) and see what happens.");
    window.console.log("Try writing: window.console.log('Hi')");
    window.console.log("Try writing: value");

    anchor.addEventListener("click", function () {
        window.alert("This is a message in a popup saying Hello World");
    });

    confirm.addEventListener("click", function () {
        window.confirm("Press F12 to open the developer tools for your browser, " +
        "select the console. Then reload the page and see the message in the console.");
    });
})();
