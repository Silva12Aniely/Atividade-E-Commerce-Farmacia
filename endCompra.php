<?php 
	session_start();
?>
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
	<div class="container">
		<div class="jumbotron"><img src="Imagens/MedJumbo.png" width="45%" id="jumbo"></div>
	</div>
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
	?>
	<div class="container"><br>
		<hr style="margin-top: 0;">
		<label>Dados do Produto:</label>
		<table class="table table-bordered">
			<tr>
				<th>Produto</th>
				<th>Quantidade</th>
				<th>Preço</th>
				<th>Total</th>
			</tr>
			<tr>
				<?php
					$cod = $_SESSION["cod"];					

					$sql = "SELECT * FROM medicamentos where Codigo = $cod";
					$result = $conn->query($sql);
					$qtde = $_SESSION["qtes"];

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_row()) {							
								echo "<td align='center' valign='middle'>" . $row[1] . "<br>" . "<img src='Imagens/$row[4]' width='100'>" . "</td>";
								echo "<td align='center' valign='middle'>" . $qtde . "</td>";
								echo "<td align='center' valign='middle'>" . $row[3] . "</td>";
								echo "<td align='center' valign='middle'>" . $qtde * $row[3] . "</td>";							
						}
					}
					else {echo "ERR#*%R";}				
				?>
			</tr>
		</table>
		<br>
		<table class="table table-bordered">
			<label>Dados do Cliente: </label><br>
			<tr><td colspan="3"><b>Nome:</b> <?php $nome = $_POST["remenome"]; echo "$nome"; ?> </td></tr>
			<tr><td colspan="3"><b>Endereço:</b> <?php $end = $_POST["end"]; $num = $_POST["endnum"]; echo $end.", ".$num; ?></td></tr>
			<tr>
				<td><b>CEP:</b> <?php $cep = $_POST["CEP"]; echo $cep; ?></td>
				<td><b>Cidade:</b> <?php $cid = $_POST["cid"]; echo $cid; ?> </td>
				<td><b>Estado:</b> <?php $est = $_POST["est"]; echo $est; ?> </td>
			</tr>
		</table>
		<form action="thx.php" method="POST">
			<input type="submit" class="b btn btn-md" name="Finalizar" value="Finalizar compra">
		</form>
		<hr>
	</div>
	<div id="rodape" style="margin-top: 5px;">
		<div class="container">			
			<!-- <span>Umbrella <b style="color: red;">Pharma</b> &reg;</span><br> -->
			&copy; Copyright - Todos os direitos reservados.
		</div>
	</div>
</body>
</html>