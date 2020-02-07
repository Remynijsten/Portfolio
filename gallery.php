<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>	
	<body>
		<div class="main">
			<!-- Nav -->
			<?php include "nav.php" ?>
			
			<!-- Carousel -->
			<?php include "carousel.php" ?>

			<div class="line"></div>

			<!-- Gallery -->
			
			<div class="galleryCON">
				<div class="row">
					<div class="column">
						<img src="img/cafe.png" alt="cafe"><div>Horeca Applicatie</div>
						<img src="img/handy.png" alt="handy"><div>Handy Website</div>
						<img src="img/garage.png" alt="garage"><div>Garage Template</div>
						<img src="img/handy2.png" alt="handy2"><div>Handy Website</div>
					</div>
					<div class="column">
						<img src="img/game.png" alt="game"><div>Adventure Game</div>
						<img src="img/responsive2.png" alt="responsive2"><div>Responsive Website</div>
						<img src="img/gameshop.png" alt="game"><div>Adventure Game</div>
					</div>
					<div class="column">
						<img src="img/recept.png" alt="recept"><div>Receptenboek</div>
						<img src="img/rekenmachine.png" alt="calc"><div>Rekenmachine</div>
					</div>
				</div>
			</div>



			<div class="line"></div>

			<!-- Footer -->
			<?php include "footer.php" ?>
		</div>

		<script src="jquery-3.4.1.min.js"></script>
		<script src="script.js"></script>
		<script src="https://kit.fontawesome.com/970adb2e15.js" crossorigin="anonymous"></script>
	</body>
</html>