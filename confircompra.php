<?php 
	session_start();
?>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="Imagens/umbrella.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.row {
			background-color: rgba(87,149,178,0.4);
			background-size: cover;
			padding-bottom: 6%;
			border-radius: 20px;
			margin-right: auto;
			margin-left: auto;
			width: 79%;
		}
		.numf {
			margin-top: 30%;
		}
		.btf input {
		text-decoration: none;
		background-color: #383838;
		color: #6d6d6d;
		}
		.btf input:hover {
			border-color: red;
			color: #fff;
			background-color: #191919;
		}
	</style>
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
				</div>
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="jumbotron">
			<img src="Imagens/MedJumbo.png" style="width: 50%;">
		</div>
		<hr>
	</div>
	
	<div id="rodape" style="position: fixed;">
		<div class="container">	
			&copy; Copyright - Todos os direitos reservados.
		</div>
	</div>
<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "umbrella_pharma";

		//Criar minha conexão
		$conn = new mysqli($servername, $username, $password,$db);
		mysqli_set_charset($conn, 'utf8');

		//Verificar a conexão
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM medicamentos";
		$result = $conn->query($sql);

		echo "<div class='row'>";
		echo "<form action='dados.php' method='POST'>";

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {					
					if (isset($_POST["$row[Codigo]"])) {
						echo "<div class='med'><img src='Imagens/$row[imagem]' width='300'><br>" . "<h4>$row[nome]</h4>" . "<br><br><div class='desc'> $row[descricao]</div>" . "<br><h3><b>Preço: </b>R$:$row[preco]<h3></div><br>";
						echo "<form action='compra.php' method='POST'>
								<input type='number' name='qtde' maxlength='number' value='1' min='1' max='$row[quantidade]'>&nbsp;&nbsp;&nbsp;
								<span class='btf'><input class='btn btn-lg' type='submit' name='compra' value='Comprar'>
								</span>
							</form>";
						$_SESSION["cod"] = "$row[Codigo]";
						$_SESSION["qtdb"] = "$row[quantidade]";
					}
				}
			}
			else {echo "ERR#*%R";}

		echo "</div></div>";
?>	