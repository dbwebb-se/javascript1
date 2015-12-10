/*jshint unused: true */
/*exported allowDrop, drag, drop */

function allowDrop(ev) {
    "use strict";
	ev.preventDefault();
}

function drag(ev) {
    "use strict";
	ev.dataTransfer.setData("Text", ev.target.id);
	console.log('id of draggable element: ' + ev.target.id);
}

function drop(ev) {
    "use strict";
	ev.preventDefault();
	var data=ev.dataTransfer.getData("Text");
	ev.target.appendChild(document.getElementById(data));
}
