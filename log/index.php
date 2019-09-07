<?php

header("Content-Type: text/html; charset=utf8");

include ("config/config.php");
include (DIRREQ."lib/vendor/autoload.php");
include (DIRREQ."helpers/variables.php");

$dispatch = new Classes\ClassDispatch();
include($dispatch->getInclusao());

$validate = new \Classes\ClassValidate();
$validate->validateFields($_POST);


