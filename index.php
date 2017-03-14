<?php
session_start();
$_SESSION['tiempo'] = $_POST['time'];
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Semaforo</title>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<style>
		.main{
			position: absolute;
			top: 25%;
		}
		
		body{
			background-image: url(bg.jpg);
			background-size: cover;
			
		}
		
		h1{
			font-size:100px;
			margin-bottom: 50px;
			font-family: fuenteDura;	
			color: white;
		}
		
		.h1{
			text-align: center;
		}
		
		@font-face{
			font-family: fuenteDura;
			src: url(Amontillados.ttf);
		}
		
		.btn-ghost{
			text-decoration: none;	
			background-color: transparent;
			border: 2px solid white;
		}
		
		.btn-ghost:hover{
			text-decoration: none;
			background-color: #66a3ff;
			border: 2px solid white;
			
		}
		
		
	</style>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4  col-md-offset-4 main">
				<div>
					<div class="h1"><h1>Semaforo Admin</h1></div>
					<button type="button" class="btn btn-primary btn-block btn-ghost" id="btnA">Calle A</button>
					<button type="button" class="btn btn-primary btn-block btn-ghost" id="btnB">Calle B</button>
					<a href="timeChange.php" type="button" class="btn btn-primary btn-block btn-ghost" id="btnAdm">Admin</a>
				</div>
			</div>
		</div>
	</div>
	
	<script>
		$(document).ready(function(){
			$('#btnA').click(function(){
				var callea = window.open('callea.php',"Calle A","width=500px,height=500px");
			});
			
			$('#btnB').click(function(){
				var calleb = window.open('calleb.php',"Calle B","width=500px,height=500px, left=500px");
			});

			
		});
	</script>
	
</body>
</html>