<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Umbrella Pharma - Finalizar Compra</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="Imagens/umbrella.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- Barra de navegação -->
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
	        <li><a href="index.php">Página Inicial</a></li>	 
	        <li><a href="meds.php">Medicamentos</a></li>
	        <li><a href="contato.php">Contato</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- jumbotron -->
	<div class="container" style="margin-top: 5%;">
		<div class="jumbotron" style="padding-top: 0;"><img src="Imagens/MedJumbo.png" width="45%" id="jumbo"></div>
	</div>
	<div class="container" style="text-align: center;"><br>
		<div class="well well-lg alert-success"><h1>Obrigado por comprar na Umbrella Pharma</h1></div>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "umbrella_pharma";

			//Criar minha conexão
			$conn = new mysqli($servername, $username, $password,$db);

			//Verificar a conexão
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$cod = $_SESSION["cod"];
			$qtde = $_SESSION["qtes"];
			$qtdb = $_SESSION["qtdb"];
			$qtf = $qtdb - $qtde;

			$sql = "UPDATE medicamentos SET quantidade='$qtf' WHERE Codigo=$cod";

			$sql = "INSERT INTO vendas (Codigo) VALUES ($cod)";
			if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
			}
			$in = "select * from vendas where codVendas = (SELECT MAX(codVendas) FROM vendas)";
			$result = $conn->query($in);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_row()) {
					echo "<h3 class='well well-sm'>Número do Pedido - " . $row[0] . "<br>";
					echo "Data da compra - " . $row[1] . "</h3>";
				}
			}
			else {
				echo "Empty set";
			}
			$conn->close();

			// $sql = "INSERT INTO vendas (codVendas, dcompra,codigo) VALUES (NULL,NULL,'$cod')";
		?>
		<br>
		<h2><u>Volte Sempre!</u></h2>
	</div>
	<div id="rodape" style="position: fixed;">
		<div class="container">			
			<!-- <span>Umbrella <b style="color: red;">Pharma</b> &reg;</span><br> -->
			&copy; Copyright - Todos os direitos reservados.
		</div>
	</div>
</body>
</html>