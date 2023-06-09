<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="CSS/TextAnimation.css">
		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/Footer.css">
		<link rel="stylesheet" href="CSS/book.css">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');

	</style>
		
		<!--subtitles :: font-family: 'Montserrat Alternates', sans-serif;-->
		<!--text :: font-family: 'Andika', sans-serif;-->
	</head>
	
	<body>
		<div style="min-height: 80vh;">
			<?php include 'MenuBar2.php';?>
			<div style="font-family: 'Montserrat Alternates', sans-serif; font-weight: bold; font-size: 40px; text-align: center; margin-top: 5%; width: 100%">
					Ce trebuie să știi la achiziționarea unui telefon </div>
				
			<div class="containerCard">
			
				<div class="firstCard">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="CSS/Others/AndroidVSiOS.png" alt="android" class="infoPic">
							</div>
							
							<div class="flip-card-back">
								<p> <b>Android</b> și <b>iOS</b> sunt sisteme de operare și au câteva diferențe majore:
								</p> 
								<p> 1. Disponibilitate: Android este disponibil pe o gamă mai largă de dispozitive.
								</p>
								<p> 2. Interfața: Android are o interfață personalizabilă și flexibilă, iar iOS are o interfață uniformă și elegantă.
								</p>
								<p> <a href="info1.php" class="infoText"> Citește mai mult...</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="secondCard">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="CSS/Others/Baterie.png" alt="Avatar" class="infoPic">
							</div>
							
							<div class="flip-card-back">
								<p>Bateria unui telefon este o componentă importantă, care furnizează energia necesară pentru a-l utiliza.</p>  
								<p>Capacitatea bateriei poate varia în funcție de producător și se măsoară în <i>mAh (miliamperi-ora)</i>.</p> 
								<p> <a href="info2.php" class="infoText"> Citește mai mult...</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="thirdCard">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="CSS/Others/Activitati.png" alt="Avatar" class="infoPic">
							</div>
							
							<div class="flip-card-back">
								<p>În funcție de activitățile pe care vrei să le întreprinzi, pentru comunicare, gestionarea programului și navigare GPS,
								nu ai nevoie de un telefon performant.</p>
								<p>Totuși, dacă vrei să folosești telefonul pentru divertisment și fotografie, atunci este esențial un dispozitiv mai performant,
								cu spațiu de stocare și baterie durabilă.
								<p> <a href="info3.php" class="infoText"> Citește mai mult...</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="fourthCard">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="CSS/Others/SpatiuStocare.png" alt="Avatar" class="infoPic">
							</div>
							
							<div class="flip-card-back">
								<p>Spațiul de stocare al telefonului este extrem de important, deoarece acesta determină cât de 
								multe fișiere și aplicații pot fi stocate și utilizate pe dispozitiv.</p> 
								<p> Fără suficient spațiu de stocare, vei fi limitat în ceea ce privește fișierele media 
								salvate, iar dspozitivul ar putea începe să ruleze lent și să se blocheze. </p>
								<p> <a href="info4.php" class="infoText"> Citește mai mult...</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>

	
		<?php include 'Footer.php';?>
	</body>
</html>