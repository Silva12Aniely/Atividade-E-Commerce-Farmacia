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
		margin-top: 20px;
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
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
	if (isset($_POST["VB"])) {
		echo "<div class='row'>
			<div class='info'>
			<div class='col-sm-4'>				
				<div class='imagebg'>					
					<img src='Imagens/VITAMINAB.png' width='200'>				
				</div>	
			</div>
			<div class='col-sm-6'>
				<h2>VITAMINA COMPLEXO B</h2>
				O Complexo B possui ação reguladora quando já existem manifestações clínicas causadas pela deficiência vitamínica. Ele auxilia na regularização e reequilíbrio das vitaminas que o organismo necessita. 
			</div>
			<div class='det col-sm-4'><br>
				<strong>Quantidade:</strong> 100 Comprimidos <br>
				<strong>Peso:</strong> 45 gr <br> 
				<strong>Princípio Ativo:</strong> VITAMINA DO COMPLEXO B
				<h3 style='margin-top:0;'><b>Preço:</b> R$:19,90</h3>
			</div>
			<div class='col-sm-4'>
				<form action='compra.php' method='POST'>
					<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
					<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
					</div>
				</form>
			</div>
			</div>";
	}
	elseif (isset($_POST["LE"])) {
		echo "<div class='row'>							
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/LOCERYL.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
							<h2>LOCERYL ESMALTE</h2>
							Medicamento para tratamento de micose de unha. Diferentemente de muitos produtos, LOCERYL® ESMALTE contém um ingrediente antifúngico, a amorolfina, que atua na eliminação dos fungos causadores da Infecção. 
					</div>
					<div class='det2 col-sm-4'><br>
						<strong>Quantidade:</strong> 2,5ml <br>
						<strong>Peso:</strong> 122 gr <br> 
						<strong>Princípio Ativo:</strong> AMOROLFINA
						<h3 style='margin-top:0;'><b>Preço:</b> R$:R$:86,95</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["PT"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/MedUP.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>PANT 50MG/ML</h2>
						Produto indicado no tratamento da alopecia androgência, calvície hereditária, em homens adultos. Pode reverter o processo de queda de cabelos em portadores de calvície hereditária (alopecia androgênica), quando aplicado localmente.
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 50ml <br>
						<strong>Peso:</strong> 85 gr <br> 
						<strong>Princípio Ativo:</strong> MINOXIDIL
						<h3 style='margin-top:0;'><b>Preço:</b> R$:84,63</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["SYS"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/systane.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>SYSTANE UL</h2>
						Indicado em caso de desconfoto provocado por fatores ambientais como poeira, fumaça, tempo seco, vento, ou exposição a computadores, aparelhos de televisão, celulares e tablets.
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 15ml Lubrificante Oftálmico <br>
						<strong>Peso:</strong> 25 gr <br> 
						<strong>Princípio Ativo:</strong> HYDROXIPROPIL GUAR 8A
						<h3 style='margin-top:0;'><b>Preço:</b> R$:53,68</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["CH"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/colageno.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>COLÁGENO HIDROLISADO</h2>
						O Colágeno Hidrolisado Stem deve ser consumido conforme a recomendação de ingestão diária constante da embalagem. Gestantes, nutrizes e crianças até 3 (três) anos, somente devem consumir este produto sob orientação de nutricionista ou médico.
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 100 Comprimidos <br>
						<strong>Peso:</strong> 132 gr <br> 
						<strong>Princípio Ativo:</strong> COLAGENO HIDROLISADO
						<h3 style='margin-top:0;'><b>Preço:</b> R$:35,52</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["CZ"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/centrum.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>CENTRUM DE A A ZINCO</h2>
						O Complexo Vitamínico Centrum completa a sua alimentação e te ajuda a aproveitar melhor a energia dos alimentos, auxilia nas defesas do organismo e em uma aparência mais saudável. Além disso, não engorda.
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 150 Comprimidos <br>
						<strong>Peso:</strong> 256 gr <br> 
						<strong>Princípio Ativo:</strong> CIANOCOBALAMINA,FUMARATO FERROSO...
						<h3 style='margin-top:0;'><b>Preço:</b> R$:161,05</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["SE"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/eximia.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>SUPLEMENTO VITAMÍNICO EXIMIA FORTALIZE KERA D</h2>
						O Exímia Fortalize Kera D Suplemento Vitamínico possui fórmula com Vitamina A, C, E, Zinco, Magnésio, Complexo B e Ferro que ajudam no crescimento e fortalecimento de cabelos finos e sem brilho.
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 30 Comprimidos <br>
						<strong>Peso:</strong> 61 gr <br>
						<strong>Princípio Ativo:</strong> NAO CONSTA
						<h3 style='margin-top:0;'><b>Preço:</b> R$:135,49</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["DP"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/MedUP.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>DICLOFENACO POTASSICO 50MG</h2>
						O diclofenaco potássico pode ser usado no tratamento das seguintes condições: Dor reumática das articulações (artrite); Dor nas costas, síndrome do ombro congelado, cotovelo de tenista e outros tipos de reumatismo; Dor causada por câncer.
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 20 Comprimidos Revestidos <br>
						<strong>Peso:</strong> 19 gr <br> 
						<strong>Princípio Ativo:</strong> DICLOFENACO POTASSICO
						<h3 style='margin-top:0;'><b>Preço:</b> R$:11,75</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["NA"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/nutren.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>COMPLEMENTO ALIMENTAR NUTREN ACTIVE SABOR BAUNILHA</h2>
						Complemento Alimentar Active Sabor Baunilha Nutren é complemento alimentar para quem necessita complementar a nutrição diária ou se preocupa com uma alimentação equilibrada.
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 400g <br>
						<strong>Peso:</strong> 493 gr <br> 
						<strong>Princípio Ativo:</strong> NAO CONSTA
						<h3 style='margin-top:0;'><b>Preço:</b> R$:39,92</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
	elseif (isset($_POST["IG"])) {
		echo "<div class='row'>					
				<div class='info'>
					<div class='col-sm-4'>				
						<div class='imagebg'>					
							<img src='Imagens/g-tech.png' width='300'>				
						</div>	
					</div>
					<div class='col-sm-6'>
						<h2>INALADOR E NEBULIZADOR G-TECH NEBCOM V</h2>
						O Inalador e Nebulizador G-Tech Nebcom V é indicado para amenizar as crises respiratórias como bronquite, asma e para o tratamento de afecções respiratórias das vias aéreas inferiores (brônquios, pulmões).
					</div>
					<div class='det col-sm-4'><br>
						<strong>Quantidade:</strong> 1 Unidade <br>
						<strong>Peso:</strong> 232 gr <br> 
						<strong>Princípio Ativo:</strong> NAO CONSTA
						<h3 style='margin-top:0;'><b>Preço:</b> R$:139,90</h3>
					</div>
					<div class='col-sm-4'>
						<form action='compra.php' method='POST'>
							<input class='numf' type='number' name='qtde' value='1' min='1' max='50'><br>
							<div class='btf'><input class='btn btn-lg' type='submit' name='fcompra' value='Comprar'>
							</div>
						</form>
					</div>
				</div>
			</div>";
	}
?>