<?php

$objPass=new \Classes\ClassPassword();

	//Id

	if (isset($_POST['id'])) {
		$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
	}
	else{
		$id = null;
	}

	//Nome
	if (isset($_POST['nome'])) {
		$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	}
	else{
		$nome = null;
	}

	//Sobrenome

	if (isset($_POST['sobrenome'])) {
		$sobrenome = filter_input(INPUT_POST,'sobrenome',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	else{
		$sobrenome = null;
	}

	//Sexo

	if (isset($_POST['sexo'])) {
		$sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	else{
		$sexo = null;
	}

	//Nome de usuário
	if (isset($_POST['nomu'])) {
		$nome_usuario = filter_input(INPUT_POST,'nomu',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	else{
		$nome_usuario = null;
	}
	

	//Email

	if (isset($_POST['email'])) {
		$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	else{
		$email = null;
	}

	//Cpf

	if (isset($_POST['cpf'])) {
		$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	else{
		$cpf = null;
	}

	//Data de nascimento

	if (isset($_POST['dataNascimento'])) {
		$dataNascimento = filter_input(INPUT_POST,'dataNascimento',FILTER_SANITIZE_SPECIAL_CHARS);
	}

	else{
		$dataNascimento = null;
	}

	//Senha

	if (isset($_POST['senha'])) {
		$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS);

		$hashSenha=$objPass->passwordHash($senha);
	}

	else{
		$senha = null;
		$hashSenha=null;
	}

	//Confirma Senha

	if (isset($_POST['senhaConf'])) {
		$conf_senha = filter_input(INPUT_POST,'senhaConf',FILTER_SANITIZE_SPECIAL_CHARS);
		$hash_Conf_Senha=$objPass->passwordHash($conf_senha);
	}

	else{
		$conf_senha = null;
		$hash_Conf_Senha=null;
	}

	if(isset($_POST['g-recaptcha-response']))
		{
			$gRecaptchaResponse=$_POST['g-recaptcha-response'];
		}else
		{
			$gRecaptchaResponse=null;
		}

	$dataCreate=date("Y-m-d H:i:s");
	$token=bin2hex(random_bytes(64));
	$foto = "200x200.png";

	//Seleção de dados
	$arrVar=[
		"id"=>$id,
		"nome"=>$nome,
		"sobrenome"=>$sobrenome,
		"nome_usuario"=>$nome_usuario,
		"email"=>$email,
		"cpf"=>$cpf,
		"sexo"=>$sexo,
		"dataNascimento"=>$dataNascimento,
		"dataCreate"=>$dataCreate,
		"hashSenha"=>$hashSenha,
		"hash_Conf_Senha"=>$hash_Conf_Senha,
		"token"=>$token,
		"foto"=>$foto,
	];
	
	