<?php \Classes\ClassLayout::setHead('Strix','Essa é a home page do nosso site.','João Strix');
\Classes\ClassLayout::setModais();
use Models\classCrud;
?>
<?php
	if (isset($_SESSION['login'])) {
		\Classes\ClassLayout::setBarlog();
	}else{
        \Classes\ClassLayout::setBar();
?>


<?php

//Conexão
include_once 'db_connect.php';

if(isset($_POST['mano'])){
    echo "mec";
    $erros = array();

    $titulo = mysqli_escape_string($connect, $_POST['titulo']);

    $subtitulo = mysqli_escape_string($connect, $_POST['subtitulo']);

    $hashtag = mysqli_escape_string($connect, $_POST['hashtag']);

    $destaque = mysqli_escape_string($connect, $_POST['destaque']);

    $conteudo = mysqli_escape_string($connect, $_POST['post']);

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);-

    $dataCreate=date("Y-m-d H:i:s");

    if(empty($titulo) or empty($subtitulo) or empty($conteudo)){
        $erros[] = "Por favor prencha todos os campos!";
    }
    else{

        $sql = "UPDATE postagem SET titulo = '$titulo', subtitulo = '$subtitulo', hashtag = '$hashtag', postagem = '$conteudo', destaque = '$destaque' WHERE id = '$id' ";

        if(mysqli_query($connect, $sql)){
            echo "<script>
            alert('Cadastrado com sucesso!');
            window.location.href='".DIRPAGE."visu_post?id=$idok';
            </script>";
        }else{
            $erros[] = "Erro ao fazer Update, Tente Novamente!";
        }
    }
}

    
?>


<div onclick="getElementById('myModl').style.display='block'" class="banner"></div> 
<?php
    }
    $idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
    $Crud=new ClassCrud();
    $BFetch=$Crud->selectDB(
        "*",
        "postagem",
        "where id=?",
        array(
            $idUser
        )
    );
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
?>







<div class="login center auto">
    <form action="" method="post">
        <div class="POST">
            
            <h1>Editar Postagem</h1><br>

            <div>
                <?php
                    if (!empty($erros)):
                        foreach($erros as $erro):
                            echo $erro;
                        endforeach;
                    endif;
                ?>  
            </div>

            <h3>Titulo:</h3>
            <input type="text" placeholder="Título" name="titulo" value="<?php echo $Fetch['titulo']; ?>" class="w80 input" ><br>

            <h3>Subtitulo:</h3>
            <input type="text" placeholder="Subtítulo" value="<?php echo $Fetch['subtitulo']; ?>" name="subtitulo" class="w80 input" ><br>
            
            <h3>Tag:</h3>
            <input type="text" placeholder="Insira a tag" value="<?php echo $Fetch['hashtag']; ?>" name="hashtag" class="w80 input" ><br>
            
            <h3>Destaque:</h3>
            <select style="width: 83%" name="destaque" id="destaque" class="input">
                <option value="">Selecione</option>
                <option value="destaque">Destaque</option>
                <option value="indicar">Indicado</option>
                <option value="slider">Slider</option>
                <option value="exclusivo">Exclusivo</option>
                <option value="exclusivo">Desativar</option>
            </select>

            <h3>Conteudo:</h3>
            <input type="text" value="<?php echo $Fetch['postagem']; ?>" placeholder="O conteúdo vai aqui..." name="post" class="w80 input">

            <button type="submit" name="mano" class="w20-80 input submit">Cadastrar</button>
        
        </div>

    </form>

</div>