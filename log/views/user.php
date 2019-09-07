<?php 

\Classes\ClassLayout::setHead('Strix','Essa é a pagina de usuario do nosso site.','João Strix');

\Classes\ClassLayout::setHeadRestrito(); 

use Models\classCrud;

?>
<?php
	if (isset($_SESSION['login'])) {
		\Classes\ClassLayout::setBarlog();
	}else{
        \Classes\ClassLayout::setBar();
?>

<div onclick="getElementById('myModl').style.display='block'" class="banner">

        </div> 
<?php
    }
?>

<?php

//Conexão
include_once 'db_connect.php';

if(isset($_POST['pika'])){

    $_SESSION['id'];
    $id = $_SESSION['id'];
    $erros = array();
    if (1 < 0) {
        echo "TROLEI";
    }
    else{

        $formatosP = array("png", "jpeg", "jpg", "gif");

        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosP)){
            
            //Preparando o arquivo e o diretorio
            $pasta = "img/Users/";
            
            $temp = $_FILES['foto']['tmp_name'];
            
            $novoN = uniqid().".$extensao";

            if(move_uploaded_file($temp, $pasta.$novoN)){

                $sql = "UPDATE cadastro SET foto = '$novoN' WHERE id = '$id'";

                if(mysqli_query($connect, $sql)){
                    echo "<script>
                    alert('Cadastrado com sucesso!');
                    window.location.href='".DIRPAGE."user';
                    </script>";
                }else{
                    $erros[] = "Erro ao fazer Upload, Tente Novamente!";
                }
            }

        }
        else{
            $erros[] = "Erro, não foi possivel fazer o upload! formato inválido";
        }
    }
}

    
?>


<div class="center">


		<div id="content-usu left">
			<!-- Estrutura de Loop -->
			<?php
			$_SESSION['id'];
			$id = $_SESSION['id'];
			$Crud=new ClassCrud();
			$BFetch=$Crud->selectDB(
				"*",
				"cadastro",
				"where id=$id",
				array()
			);
			$Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)
			?>
					<div class="auto mtop center">
    <h1>Perfil de <?php echo $Fetch['nome_usu']; ?></h1>
</div>
<div class="center w80 auto perfil">
    <div class="p33 dados">
        <div class="img_user">
            <?php 
                if(empty($Fetch['foto'])){
            ?>
            <img src="img/200x200.png" alt="">
            <form action="" method="post" enctype="multipart/form-data" >
                <input type="file" name="foto" class="w80 input" required><br>
                <button type="submit" name="pika" class="w20-80 input submit">Cadastrar</button>
            </form>
            <?php
                } else{
            ?>
            <img id="mano" src="img/Users/<?php echo $Fetch['foto']; ?>" width=200px>
            <form action="" method="post" enctype="multipart/form-data" >
                <input type="file" name="foto" class="w80 input" required><br>
                <button type="submit" name="pika" class="w20-80 input submit">Enviar</button>
            </form>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="p33 dados">
        <div class="perf_infos">
		<h3 class="mbot">Informações</h3>
        <table>
            <tr>
                <td class="fc">Nome de usuário</td>
                <td class="lc"><?php echo $Fetch['nome_usu']; ?></td>
            </tr>
        </table>    
        <h3 class="mbot">Informações pessoais</h3>
        <table>
            <tr>
                <td class="fc">Nome</td>
                <td class="lc"><?php echo $Fetch['nome']; ?></td>
            </tr>
            <tr>
                <td class="fc">Sobrenome</td>
                <td class="lc"><?php echo $Fetch['sobrenome']; ?></td>
            </tr>
            <tr>
                <td class="fc">CPF</td>
                <td class="lc"><?php echo $Fetch['cpf']; ?></td>
            </tr>
            <tr>
                <td class="fc">Sexo</td>
                <td class="lc"><?php echo $Fetch['sexo']; ?></td>
            </tr>
            <tr>
                <td class="fc">Aniversário</td>
                <td class="lc"><?php echo $Fetch['data_nasci']; ?></td>
            </tr>
        </table>
        <h3 class="mbot">Contato</h3>
        <table>
            <tr>
                <td class="fc">Email</td>
                <td class="lc"><?php echo $Fetch['email']; ?></td>
            </tr>
        </table>
        <h3 class="mbot">Senha</h3>
        <table>
            <tr>
                <td class="fc">Senha</td>
                <td class="lc">**************</td>
            </tr>
        </table>
        </div>
    </div>
    <div class="p33">
        <div class="actions auto">  
            <p class="bggrey">Ações</p>
            <hr>
            <a href="<?php echo "update?id={$Fetch['id']}"; ?>">Editar</a>
            <br>
            <a class='red' href="<?php echo "controllers/controllerLogout"; ?>">Sair</a>
            <br>
			<a class="Deletar" href="<?php echo "controllers/controllerDel?id={$Fetch['id']}"; ?>">Apagar conta</a>
			<br>
			<?php
			if (($Fetch['id'] == 65) or ($Fetch['id'] == 68)) {
				echo "<a href='post_new?id={$Fetch['nome']}'>Publicar</a>";
				echo "<br>";
				echo "<a href='".DIRPAGE."administracao'>Administrar Postagens</a>";
			}
			?>
        </div>
    </div>
</div>


			

			
		</div>

		</div>































        <script>
//SCRIPT NAVBAR INICIO

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav"){
        x.className += " responsive";
    } 
    else {
        x.className = "topnav";
    }
}

//SCRIPT NAVBAR FIM
//SCRIPT MODAL INICIO

 // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modl = document.getElementById("myModl");

// Get the button that opens the modal
var bttn = document.getElementById("myBttn");

// Get the <span> element that closes the modal
var spann = document.getElementsByClassName("clos")[0];

// When the user clicks on the button, open the modal 
bttn.onclick = function() {
  modl.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spann.onclick = function() {
  modl.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modl) {
    modl.style.display = "none";
  }
}

</script>



<!-- SCRIPTS -->
<!-- SCRIPT SLIDER INICIO -->
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<!-- SCRIPT SLIDER FIM -->
<!-- SCRIPT NAVBAR INICIO -->
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav"){
        x.className += " responsive";
    } 
    else {
        x.className = "topnav";
    }
}
</script>
<!-- SCRIPT NAVBAR FIM -->

<!-- SCRIPT MODAL INICIO -->
<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

<script>
    // Get the modal
var modl = document.getElementById("myModl");

// Get the button that opens the modal
var bttn = document.getElementById("myBttn");

// Get the <span> element that closes the modal
var spann = document.getElementsByClassName("clos")[0];

// When the user clicks on the button, open the modal 
bttn.onclick = function() {
  modl.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spann.onclick = function() {
  modl.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modl) {
    modl.style.display = "none";
  }
}

</script>



<?php \Classes\ClassLayout::Footer(); ?>
<?php \Classes\ClassLayout::setFooter(); ?>