(function () {
	'use strict';
/*
 *  Här skapas en variabel, "menuitems" som innehåller de element som vår navigeringsmeny kommer visa.
 *  "title" innehåller den text du vill att menyn ska visa
 *  "url" innehåller sökvägen till den fil du vill öppna.
 */
	var menuitems = [
		{ title: "Me", url: "me.html" },
		{ title: "Redovisnigar", url: "redovisningar.html" },
		{ title: "Uppgifter", url: "uppgifter.html" }
	];
/*
 *  Här skapar vi först två variabler.
 *  "menunav" använder vi för att hämta html-elementet som vi döpte till "menu"
 *  "ul" använder vi för att skapa ett nytt html-element: "ul" (unsorted list)
 */
	var menunav = document.getElementById('menu');
	var ul = document.createElement('ul');
	// Med "appendChild()" lägger vi till vårt ul-element till det hämtade elementet "menu"
	menunav.appendChild(ul);
	// En for-loop! Underbart...
	for (var i = 0; i < menuitems.length; i++) {
		var li = document.createElement('li');
		var a = document.createElement('a');
		a.href = menuitems[i].url;
		a.innerHTML = menuitems[i].title;
		li.appendChild(a);
		ul.appendChild(li);
	}
}());


/*
 * Så här är ser menyn ut i html
 */

/*
		<ul>
			<li><a href="index.html">Me</a></li>
			<li><a href="redovisningar.html">Redovisnigar</a></li>
			<li><a href="uppgifter.html">Uppgifter</a></li>
		</ul>
*/
