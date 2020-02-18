<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Umbrella Pharma - Comprar</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="Imagens/umbrella.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">	
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
			    	<img src="Imagens/iconav.png">&nbsp;&nbsp;
			      <button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			    </div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Páginal Inicial</a></li>
						<li><a href="meds.php">Medicamentos</a></li>
						<li><a href="Contato.php">Contato</a></li>
					</ul>
					<div class="container">
						<button class="btn btn-default btn-lg" style="float: right;">Cart 
						<span class="glyphicon glyphicon-shopping-cart"></span>
						<span class="badge"><?php
								$qtde = $_POST["qtde"];
								if ($qtde > 0) {
									echo "$qtde";
								}else {echo "0";} 
								$_SESSION["qtde"] = $_POST["qtde"]; ?></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="jumbotron">
			<img src="Imagens/MedJumbo.png" style="width: 50%;">
		</div>
		<hr style="margin-top: 3%; margin-bottom: 3%;">
	</div>
	<div class="container">
	<div class="colorbuy">
		<form action="endCompra.php" method="POST">
			<fieldset>
				<legend>Dados de Entrega</legend>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Remetente: </label>
							<input type="text" name="remenome" class="form-control" placeholder="Digite seu nome" maxlength="50">
						</div>
						<div class="form-group col-md-6">
							<label>CPF: </label>
							<input type="text" name="CPF" class="form-control" placeholder="Seu CPF" maxlength="14">
						</div>
					</div>
					<div class="form-group col-md-12">
						<label for="inputAddress2">Endereço</label>
						<input type="text" name="end" class="form-control" maxlength="100">
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label>Número: </label>
							<input type="text" name="endnum" class="form-control" maxlength="6">
						</div>
						<div class="form-group col-md-4">
							<label>Compl.: </label>
							<input type="text" name="edcompl" class="form-control" placeholder="Apto, casa, ponto de referencia...">
						</div>
						<div class="form-group col-md-4">
							<label for="inputCEP">CEP</label>
							<input type="text" name="CEP" class="form-control" maxlength="9">
						</div>
						<div class="form-group col-md-4">
							<label>Cidade: </label>
							<input type="text" name="cid" class="form-control" maxlength="60">
						</div>
						<div class="form-group col-md-1">
							<label>Estado: </label>
							<input type="text" name="est" class="form-control" maxlength="2">
						</div>
					</div>
			</fieldset>
			<input class="b btn btn-sm" type="submit" name="fimc" value="Finalizar compra" id="btnEnviar">
		</form>
		
	</div>
	<hr style="margin-top: 3%;">
	</div>
	<div id="rodape" style="position: fixed;">
		<div class="container">			
			&copy; Copyright - Todos os direitos reservados.
		</div>
	</div>
</body>
</html>