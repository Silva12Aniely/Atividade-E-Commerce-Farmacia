<!DOCTYPE html>
<html>
<head>
	<title>Umbrella Pharma - Medicamentos</title>
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
	      <form class="navbar-form navbar-right" action="#.php">
		      <div class="input-group">
		        <input type="text" class="form-control" placeholder="Pesquisar" name="Pesquisar">
		        <div class="input-group-btn">
		          <button class="btn btn-danger" type="submit">
		            <i class="glyphicon glyphicon-search"></i>
		          </button>
		        </div>
		      </div>
		    </form>
	    </div>
	  </div>
	</nav>
	<!-- carrousel -->
	<div class="container">
		<div class="carrousel">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img src="Imagens/frete.jpg" width="100%">
					</div>
					<div class="item">
						<img src="Imagens/energy.jpg" width="100%">
					</div>
					<div class="item">
						<img src="Imagens/supreme.jpg">
					</div>
				</div>
				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>

				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
	<!-- medicamentos -->
	<div class="container">
		<table>
		<tr>
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
				echo "<form action='confircompra.php' method='POST'>";

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							if ("$row[quantidade]" > 0) {
								echo "<div class='column'>";
								echo "<div class='contMed'>";
								echo "<div><img src='Imagens/$row[imagem]' width='300'><br>" . "<h4>$row[nome]</h4>" . "<b>Preço: </b>R$:$row[preco]</div>";
								echo "<p><input class='btn btn-sm bt1' type='submit' value='Comprar' name=$row[Codigo]></p>";
								echo "</div></div>";	
							}							
						}
					}
					else {echo "Empty";}
				echo "</div></div>";
			?>
		</tr>
		</table>
	</div>
	<div id="rodape">
		<div class="container">			
			&copy; Copyright - Todos os direitos reservados.
		</div>
	</div>
</body>
</html>