<?php
include 'conexao.php';
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Controle SEFAC</title>
		<link rel="shortcut icon" href="favicon.ico" >
	</head>
	 
	<body>
	<?php
	$buscar=$_POST['buscar'];
	$query1 = "SELECT * FROM propriedades WHERE propriedade LIKE '$buscar' ";
	$sql1 = mysqli_query($con, $query1);
	$row1 = mysqli_num_rows($sql1);
	if ($row1 > 0){
		while ($linha1 = mysqli_fetch_array($sql1)){
			$propriedade = $linha1[ 'propriedade' ];
			$propriedade = strtoupper($propriedade);
			$proprietario = $linha1[ 'proprietario' ];
			$uf = $linha1[ 'uf' ];
			$municipio = $linha1['municipio'];
			$totalmentealagada = $linha1[ 'totalmentealagada' ];
			$matricula = $linha1[ 'matricula' ];
			$cpf = $linha1[ 'cpf' ];
			$bloco = $linha1['bloco'];
			$comarca = $linha1['comarca'];
			$codincra = $linha1['codincra'];
			$cartorio = $linha1['cartorio'];
			$remaneestimado = $linha1['remaneestimado'];
			$remanelevantado = $linha1['remanelevantado'];
			$remanediferenca = $linha1['remanediferenca'];
			$appestimado = $linha1['appestimado'];
			$applevantado = $linha1['applevantado'];
			$appdiferenca = $linha1['appdiferenca'];
			$perimetroesti = $linha1['perimetroesti'];
			$perimetrolevantado = $linha1['perimetrolevantado'];
			$perimetrodif = $linha1['perimetrodif'];
			$areaalagada = $linha1['areaalagada'];
			$localizacao = $linha1['localizacao'];
	}}
	else {
		echo "<script>
			alert('Propriedade não encontrada.');
			window.location = 'buscar.php';
			</script>";}

/* PARA A TABELA CERTIFICAÇÃO */

	$query2 = "SELECT * FROM certificacao WHERE propriedade LIKE '$buscar' ";
	$sql2 = mysqli_query($con, $query2);
	$row2 = mysqli_num_rows($sql2);
	if ($row2 > 0){
		while ($linha2 = mysqli_fetch_array($sql2)){
			$datacertm = $linha2[ 'data' ];
			$alsafi = $linha2['alsafi'];
			$obsc = $linha2['obs'];
	}}
/* PARA A TABELA LEVANTAMENTO */

	$query3 = "SELECT * FROM levantamento WHERE propriedade LIKE '$buscar' ";
	$sql3 = mysqli_query($con, $query3);
	$row3 = mysqli_num_rows($sql3);
	if ($row3 > 0){
		while ($linha3 = mysqli_fetch_array($sql3)){
			$dataenvio = $linha3[ 'dataenvio' ];
			$dlevante= $linha3[ 'datalevantamento'];
			$datarecebimento = $linha3[ 'datarecebimento' ];
			$obsl = $linha3[ 'obs' ];
	}}	

		
/* PARA A TABELA PLANTA */

	$query4 = "SELECT * FROM planta WHERE propriedade LIKE '$buscar' ";
	$sql4 = mysqli_query($con, $query4);
	$row4 = mysqli_num_rows($sql4);
	if ($row4 > 0){
		while ($linha4 = mysqli_fetch_array($sql4)){
			$datagp = $linha4[ 'datainicial' ];
			$datacmgp = $linha4[ 'dataconfirm' ];
			$datafgp = $linha4[ 'datafinal' ];
			$obsp = $linha4[ 'obs' ];
	}}		

/* PARA A TABELA ODS */

	$query5 = "SELECT * FROM ods WHERE propriedade LIKE '$buscar' ";
	$sql5 = mysqli_query($con, $query5);
	$row5 = mysqli_num_rows($sql5);
	if ($row5 > 0){
		while ($linha5 = mysqli_fetch_array($sql5)){
			$dataods = $linha5[ 'datainicial' ];
			$datafods = $linha5[ 'datafinal' ];
			$obsods = $linha5[ 'obs' ];
	}}
	
	error_reporting(0);
/*------------------------------------------------------------------------*/
	echo "<div class= 'body1'>
			<div class = 'consolecad'>
				<div class = 'formcad'>
					<form action='atualizar.php' method='post' >
							<fieldset>
							<legend>CADASTRO</legend>
							<BR>
							Propriedade:&nbsp;<input type='text' value='$propriedade' name='propriedade'>&nbsp;&nbsp; UF: <input type='text' value='$uf' name='uf' size='2'>&nbsp;&nbsp;Municipio:&nbsp;<input type='text' value='$municipio' name='municipio'>
							<p>Proprietário:&nbsp;<input type='text' value='$proprietario' name='proprietario' size='50px'>&nbsp;&nbsp;Totalmente Alagada:&nbsp;<input type='text' value='$totalmentealagada' name='totalmentealagada' size='1'> 
							<br><br>Matricula:&nbsp;<input type='text' name='matricula' size='15px' value='$matricula'>&nbsp;&nbsp;CPF/CNPJ:<input type='text' name='cpf' value='$cpf' size='15px'>
							&nbsp;&nbsp;Comarca:&nbsp;<input type='text' name='comarca' size='7' value='$comarca'>
							Bloco:&nbsp;<input type='text' name='bloco' id='bloco' size='1' value='$bloco'><br><br>
						  COD INCRA:&nbsp;<input type='text' name='codincra' size='17' value='$codincra'>
						  &nbsp;&nbsp;Cartorio:&nbsp;<input type='text' name='cartorio' value='$cartorio' size='7'>&nbsp;&nbsp;Localização:&nbsp;<input type='text' name='localizacao' size='25px' value='$localizacao' maxlength='50'><br><br>
						
						</fieldset>
					
				</div>
				<div class='cadarea'>
							<fieldset>
							<legend>ÁREA DA PROPRIEDADE EM HECTARES (HA)</legend>
								<fieldset>
								<legend>Remanescente</legend>	
									Estimado:&nbsp;&nbsp;&nbsp;<input type='text' name='remaneestimado' size='10px' value='$remaneestimado'>
									Levantado:&nbsp;&nbsp;<input type='text' name='remanelevantado' value='$remanelevantado' size='10px'>
									Diferença:&nbsp;&nbsp;&nbsp;<input type='text' value='$remanediferenca' size='10px' maxlength='25'>
								</fieldset>
								<br>
								<fieldset>
								<legend>Área de Preservação Permanente</legend>	
									Estimado:&nbsp;&nbsp;&nbsp;<input type='text' name='appestimado' value='$appestimado' size='10px'><br>
									Levantado:&nbsp;&nbsp;<input type='text' name='applevantado' size='10px' value='$applevantado'>
									Diferença:&nbsp;&nbsp;&nbsp;<input type='text' value='$appdiferenca' size='10px'>									
								</fieldset>
								<br>
								<fieldset>
								<legend>Perímetro da Matrícula</legend>	
									Estimado:&nbsp;&nbsp;&nbsp;<input type='text' name='perimetroesti' value='$perimetroesti' size='10px'>
									<br>Levantado:&nbsp;&nbsp;<input type='text' name='perimetrolevantado' value='$perimetrolevantado' size='10px'>
									Diferença:&nbsp;&nbsp;&nbsp;<input type='text'  value='$perimetrodif' size='10px'>									
								</fieldset>
								<br>
								Área Alagada:&nbsp;<input type='text' name='areaalagada' value='$areaalagada' size='10px'>	
							</fieldset>
				</div>
				<div class = 'certificacao'>
					<fieldset>
					<legend>CERTIFICAÇÃO</legend>	
						Alsafi:&nbsp;<input type='text' value='$alsafi' name='alsafi' size='1px'>
						<br>Data:&nbsp;<input type='date' name='datacert' value='$datacertm' size='10px'><br>
						Observação:&nbsp;&nbsp;<textarea rows='5' cols='35' name='obsc'>$obsc</textarea><p>									
					</fieldset>
				
				</div>
				<div class = 'levantamentocamp'>
					<fieldset>
					<legend>Levantamento de campo</legend>	
						Enviado p/ levantamento:&nbsp;&nbsp;<input type='date' name='dataenvio' value='$dataenvio'><br>
						Data Levantamento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='date' name='dlevante' value='$dlevante'><br>
						Data Recebimento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='date' name='datarecebimento' value='$datarecebimento'><br>
						Observação:<BR><textarea rows='4' cols='38' name='obsl'>$obsl</textarea>
					</fieldset>				
				</div>
				<div class = 'gerplanta'>
					<fieldset>
					<legend>Geração de Planta</legend>	
						Data Inicial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='date' name='datagp' value='$datagp' >&nbsp;&nbsp;&nbsp;Data Confirmação Planta:&nbsp;<input type='date' name='datacmgp' value='$datacmgp'><br>
						Data Final (Envio):&nbsp;<input type='date' value='$datafgp' name='datafgp'><br>
						Observação:<BR><textarea rows='4' cols='50' name='obsp'>$obsp</textarea>
					</fieldset>	
				</div>
				<div class = 'gerods'>
					<fieldset>
					<legend>Geração Planilha ODS</legend>	
						Data Inicial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='date' value='$dataods' name='dataods'><br>
						Data Final (Envio):&nbsp;<input type='date' value='$datafods' name='datafods'><br>
						Observação:<textarea rows='4' cols='35' name='obsods'>$obsods</textarea> 
					</fieldset>	
				</div>
				<div class='botoes'>
				 <input type='submit' value='ATUALIZAR'>&nbsp;&nbsp;<input type='reset' value='DESFAZER'>
				</form>
				</div>
			<div class = 'menu4'>
			<a href='cadastrar.php'><b>CADASTRAR PROPRIEDADE</b></a>
			<a href='deletar.php'><b>DELETAR PROPRIEDADE</b></a>
			</div>
			<div class = 'busca'>
			<form action='resultado.php' method='post'> 
			<b>BUSCAR&nbsp;:&nbsp;</b><input type='text' name='buscar'><input type='submit' value='Buscar'>
					</div>
				</div>
			</div>
		</div>";
	
	?>
	<?php include'rodape.php';?>
	</body>
</html>
