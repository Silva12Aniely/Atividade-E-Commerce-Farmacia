<!DOCTYPE html>
<html>
<head>
	<title>Umbrella Pharma - Contato</title>
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
	<!-- jumbotron -->
	<div class="container">
		<div class="jumbotron"><img src="Imagens/MedJumbo.png" width="45%" id="jumbo"></div>
	</div>
	<!-- form contato -->
		<div class="container">
			<div class="contato col-sm-6">
				<form action="" method="POST">
					<label>Nome:</label><br>
					<input type="text" placeholder="Nome" required><br>
					<label>E-mail:</label><br>
					<input type="text" placeholder="E-mail" required><br>
					<label>Telefone:</label><br>
					<input type="text" placeholder="Telefone:" required><br>
					<label>Assunto:</label><br>
					<input type="text" placeholder="Assunto" required><br>
					<label>Deixe sua mensagem:</label><br>
					<textarea name="msg" rows="5" cols="25" required></textarea><br>

					<input class="b btn btn-sm" type="submit" value="Enviar">
				</form>
			</div>
			<div class="pg col-sm-7">
				<p>
					<h4><b>Telefone: </b>(00) 9999-9999</h4>
					<h4><b>E-mail: </b>umbrella@pharma.com.br</h4>
				<br>
				<h4><u>Formas de pagamento</u></h4>
				Parcele em até 3x sem juros<br>nos cartões de crédito.</p>
				<img src="Imagens/pagamento.jpg" width="32.5%;">
			</div>
		</div>
		<div id="rodape">
			<div class="container">
				&copy; Copyright - Todos os direitos reservados.
			</div>
		</div>
</body>
</html>