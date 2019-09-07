<?php \Classes\ClassLayout::setHead('Upload','Essa é a Upload.','João Strix'); ?>
<?php
	if (isset($_SESSION['login'])) {
		//\Classes\ClassLayout::setBarlog();
	}else{
		\Classes\ClassLayout::setBar();
	}


?>

<?php
include_once 'db_connect.php';

if(isset($_POST['mec'])):

	$erros = array();
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);

    $conteudo = mysqli_escape_string($connect, $_POST['post']);

    //$id_adm = mysqli_escape_string($connect, $_GET['id']);

    $dataCreate=date("Y-m-d H:i:s");
    
    
    if(empty($titulo) or empty($conteudo)){
        $erros[] = "Por favor prencha todos os campos!";
    }
    else{
    	echo "mec";
    }

endif;
?>

<form action="" method="post">
	<h3>Titulo:</h3>
	<input type="text" name="titulo" class="w80 input" required><br>

	<h3>Imagem:</h3>
	<input type="file" name="foto" class="w80 input" required><br>

	

	<input type="submit" name="mec">
</form>


<?php //\Classes\ClassLayout::Footer(); ?>
<?php \Classes\ClassLayout::setFooter(); ?>

<?php
if(isset($_POST['pika'])):


    $erros = array();
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);

    $conteudo = mysqli_escape_string($connect, $_POST['post']);

    $id_adm = mysqli_escape_string($connect, $_GET['id']);

    $dataCreate=date("Y-m-d H:i:s");
    
    
    if(empty($titulo) or empty($conteudo) or empty($id_adm)){
        $erros[] = "Por favor prencha todos os campos!";
    }
    else{
         $formatosP = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosP)){
            $pasta = "img/";
            $temp = $_FILES['foto']['tmp_name'];
            $novoN = uniqid().".$extensao";

            if(move_uploaded_file($temp, $pasta.$novoN)){
                $sql = "INSERT INTO postagem (id_adm, titulo, data, postagem, imagem) VALUES ('$id_adm', '$titulo', '$dataCreate', '$conteudo', '$novoN')";

                if(mysqli_query($connect, $sql)):
                    echo "<script>
                    alert('Cadastrado com sucesso!');
                    window.location.href='".DIRPAGE."post_new?=$id_adm';
                    </script>";

                else:
                    $erros[] = "Erro ao fazer Upload, Tente Novamente!";
                endif;
            }
        }
    }
    else:
        $erros[] = "Erro, não foi possivel fazer o upload";
endif;
?>