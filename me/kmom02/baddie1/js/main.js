(function(){
	'use strict';
	var baddie, step, left, top;
	// Hämtar HTML-elementen som vi ska använda
	baddie = document.getElementById('baddie');
	
	/* ----------- */
	/* Uppgift 2.1 */
	// Vart ska baddie börja? Ge honom koordinater i form av "100px"
	baddie.style.left = 
	baddie.style.top = 
	
	/* ----------- */
	/* Uppgift 2.2 */
	// Hur många pixlar ska baddien stega? Sätt ett värde på step

	
	// Knyter knapptryckning till ett event
	document.addEventListener("keydown", function(e) {
		// Hämtar knapptryckningen
		var key = e.keyCode || e.which;
		// Hindrar pilarna från att flytta scrollen
		e.preventDefault();
		// Hämtar vart baddie är nu
		left = baddie.offsetLeft;	// baddie.offsetLeft hämtar vart baddie är just nu
		top = baddie.offsetTop;		// baddie.offsetTop hämtar vart baddie är just nu
		
		/* ----------- */
		/* Uppgift 2.3 */
		// Skapa en if-sats eller en switch-sats för variablen key
		// Key är siffor som motsvarar en tangentbordsknapp:
		//     37 - pil åt vänster
		//        ändra varibel left så att baddie kommer att flyttas åt vänster
		//     38 - pil upp
		//        ändra varibel top så att baddie kommer att flyttas uppåt
		//     39 - pil åt höger
		//        ändra variabel left så att baddie kommer att flyttas åt höger
		//     40 - pil ner
		//        ändra varibel top så att baddie kommer att flyttas nedåt
		
		
		
		/* ------------------------------------------------------ */
		/* EXTRA Uppgift */
		// Hantera så att baddie inte hamnar utanför
		// Nedan finns kod för att hjälpa dig på vägen (hur du hämtar fönsterstorlekarna)
		/* var maxLeft, maxTop;
		maxLeft = window.innerWidth, maxTop = window.innerHeight; */
		
		
		/* ------------------------------------------------------ */
		
		
		// HÄR placerar vi slutligen ut baddie
		// Se till att left och top innehåller siffervärden som motsvarar vart baddie ska flytta sig
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";
	});
}());
