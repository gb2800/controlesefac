<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<title>Controle SEFAC</title>
	<link rel="shortcut icon" href="favicon.ico" >
	</head>
	<body>
	<?php	include("conexao.php");

		$idescolhido = $_POST['propriedade'];
		
		$query1 = "DELETE FROM propriedades WHERE propriedade ='$idescolhido';";
		$query2 = "DELETE FROM certificacao WHERE propriedade ='$idescolhido';";
		$query3 = "DELETE FROM levantamento WHERE propriedade ='$idescolhido';";
		$query4 = "DELETE FROM ods WHERE propriedade ='$idescolhido';";
		$query5 = "DELETE FROM planta WHERE propriedade ='$idescolhido';";
		
		

		mysqli_query ($con,$query1);
		mysqli_query ($con,$query2);
		mysqli_query ($con,$query3);
		mysqli_query ($con,$query4);
		mysqli_query ($con,$query5);
		
		echo"<script>
		alert('Propriedade Deletada');
		window.location = 'buscar.php';
		</script>";
		?>

		
	</body>
</html>
