<?php \Classes\ClassLayout::setHead('PDPA','Essa é a home page do nosso site.','João Strix'); 

\Classes\ClassLayout::setHeadRestrito();

$dados = new Models\ClassCrud();
$BFetch=$dados->selectDB(
	"*",
	"cadastro",
	"where id=?",
	array(
		$_GET['id']
	)
);
$Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)

?>
<?php
	if (isset($_SESSION['login'])) {
		\Classes\ClassLayout::setBarlog();
	}else{
		\Classes\ClassLayout::setBar();
	}
?>


<div class="login center auto">

	<div class="formUpdate">

		<h1>Update</h1>

		<div class="retornoUP">
			
		</div>

		<form name="formUpdate" id="formUpdate" action="<?php echo DIRPAGE.'controllers/controllerUpdate'; ?>" method="POST">

			<input type="hidden" id="id" name="id" value="<?php echo $Fetch['id']; ?>">
			
			<input class="w80 input" type="text" name="nome" id="nome" placeholder="Nome:" value="<?php echo $Fetch['nome']; ?>" required>

			<input class="w80 input" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome:" value="<?php echo $Fetch['sobrenome']; ?>" required>

			<input class="w80 input" type="text" name="nomu" id="nomu" placeholder="Nome de Usuário:" value="<?php echo $Fetch['nome_usu']; ?>" required>

			<select name="sexo" id="sexo" class="w80 input" required>
				<option value="">Selecione</option>
				<option value="Masculino">Masculino</option>
				<option value="Feminino">Feminino</option>
			</select>

			<input class="w80 input" type="email" name="email" id="email" placeholder="E-mail:" value="<?php echo $Fetch['email']; ?>" required>

			<input class="w80 input" type="text" name="cpf" id="cpf" placeholder="Cpf:" value="<?php echo $Fetch['cpf']; ?>" required>

			<input class="w80 input" type="text" name="dataNascimento" id="dataNascimento" placeholder="Data de Nascimento:" value="<?php echo $Fetch['data_nasci']; ?>" required>

			<input class="w80 input" type="password" name="senha" id="senha" placeholder="Senha:" required>

			<input class="w80 input" type="password" name="senhaConf" id="senhaConf" placeholder="Confirmar Senha:" required>

			<input class="w80 input" type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>

			<input class="w20-80 input submit" type="submit" value="Update">

		</form>
	</div>	
</div>


<?php \Classes\ClassLayout::Footer(); ?>
<?php \Classes\ClassLayout::setFooter(); ?>