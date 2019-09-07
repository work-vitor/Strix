<?php
session_start();
$validate = new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email,"login");
$validate->validateSenha($email,$senha);
//$validate->validateCaptcha($gRecaptchaResponse);
$validate->validateUserActive($email);
$validate->validateAttemptLogin();
echo $validate->validateFinalLogin($email);
