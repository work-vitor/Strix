<?php \Classes\ClassLayout::setHead('Strix','Essa é a página de esqueci senha.','Strix');
?>
<?php
	if (isset($_SESSION['login'])) {
		\Classes\ClassLayout::setBarlog();
	}else{
        \Classes\ClassLayout::setBar();
    }
?>

<?php
	//Conexão
	include_once 'db_connect.php';
	
	if (isset($_POST['ok'])) 
	{
		
	}

?>

<div class="login center auto">
	<h1>Esqueci minha senha</h1>
	<form name="formSenha" id="formSenha" action="" method="POST">

		<!---Resultado--->
		<div class="resultadoForm">
			
		</div>

		<input class="w80 input" type="email" name="email" id="email" placeholder=" Seu Email:" required>

		<input name="ok" class="w20-80 input submit" type="submit" value="Solicitar">

	</form>

</div>

<?php //\Classes\ClassLayout::Footer(); ?>
<?php \Classes\ClassLayout::setFooter(); ?>