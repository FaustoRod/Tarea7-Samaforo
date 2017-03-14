<?php
session_start();
?>
<html>
	<head>
		<title>Calle A</title>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	</head>

	<body>
		<style>
			.bombillo {
      			height: 150px;
      			width: 150px;
      			background-color: green;
      			border-radius: 50%;
      			margin: 25px auto;
			}
		</style>
		
		<div class="bombillo">
		</div>
		
		<script>
     
  		$(document).ready(function(){
  			fnSemaforo();
  		});
  		var estado = 'verde';
		var animation;
		function fnSemaforo(){
    

    		clearInterval(animation);
  			var bombilla = $(".bombillo");
			var inAction = 0;
    	if(estado === 'verde' && inAction===0){
      bombilla.css("background-color","yellow");
      estado = 'amarillo';
      inAction=1;
    }
    if(estado === 'amarillo' && inAction===0){
      bombilla.css("background-color","red");
      estado = 'rojo';
      inAction=1;
    }
    if(estado === 'rojo' && inAction===0){
      bombilla.css("background-color","green");
      estado = 'verde';
      inAction=1;
    }

    	animation = window.setInterval("fnSemaforo()", <?php echo $_SESSION['tiempo'] * 1000;?>);
	}
		</script>
		
	</body>
</html>