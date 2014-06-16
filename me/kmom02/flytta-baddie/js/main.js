(function(){
	'use strict';
	var baddie, step, left, top;
	// Hämtar HTML-elementen som vi ska använda
	baddie = document.getElementById('baddie');
	
	/* Uppgift */
	// Hur många pixlar ska baddien stega? sätt ett värde på step
	
	
	/* Uppgift */
	// Vart ska baddie börja? Ge honom koordinater i form av "100px"
	baddie.style.left = 
	baddie.style.top = 
	
	// Knyter knapptryckning till ett event
	document.addEventListener("keydown", function(e) {
		var key = e.keyCode || e.which; // Hämtar knapptryckningen
		e.preventDefault(); // Hindrar pilarna från att flytta scrollen
		// Hämtar vart baddie är nu
		left = baddie.offsetLeft;	// baddie.offsetLeft hämtar vart baddie är just nu
		top = baddie.offsetTop;		// baddie.offsetTop hämtar vart baddie är just nu
		
		/* Uppgift */
		// Skapa en if-sats eller en switch-sats för variablen key
		// Key är siffor som motsvarar en tangentbordsknapp:
		//     37 - pil åt vänster
		//        ändra varibel left så att baddie flyttas åt vänster
		//     38 - pil upp
		//        ändra varibel top så att baddie flyttas uppåt
		//     39 - pil åt höger
		//        ändra variabel left så att baddie flyttas åt höger
		//     40 - pil ner
		//        ändra varibel top så att baddie flyttas nedåt
		
		
		
		/* ------------------------------------------------------ */
		/* EXTRA Uppgift */
		// Hantera så att baddie inte hamnar utanför
		// Nedan finns kod för att hjälpa dig på vägen (hur du hämtar fönsterstorlekarna)
		/* var maxLeft, maxTop;
		maxLeft = window.innerWidth, maxTop = window.innerHeight; */
		/* ------------------------------------------------------ */
		
		
		// Placerar ut baddie
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";
	});
}());
