<html>
	<head>
	
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<title>Controle SEFAC</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" >
	
	</head>
	<body>
		<div class= "body1">
			<div class = "consolecad">
				<div class = "formcad">
					<form action="cadastrando.php" method="post" >
							<fieldset>
							<legend>CADASTRO</legend>
							<BR>
							Propriedade:&nbsp;<input type="text" name="propriedade" id="propriedade" maxlength="20" style='text-transform:uppercase'>&nbsp;&nbsp;UF:
							<select name="uf" id="uf"><option value="GO">GO</option></select>
							&nbsp;&nbsp;Municipio:&nbsp;<select name="municipio">
							<option value="Catalao">Catalão</option>
							<option value="Campo Alegre de Goiás">Campo Alegre de Goiás</option>
							<option value="Cristalina">Cristalina</option>									
							<option value="Davinopólis">Davinopólis</option>
							<option value="Palmeiras de Goiás">Palmeiras de Goiás</option>
							</select>&nbsp;&nbsp;
							Bloco:&nbsp;<input type="text" name="bloco" id="bloco" size="1" maxlength="2">
							<p>Proprietário:&nbsp;<input type="text" name="proprietario" id="proprietario" size="40px" maxlength="25">&nbsp;&nbsp;Totalmente Alagada:&nbsp;<input type="radio" name="totalmentealagada" id="Sim" <?php if (isset($totalmentealagada) && $totalmentealagada=="Sim");?> value="Sim">Sim&nbsp;&nbsp;<input type="radio" name="totalmentealagada" <?php if (isset($totalmentealagada) && $totalmentealagada=="Nao");?> value="Nao" id="N" checked>Não
							<br><br>Matricula:&nbsp;<input type="text" name="matricula" id="matricula" size="30px" maxlength="30">&nbsp;&nbsp;CPF/CNPJ:<input type="text" name="cpf" id="cpf" size="15" maxlength="11">
							&nbsp;Comarca:&nbsp;<input type="text" name="comarca" id="comarca" size="7" maxlength="10">
						  <br><br>
						  COD INCRA:&nbsp;<input type="text" name="codincra" id="codincra" size="17" maxlength="20">
						  &nbsp;&nbsp;Cartorio:&nbsp;<input type="text" name="cartorio" id="cartorio" size="7" maxlength="10">&nbsp;&nbsp;Localização:&nbsp;<input type="text" name="localizacao" size="25" maxlength="50"><br><br>
						
						</fieldset>
					
				</div>
				<div class="cadarea">
							<fieldset>
							<legend>ÁREA DA PROPRIEDADE EM HECTARES (HA)</legend>
								<fieldset>
								<legend>Remanescente</legend>	
									Estimado:&nbsp;&nbsp;&nbsp;<input type="text" name="remaneestimado" id="remaneestimado" size="10px" maxlength="25">
									Levantado:&nbsp;<input type="text" name="remanelevantado" id="remanelevantado" size="10px" maxlength="25">
									Diferença:&nbsp;&nbsp;&nbsp;<input type="text" size="10px" maxlength="25">
								</fieldset>
								<br>
								<fieldset>
								<legend>Área de Preservação Permanente</legend>	
									Estimado:&nbsp;&nbsp;&nbsp;<input type="text" name="appestimado" id="appestimado" size="10px" maxlength="25"><br>
									Levantado:&nbsp;<input type="text" name="applevantado" id="applevantado" size="10px" maxlength="25">
									Diferença:&nbsp;&nbsp;&nbsp;<input type="text" size="10px" maxlength="25">									
								</fieldset>
								<br>
								<fieldset>
								<legend>Perímetro da Matrícula</legend>	
									Estimado:&nbsp;&nbsp;&nbsp;<input type="text" name="perimetroesti" id="perimetroesti" size="10px" maxlength="25">
									<br>Levantado:&nbsp;<input type="text" name="perimetrolevantado" id="perimetrolevantado" size="10px" maxlength="25">
									Diferença:&nbsp;&nbsp;&nbsp;<input type="text" size="10px" maxlength="25">									
								</fieldset>
								<br>
								Área Alagada:&nbsp;<input type="text" name="areaalagada" id="areaalagada" size="10px" maxlength="25">	
							</fieldset>
				</div>
				<div class = "certificacao">
					<fieldset>
					<legend>CERTIFICAÇÃO</legend>	
						Alsafi:&nbsp;&nbsp;<input type="radio" name="alsafi" id="S" <?php if (isset($alsafi) && $alsafi=="Sim");?> value="Sim">Sim&nbsp;&nbsp;<input type="radio" name="alsafi" <?php if (isset($alsafi) && $alsafi=="Não");?> value="Nao" id="N" checked>Não
						<br>Data:&nbsp;<input type="date" name="datacert" id="datacert" size="10px" maxlength="25"><br>
						Observação:&nbsp;&nbsp;<textarea rows="5" cols="35" name="obsc"></textarea><p>									
					</fieldset>
				
				</div>
				<div class = "levantamentocamp">
					<fieldset>
					<legend>Levantamento de campo</legend>	
						Enviado p/ levantamento:&nbsp;&nbsp;<input type="date" name="dataenvio" id="dataenvio" value="t"><br>
						Data Levantamento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="datalevantamento" id="datalevantamento" size="10px" maxlength="25"><br>
						Data Recebimento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="datarecebimento" id="datarecebimento" size="10px" maxlength="25"> 
						Observação:<br><textarea rows="4" cols="35" name="obslev"></textarea>									
					</fieldset>				
				</div>
				<div class = "gerplanta">
					<fieldset>
					<legend>Geração de Planta</legend>	
						Data Inicial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="datagp" >&nbsp;&nbsp;&nbsp;Data Confirmação Planta:&nbsp;<input type="date" name="datacmgp"><br>
						Data Final (Envio):&nbsp;<input type="date" name="datafgp"  size="10px" maxlength="25"><br>
						Observação:<BR><textarea rows="4" cols="50" name="obsgp"></textarea>									
					</fieldset>	
				</div>
				<div class = "gerods">
					<fieldset>
					<legend>Geração Planilha ODS</legend>	
						Data Inicial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="datainicialods" id="datainicialods"><br>
						Data Final (Envio):&nbsp;<input type="date" name="datafinalods" id="datafinalods"><br>
						Observação:<BR><textarea rows="4" cols="35" name="obsods"></textarea>									
					</fieldset>	
				</div>
				<div class="botoes">
				 <input type="submit" value="CADASTRAR">&nbsp;&nbsp;<input type="reset" value="LIMPAR">
				</form>
				</div>
			<div class = "menu1">
			<a href="cadastrar.php"><b>CADASTRAR PROPRIEDADE</b></a>
			<a href="deletar.php"><b>DELETAR PROPRIEDADE</b></a>
			<a href="buscar.php"><b>BUSCAR</b></a>
		</div>
			</div>
		</div>
		<?php include'rodape.php';?>
	</body>
</html>
