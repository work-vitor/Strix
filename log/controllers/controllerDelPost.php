<?php

$idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
$del = new Models\ClassCrud;
$del->deleteDB(
	"postagem",
	"id=?",
	array(
		$idUser
	)
);


echo "<script>
    alert('Deletado com Sucesso!');
    window.location.href='".DIRPAGE."';
</script>";
?>