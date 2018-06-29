<?php
include_once 'header.php';
imprimir_cabecalho('Home',['index']);
?>
<div class="fundo">
	<div class="logo">
		<img src="img/logo.png" alt="Italian Trulli">
		<h2>Printers Informatica</h2>
	</div>
	<div class="info">
		<div class="flex">
			<div class="sobre">
				sobre
			</div>
			<div cass="block">
				<div class="cadastro">
					<form nome="user" method="POST" action="quser.php"> <!-- qual usuario vai ser redirecionado a que pela pasta quser.php -->
						<label><p>e-mail</p></label> <input type="text" name="e_mail"><br> <!-- e-mail do usuario -->
						<label><p>senha</p></label> <input type="password" name="senha"><br><br> <!-- senha do usuario -->
						<input type="submit" value="Enviar"/> <!-- Botão ezeculta ação -->
					</form>
				</div>
				<div class="criarc">
					<a href="cadastro_usuario.php" target="_self"><p>Faça cadastro a qui</p></a> <!-- criar usuario localizada em criarcadastro/nvcli.php -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include_once 'footer.php';
?>
