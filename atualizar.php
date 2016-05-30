<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Controle SEFAC</title>
		<link rel="shortcut icon" href="favicon.ico" >
	</head>
	 
	<body>
	<?php 	 
		$propriedade = $_POST['propriedade'];
		$municipio = $_POST['municipio'];
		$uf = $_POST['uf'];
		$proprietario = $_POST['proprietario'];
		$matricula = $_POST['matricula'];
		$comarca = $_POST['comarca'];
		$bloco	= $_POST['bloco'];
		$codincra = $_POST['codincra'];
		$cartorio = $_POST['cartorio'];	
		$cpf = $_POST ['cpf'];
		$remaneestimado = $_POST ['remaneestimado'];
		$remanelevantado = $_POST ['remanelevantado'];
		$remanediferenca = $remaneestimado - $remanelevantado;
		$appestimado = $_POST ['appestimado'];
		$applevantado = $_POST ['applevantado'];
		$appdiferenca = $appestimado - $applevantado;
		$areaalagada = $_POST ['areaalagada'];
		$totalmentealagada = $_POST ['totalmentealagada'];
		$perimetroesti = $_POST ['perimetroesti'];
		$perimetrolevantado = $_POST ['perimetrolevantado'];
		$perimetrodif = $perimetroesti - $perimetrolevantado;
		$alsafi = $_POST['alsafi'];
		$datacert = $_POST['datacert'];
		$obsc = $_POST['obsc'];
		$dataenvio=$_POST['dataenvio'];
		$dataini=$_POST['dlevante'];
		$datarecebimento=$_POST['datarecebimento'];
		$obsl=$_POST['obsl'];
		$datagp=$_POST['datagp'];
		$datacmgp=$_POST['datacmgp'];
		$datafgp=$_POST['datafgp'];
		$obsp=$_POST['obsp'];
		$dataods=$_POST['dataods'];
		$datafods=$_POST['datafods'];
		$obsods=$_POST['obsods'];
		$localizacao=$_POST['localizacao'];
		
		
		
		
		include'conexao.php';
		$qry = "UPDATE propriedades SET proprietario = '$proprietario' , municipio = '$municipio', matricula = '$matricula', comarca = '$comarca', bloco = '$bloco', codincra='$codincra', uf='$uf', remaneestimado='$remaneestimado', remanelevantado='$remanelevantado', remanelevantado='$remanelevantado', remanediferenca='$remanediferenca', appestimado='$appestimado', applevantado='$applevantado', appdiferenca='$appdiferenca', areaalagada='$areaalagada', totalmentealagada='$totalmentealagada', perimetroesti='$perimetroesti', perimetrolevantado = '$perimetrolevantado', perimetrodif='$perimetrodif', localizacao='$localizacao' WHERE propriedade='$propriedade';";
		$qry1 = "UPDATE certificacao SET alsafi = '$alsafi', data='$datacert', obs='$obsc' WHERE propriedade='$propriedade';";
		$qry2 = "UPDATE levantamento SET dataenvio = '$dataenvio', datalevantamento = '$dataini' , datarecebimento='$datarecebimento', obs='$obsl' WHERE propriedade='$propriedade';";
		$qry3 = "UPDATE planta SET 	datainicial='$datagp', dataconfirm='$datacmgp', datafinal='$datafgp', obs='$obsp' WHERE propriedade='$propriedade';";
		$qry4 = "UPDATE ods SET datainicial='$dataods', datafinal='$datafods', obs='$obsods' WHERE propriedade='$propriedade';";
		
		mysqli_query($con,$qry);
		mysqli_query($con,$qry1);
		mysqli_query($con,$qry2);
		mysqli_query($con,$qry3);
		mysqli_query($con,$qry4);
		
		echo"<script>
			alert('Propriedade Atualizada');
			window.location = 'buscar.php';
			</script>";
		?> 
	
	</body>
</html>
