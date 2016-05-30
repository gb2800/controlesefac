<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Controle SEFAC</title>
		<link rel="shortcut icon" href="favicon.ico" >
	</head>
	 
	<body>
	<?php 	 
		$propriedade = $_POST['propriedade'];
		$propriedade = strtoupper($propriedade);
		$uf	= $_POST['uf'];
		$municipio = $_POST['municipio'];
		$proprietario = $_POST['proprietario'];
		$matricula = $_POST['matricula'];
		$comarca = $_POST['comarca'];
		$bloco	= $_POST['bloco'];
		$codincra = $_POST['codincra'];
		$cartorio = $_POST['cartorio'];	
		$cpf = $_POST ['cpf'];
		$remaneestimado = $_POST ['remaneestimado'];
		$remanelevantado = $_POST ['remanelevantado'];
		$remanediferenca = $remaneestimado-$remanelevantado;
		$appestimado = $_POST ['appestimado'];
		$applevantado = $_POST ['applevantado'];
		$appdiferenca = $appestimado-$applevantado;
		$areaalagada = $_POST ['areaalagada'];
		$totalmentealagada = $_POST ['totalmentealagada'];
		$perimetroesti = $_POST ['perimetroesti'];
		$perimetrolevantado = $_POST ['perimetrolevantado'];
		$perimetrodif = $perimetroesti-$perimetrolevantado;
		$localizacao = $_POST ['localizacao'];
		
		$datacert = $_POST ['datacert'];
		$obsc = $_POST ['obsc'];
		$alsafi = $_POST['alsafi'];
		$datacertm = implode("-", array_reverse( explode("/",$datacert)));
		
		
		$dataenvio = $_POST['dataenvio'];
		$dataenvioc = implode("-", array_reverse( explode("/",$dataenvio)));
		
		$datalevantamento = $_POST['datalevantamento'];
		$datalevantamentoc = implode("-", array_reverse( explode("/",$datalevantamento)));
		
		$datarecebimento = $_POST['datarecebimento'];
		$datarecebimentoc = implode("-", array_reverse( explode("/",$datarecebimento)));
		
		$obslev = $_POST ['obslev'];
		
		$datainicialods = $_POST ['datainicialods'];
		$datainicialodsc = implode("-", array_reverse( explode("/",$datainicialods)));
		$datafinalods = $_POST ['datafinalods'];
		$datafinalodsc = implode("-", array_reverse( explode("/",$datafinalods)));
		$obsods = $_POST ['obsods'];
		
		$datagp = $_POST['datagp'];
		$datagpc = implode("-", array_reverse( explode("/",$datagp)));
		$datafgp = $_POST ['datafgp'];
		$datafgpc = implode("-", array_reverse( explode("/",$datafgp)));
		$datacmgp = $_POST ['datacmgp'];
		$datacmgpc = implode("-", array_reverse( explode("/",$datacmgp)));
		$obsgp = $_POST ['obsgp'];
		
		if(empty($_POST['propriedade']))
			{
			echo "<script>
			alert('Preencha a Propriedade');
			history.go(-1);
			</script>";
			exit;
			}
			
		 if(empty($_POST['proprietario']))
			{
			echo "<script>
			alert('Preencha o nome do Proprietário');
			history.go(-1);
			</script>";
			exit;
			}
			

		$query1 = "INSERT INTO `propriedades` ( `propriedade` , `uf` , `municipio` , `proprietario` , `matricula` , `cpf` , `comarca` , `bloco` , `codincra` , `cartorio`, `remaneestimado`, `remanelevantado`, `remanediferenca`, `appestimado`, `applevantado`, `appdiferenca`, `areaalagada`, `totalmentealagada`, `perimetroesti`, `perimetrolevantado`, `perimetrodif`, `localizacao`) 
		VALUES ('$propriedade', '$uf', '$municipio', '$proprietario', '$matricula', '$cpf', '$comarca', '$bloco', '$codincra', '$cartorio', '$remaneestimado', '$remanelevantado', '$remanediferenca', '$appestimado', '$applevantado', '$appdiferenca', '$areaalagada', '$totalmentealagada', '$perimetroesti', '$perimetrolevantado', '$perimetrodif', '$localizacao')";		
		$query2 = "INSERT INTO `certificacao` ( `propriedade` , `alsafi`, `data`, `obs`) 
		VALUES ('$propriedade', '$alsafi', '$datacertm', '$obsc')";
		$query3 = "INSERT INTO `levantamento` ( `propriedade` , `dataenvio`, `datalevantamento`, `datarecebimento`, `obs`) 
		VALUES ('$propriedade', '$dataenvioc', '$datalevantamentoc', '$datarecebimentoc', '$obslev')";
		$query4 = "INSERT INTO `ods` ( `propriedade` , `datainicial`, `datafinal`, `obs`) 
		VALUES ('$propriedade', '$datainicialodsc', '$datafinalodsc', '$obsods')";
		$query5 = "INSERT INTO `planta` ( `propriedade` , `datainicial`, `datafinal`, `dataconfirm`, `obs`) 
		VALUES ('$propriedade', '$datagpc', '$datafgpc', '$datacmgpc', '$obsgp')";
		
		
		$conexao = mysqli_connect("localhost", "root", "1234", "sefac");
		if (!$conexao)
			die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error());
		
		$qry = mysqli_query($conexao, "SELECT * FROM propriedades WHERE propriedade = '$propriedade'");
		$verifica = mysqli_num_rows($qry);


		if($verifica > 0){echo"<script>
				alert('Propriedade já existe');
				window.location = 'cadastrar.php';				
				</script>";;
		}
		
		else{	
			mysqli_query($conexao, $query1);
			mysqli_query($conexao, $query2);
			mysqli_query($conexao, $query3);
			mysqli_query($conexao, $query4);
			mysqli_query($conexao, $query5);
					
			echo"<script>
				alert('Propriedade Cadastrada');
				window.location = 'cadastrar.php';				
				</script>";
		}

		?> 

	</body>
</html>
