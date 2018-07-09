## Over de website
De website zal gemaakt worden in Laravel en Bootstrap. Als je nog niet zo veel afweet van deze twee frameworks, ze hebben beide een goede documentatie: <br>
Laravel: https://laravel.com/docs/5.6 <br>
Bootstrap: https://getbootstrap.com/docs/4.0/getting-started/introduction/

## Benodigde programma's
Node.js: https://nodejs.org/en/download/ <br>
Composer: https://getcomposer.org/ <br>
Voer dan de volgende commando uit in je terminal: composer global require "laravel/installer" Dit installeert laravel op je pc

## Website draaien
Om de website op je pc te krijgen, moet je een Git Clone doen van het project in een willekeurige map. 
Dit kan via de git bash command line, of een git gui naar keuze. nadat je de git clone hebt uitgevoerd, 
open je het project in een command line (powershell op windows) en run je de volgende commando's: composer install & npm install. 
Alle dependencies worden dan geinstalleerd. Om de website in je browser te runnen, voer het commando php artisan serve uit. <br>

Om alle assets te compileren (scss, js, afbeeldingen etc.) voer je het commando npm run watch uit in powershell (let op dat je wel in de map van het project zit), als je dit commando hebt uitgevoerd hoef je het niet nog een keer te doen, hij blijft watchen op changes.

## Aan de website werken
Schrik niet van de vele mapjes en bestanden in Laravel, je gaat er maar een paar gebruiken. De pagina's zitten in resources/views. Hier zit ook de scss en javascript. scss is een extensie van css, waardoor je ook variabelen en functies kan maken in de css. De HTML zit in blade pagina's. Dit is een templating engine waardoor je gemakkelijk stukjes van andere pagina's kan hergebruiken. Ik heb dan ook een layouts.app bestand aangemaakt waar de standaard dingen in zitten, zoals de head van de html en de navbar. Die kan je extenden met de @extends commando (zie pagina's die ik al heb gemaakt als voorbeeld). <br>

Als je een nieuwe scss pagina aanmaakt, moet je die importen in app.scss. Dit is namelijk de enige pagina die gecompileerd wordt. Hetzelfde geldt voor de javascript. Die moet je ook importen in app.js. Ik heb dit voor veel scss bestanden al gedaan, dus check dat even voor een voorbeeld.<br>

Als je een nieuwe pagina aanmaakt, moet je daar een route voor aanmaken. Die zit in het mapje routes/web.php. Ook moet je hier in een controller een functie voor maken die de pagina teruggeeft. Als het een geheel nieuwe pagina is moet je een nieuwe controller maken. Dat kan met het commando php artisan make:controller NaamController in powershell, verander naam hier uiteraard in de naam van de controller. Ik heb ook al wat controllers aangemaakt, dus je kan die checken voor voorbeelden. <br>

Het raamwerk van de website heb ik al gemaakt, hou de conventies ook aan die ik heb gemaakt. Maak voor een onderdeel met veel code, bijvoorbeeld een slider, een partial aan. Die kan je dan includen in de pagina. <strong> De public/app.js en public/app.css moeten niet gecommit worden! Krijg ze alleen nog niet in de gitignore</strong><br>

Als je nog vragen hebt, kun je me altijd contacten. Success!


