<?php

$validate = new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
//$validate->validateIssetEmail($email);
$validate->validateData($dataNascimento);
$validate->validateCpf($cpf);
$validate->validateConfSenha($senha, $conf_senha);
$validate->validateStrongSenha($senha);
$validate->validateCaptcha($gRecaptchaResponse);
echo $validate->validateFinalUpdate($arrVar);