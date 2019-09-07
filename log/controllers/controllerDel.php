<?php

$idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
$del = new Models\ClassCrud;
$del->deleteDB(
	"cadastro",
	"id=?",
	array(
		$idUser
	)
);

$session= new Classes\ClassSessions();
$session->destructSessions();

echo "<script>
    alert('Deletado com Sucesso!');
    window.location.href='".DIRPAGE."';
</script>";
?>