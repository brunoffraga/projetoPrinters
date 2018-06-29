<?php
include_once 'header.php';
include_once 'controller/funcaoDoUsuario.php';
include_once "model/usuario.php";
imprimir_cabecalho('Home',['usuario']);
?>
<div class="nome">
	<h2>Printers Informatica</h2>
</div>
<div class="cadastro">
	<?php imprimir_usuarios(visualisar_usuario($conn));	?>
</div>
<?php
include_once 'footer.php';
?>