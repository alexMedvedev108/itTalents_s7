<html>
	<head>
		<meta charset="UTF-8">
		<title>Roulette</title>
		<link rel= "stylesheet" href= "main.css" type="text/css" >
		<style>
			#container {
			display: block;
			position: relative; 
			margin: 100px auto;
			}
	
			.ball { 
			width: 20px;
			height: 20px;
			background: white;
			border-radius: 50%;
			margin: 200px;
			}
		
			@keyframes spin {
			0% { transform:rotate(0deg);}
			100% {transform:rotate(360deg);}
			
			}
		
			img { 
				width: 500px;
				display: block;
				position: relative; 
				margin: 100px auto;
				animation: rotation 5s 1.5 linear;
				animation-fill-mode:forwards;
			} 
			
			@keyframes rotation {
			0% {transform:rotate(0deg);}
			100% {transform:rotate(-360deg);}
			}
		</style>
	</head>
	<body>
		<div id= "container">
			<img src="assets/roulette.png" >
			<div class="spinner" style="width: 10px; height: 10px; background: black; border-radius: 50%; margin: -455px auto; 
				animation: spin <?php $time = rand(1,2); $time += 0.5; echo $time; ?>s 
				<?php $spins = rand(1,50); $spins /= 10; echo $spins; ?> linear; animation-fill-mode:forwards;">
				<div class= "ball"></div>
			</div>
		</div>
	</body>
</html>

