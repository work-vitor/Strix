<?php

//Caminhos Absolutos

$pastaInterna="log/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');

define('DIRCSS',DIRPAGE.'lib/css/');

define('DIRJS',DIRPAGE.'lib/js/');

//Acesso ao DB
define('HOST',"localhost");
define('DB',"projeto");
define('USER',"root");
define('PASS',"");

//Outras Informações
define("SITEKEY","NO PROBLEMS");
define("SECRETKEY","NO PROBLEMS");

define("DOMAIN", "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");