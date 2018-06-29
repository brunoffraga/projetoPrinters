<?php
include_once 'header.php';
imprimir_cabecalho('Home',['usuario']);
?>
<div class="nome">
	<h2>Printers Informatica</h2>
</div>
<div class="cadastro">
	<div class="infocli">
		<form method="post" method="POST" action="controller/recebeCadastro.php">
			<p>Cidade: </p> 
			<select  id="cidade">
				<option value="tubarao">Tubarão</option> 
			</select>		
			<p><br>Tipo de cliente</p> 
			<select id="pessoa">
				<option selected disabled>Selecione uma opção </option>
				<option value="fisica">Pessoa Física </option>
				<option value="juridica">Pessoa Juridica </option>
			</select>
			<div id='geral' style="display: none;">
				<p>nome</p> <input type="text" name="nome" required><br>
				<p>e-mail </p> <input type="email" name="email" required><br>
				<p>senha </p> <input type="password" name="senha" required><br>
				<div id="pj" style="display: none"> 
					<p>CNPJ</p>
					<input type="text" name="cnpj">
				</div>
				<div id="pf" style="display: none">
					<p>CPF</p>
					<input type="text" name="cpf">
					<p>Data de nacimento </p> <input type="text" name="datanas"><br>
					<p>Sexo</p>
					<select name="sexo">
						<option selected disabled>Homem / Mulher</option>
						<option value="M">Homem</option>
						<option value="F">Mulher</option>
					</select>
				</div>
				<p>endereço</p> <input type="text" name="endereco" required>
				<p>numero</p> <input type="text" name="numero" required>
				<p>complemento </p> <input type="text" name="complemento" required><br>
				<p>bairro </p> <input type="text" name="bairro" required><br>
				<p>cep </p> <input type="text" name="cep" required><br>
				<input type="text" name="tipouser" value="cliente" hidden >
				<button type="submit">Enviar</button>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	//evento change jquery
	$('#pessoa').change(function(){
		//console.log($("#pessoa").val());
		$('#geral').show();
		var pessoa = $("#pessoa").val();
		if (pessoa == 'fisica') {
			$('#pf').show();
			$('#pj').hide();
		}else{
			$('#pf').hide();
			$('#pj').show();
		}
	});
</script>
<?php
include_once 'footer.php';
?>