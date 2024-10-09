<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>a08t01</title>
	</head>
	
	<body>
		<h1>Formulários e Relatórios em HTML</h1>
		<!-- formularios usados para receber entrada de dados-->
		<!-- interface para o usuario -->
		<!-- associados a operações que envolvam processamento em servidores -->
		<!-- nao é um elemento visivel por si só-->
		<!-- representado pela tag <form> </form> -->
		<!--Deve conter: name, action e method-->
		<!--Action define para onde seram enviado os dados-->
		<!--Method define o metodo de envio post ou get; get: maneira aberta post: maneira oculta-->
		<!--target define aonde o arquivo do action sera aberto -->
		<form name="f1" action="" method="get">
			
			<p><input name="txt1" type="text" placeholder="Nome"></p> <!-- formulario do tipo texto -->
			<p><input name="email" type="email" placeholder="email@email.com"></p> 
			<p><input name="password" type="password" placeholder="Senha"></p> 
			<p><input name="num1" type="number" placeholder="Idade"></p>

			<p>
				Interesses <br>
				<input type="checkbox" name="ckint[]" value="tdm">Tênis de Mesa <br>
				<input type="checkbox" name="ckint[]" value="blb">Bloodborne <br>
				<input type="checkbox" name="ckint[]" value="nrt">Naruto <br>
				<input type="checkbox" name="ckint[]" value="dks">Dark Souls <br>
			</p> <!-- seleção multipla -->
			
			<p>
				Time:
				<input type="radio" name="rdtime" value="cortinas">Cortinas
				<input type="radio" name="rdtime" value="anti-cortinas">Anti-Cortinas
			</p>
			
			<p>
				Estado:
				<select name="seluf">
					<option value="SP">SP</option>
					<option value="MG">MG</option>
					<option value="RJ">RJ</option>
					<option value="ES">ES</option>
										
				</select>
			</p>
			
			<p><input name="btn1" type="submit" value="Salvar"></p>
					
		</form>
		
		<?php
			echo "<pre>";
			print_r($_GET);
		?>
	</body>

</html>
