<?php 
function imprimir_cabecalho($titulo,$css){
	?>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8"> 
		<title><?php echo $titulo; ?> | Printers</title>
		<?php
		if(count($css)>0){
			for ($i=0; $i < count($css); $i++) { 
				echo "<link rel='stylesheet' type='text/css' href='css/$css[$i].css'>";
			}
		}
		?>
	</head>
	<body>
		<script	src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
	</script>
<?php }
?>