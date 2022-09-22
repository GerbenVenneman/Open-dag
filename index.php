<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Open-dag</title>
</head>
<body>
	<div class="body">
		<header>
			<img src="img/logo.png" alt="">
			<div class="h1">
				<h1>Open-dag Curio</h1>
			</div>
			<nav>
				<a href="#vakken">Vakken</a>
				<a href="#docenten">Docenten</a>
				<a href="#rooster">Rooster</a>
				<a href="#vakanties">Vakanties</a>
				<a href="#versnellen">Versnellen</a>
				<a href="#blokken">Blokken</a>
			</nav>
	</header>
	<main>
		<div class="Welkom">	
			<h2>Welkom op curio!</h2>
			<p>Houdt jij ervan om de hele dag bezig te zijn met jou laptop? Op de opleiding Software Developer ga jij leren om apps zoals Snapchat en websites zoals Bol.com te bouwen, samen te werken en je uiteindelijke werk te presenteren doormiddel van een powerpoint. Ook heb je de vakken Nederlands en Engels want je moet op de opleiding goed kunnen communiceren met bijvoorbeeld je Team.</p>
		</div>
    	<div class="slideshow-container fade">

  
		  <div class="Containers">
		    <div class="MessageInfo"></div>
		    <img src="img/gebouw1.jpg" style="width:100%">
		    <div class="Info"></div>
		  </div>

		  <div class="Containers">
		    <div class="MessageInfo"></div>
		    <img src="img/gebouw2.jpg" style="width:100%">
		    <div class="Info"></div>
		  </div>
		
		  <div class="Containers">
		    <div class="MessageInfo"></div>
		    <img src="img/gebouw3.jpg" style="width:100%">
		    <div class="Info"></div>
		  </div>

		  <div class="Containers">
		    <div class="MessageInfo"></div>
		    <img src="img/gebouw4.jpg" style="width:100%">
		    <div class="Info"></div>
		  </div>

		  <div class="Containers">
		    <div class="MessageInfo"></div>
		    <img src="img/gebouw5.jpg" style="width:100%">
		    <div class="Info"></div>
		  </div>

		  <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="forward" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The circles/dots -->
		<div style="text-align:center">
		  <span class="dots" onclick="currentSlide(1)"></span>
		  <span class="dots" onclick="currentSlide(2)"></span>
		  <span class="dots" onclick="currentSlide(3)"></span>
		  <span class="dots" onclick="currentSlide(4)"></span>
		  <span class="dots" onclick="currentSlide(5)"></span>
		</div>
		<script>
			var slidePosition = 1;
			SlideShow(slidePosition);

			// forward/Back controls
			function plusSlides(n) {
			  SlideShow(slidePosition += n);
			}

			//  images controls
			function currentSlide(n) {
			  SlideShow(slidePosition = n);
			}

			function SlideShow(n) {
			  var i;
			  var slides = document.getElementsByClassName("Containers");
			  var circles = document.getElementsByClassName("dots");
			  if (n > slides.length) {slidePosition = 1}
			  if (n < 1) {slidePosition = slides.length}
			  for (i = 0; i < slides.length; i++) {
			      slides[i].style.display = "none";
			  }
			  for (i = 0; i < circles.length; i++) {
			      circles[i].className = circles[i].className.replace(" enable", "");
			  }
			  slides[slidePosition-1].style.display = "block";
			  circles[slidePosition-1].className += " enable";
			} 
		</script>

		<div id="vakken" class="vakken">
			<h2>Vakken</h2>
			<div class="alleVakken">	
				<div class="sub-vakken">
					<h3>Generiek</h3>
					<p>De generieke vakken bestaan uit Engels, Nederlands en Rekenen.</p>
				</div>
				<div class="sub-vakken">
					<h3>Web</h3>
					<p>Dit is een praktijkvak waar je alles leert over websites bouwen en onderhouden.</p>
				</div>
				<div class="sub-vakken">
					<h3>Native</h3>
					<p>Dit is een praktijvak waar je alles leert over Windows. Hier ga je leren om apps te maken.</p>
				</div>
				<div class="sub-vakken">
					<h3>Pra</h3>
					<p>Dit is een praktijkvak waar je alles van Native en Web toepast</p>
				</div>
				<div class="sub-vakken">
					<h3>Pro</h3>
					<p>Dit vak geeft ondersteuning aan de praktijk en leert je om te presenteren, interviewen en jezelf te reflecteren.</p>
				</div>
				<div class="sub-vakken">
					<h3>Studieloopbaanbegelieding</h3>
					<p>Bij dit vak heb je een moment met je mentor waar je klassikaal kijkt hoe het met iedereen gaat, of het huiswerk af is en of je vaak afwezig bent geweest. Ook ga je orienterende opdrachten maken voor later</p>
				</div>
			</div>
		</div>
		
		<?php

			$docenten = array("Bart", "Elton", "Fedde", "Ine", "Joep", "Joost", "Wicher");
			$random = array_rand($docenten, 4);
			
			

			

		?>
		<?php
		

		
		?>
		
		
		<div class="docenten">
			<h2>Docenten</h2>
			<div class="alleDocenten">
				<?php 
					for ($i=0; $i < 4; $i++) {
				?>

					
					<div class="sub-docenten">
				        <img src="img/logos/<?php echo $docenten[$random[$i]].'.jpg'?>" alt="">
				        <p><?php echo $docenten[$random[$i]] ?></p>
				    </div>
				     <?php
				}
				?>
					
				
					
					
				    
				
			 		`	
			</div>
			
		</div>
		<div id="rooster" class="rooster">
			<h2>Rooster</h2>
			<img src="img/rooster3.png" alt="">
		</div>
		<div id="vakanties" class="vakanties">
			<h2>Vakanties</h2>	
			<p>Zoals elke school hebben ook wij op het Curio vakanties.</p>	
			<div class="tekstkleur">	
                 <p>Zie het overzicht hieronder:</p>
                 <img src="img/vakanties.png" alt="">
			</div>	
		</div>
		<div id="blokken" class="blokken">
			<h2>Blokken</h2>
			<p>Wij werken met blokken van een half jaar. In leerjaar 1 heb je dus blok A en B. De overgang wordt bepaald per blok.</p>
		</div>
		<div id="versnellen" class="versnellen">
			<h2>Versnellen</h2>
			<p>Ook is er bij ons de optie om te versnellen. Dit betekend dat je de opleiding in 3 jaar af kan ronden in plaats van 4 jaar. Aan het einde van blok A wordt er gekeken of je geschikt bent om te gaan versnellen. Vanaf blok B zit je dan in de versnellersklas </p>
		</div>
			
	</main>
	<footer>
		<h2>Contactmogelijkheden:</h2>
		<div class="contact-locatie">
			<div class="sub-contact-locatie">
				<h3>Contact</h3>
				<li>Telefoonnummer: 088-2098250</li>
				<h3>Locatie</h3>
				<li>Terheijdenseweg 350, 4826 AA Breda</li>
			</div>
			
			<script>	
				let map: google.maps.Map;

				function initMap(): void {
				  map = new google.maps.Map(document.getElementById("map") as HTMLElement, {
				    center: { lat: -34.397, lng: 150.644 },
				    zoom: 8,
				  });
				}

				declare global {
				  interface Window {
				    initMap: () => void;
				  }
				}
				window.initMap = initMap;
			</script>
			<img src="img/googlemaps.png" alt="">
		</div>
		

	</footer>
	</div>
	
</body>
</html>