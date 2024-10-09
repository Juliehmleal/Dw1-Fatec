<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>forms</title>
		
		<style>
		
		</style>
	</head>
	
	<body>
		<h1> Formulários </h1>
		
		<form method="get">
			<fieldset>
				<legend>Dados Usuário</legend>
				<p>	<!-- atributo for do label aponta pra o id do input desejado -->
					<label for="id_txt_nome">Nome: </label>
					<input type="text" name="txtnome" id="id_txt_nome">
				</p>
			
			
				<p>
					<label for="id_date_dataNasc">Data de nascimento:</label>
					<input type="date" name="dateNascimento" id="id_date_dataNasc">
					
				</p>
			</fieldset>
			
			<fieldset>
				<legend>Avaliação Usuário</legend>
				<p>	
					<label for="id_range_avaliacao"">Avaliação: </label><br>
					1 <input type="range" name="rangeAvaliacao" id="id_range_avaliacao" min="1" max="5"> 5			
				</p>
				
				<p>	
					<label for="id_toggle">Switch: </label><br>
					<input type="range" name="rangeToggle" id="id_toggle" min="0" max="1"> 			
				</p>
			</fieldset>
			<p>
				<label for="id_btn_submit">Envio: </label>
				<input type="submit" name="btnsubmit" id="id_btn_submit">
			</p>
			
		</form>
		
		<?php
			echo "<pre>";
			print_r($_GET);
		
		?>
	</body>
	
	
</html>
