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
		
		<form method="post" enctype="multipart/form-data">
			<p>	<!-- required torna um campo obrigatório seu preenchimento para o envio -->
				<input type="text" name="txtnome" required="required">
			</p>
			<p> <!-- disabled torna um campo desabilitado -->
				<textarea name="areacom" rows="10" cols="30" disabled="disabled"></textarea>
			</p>
			<p> <!-- é possivel delimitar o tipo de arquivo que poderá ser enviado -->
				<input type="file" name="ulpfoto" accept="image/*" > 
			</p>
			<p>
				<input type="reset" value="Limpar" name="btnres">
				<input type="submit" name="btnsub">
			</p>		
		</form>
		
		<?php
			echo "<pre>";
			print_r($_POST);
			//demonstra diversos atributos sobre o arquivo que teve o upload
			print_r($_FILES);
			
		
		?>
	</body>
</html>
