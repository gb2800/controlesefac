<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<title>Controle SEFAC</title>
	<style>table, th, td {border: 1px solid;}</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" >
	</head>
	<body>
		<div class= "body">
			<div class = "consoleindex">
				<div class="bmenu">
					<form name="deletar" method="POST" action="delete.php">
					<b>DELETAR PROPRIEDADE:&nbsp;</b><input type="text" name="propriedade">	
					<input type="submit" value="DELETAR"/>

					</form > 
				</div>	
				<div class ="buscam">
					<a href="cadastrar.php"><b>CADASTRAR PROPRIEDADE</b></a>
					<a href="buscar.php"><b>BUSCAR PROPRIEDADE</b></a>
				</div>
			</div>
		</div>

		<?php include'rodape.php';?>

	</body>
</html>

