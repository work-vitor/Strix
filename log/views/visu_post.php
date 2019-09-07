<?php 

\Classes\ClassLayout::setHead('Strix','Essa é a home page do nosso site.','João Strix');
\Classes\ClassLayout::setModais();
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


<div class="news auto center">
    <?php
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
    $Crud=new ClassCrud();
    $BFetch=$Crud->selectDB(
        "*",
        "postagem",
        "where id=$id",
        array()
    );
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)
    ?>
    <?php 
      if (isset($_SESSION['login'])) {
        ?>
    <div class="bignews center auto">
                <h1 class="h1new"><?php echo $Fetch['titulo']; ?></h1>
                <p class="smallp"><?php echo $Fetch['subtitulo']; ?></p>
                <p class="lowsmallp"><?php echo $Fetch['data']; ?> por <?php echo $Fetch['id_adm']; ?></p>
            <img class="imgnews" src="img/Postagem/<?php echo $Fetch['imagem']; ?>" alt="">     
            
            <p class="ptxt">
            <?php echo $Fetch['postagem']; ?>
            </p>
            <p class="lowsmallp">Leia mais sobre <a href="<?php echo "noticia_espe?especifico={$Fetch['hashtag']}"; ?>"><?php echo $Fetch['hashtag']; ?></a>!</p>
                
            </div>
            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId=834082556973997"></script>






<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>

    <?php 
      } else{
        if(($Fetch['destaque'] == "exclusivo")){
          ?>
          <div class="bignews center auto">
            <p>Você precisa estar logado para visualizar esta publicação, cadastre-se clicando <button class="btn-transformado" onclick="getElementById('myModl').style.display='block';">aqui</button>!</p>
          </div>
          <?php
        } else{
          ?>
<div class="bignews center auto">
                <h1 class="h1new"><?php echo $Fetch['titulo']; ?></h1>
                <p class="smallp"><?php echo $Fetch['subtitulo']; ?></p>
                <p class="lowsmallp"><?php echo $Fetch['data']; ?> por <?php echo $Fetch['id_adm']; ?></p>
            <img class="imgnews" src="img/Postagem/<?php echo $Fetch['imagem']; ?>" alt="">     
            
            <p class="ptxt">
            <?php echo $Fetch['postagem']; ?>
            </p>
            <p class="lowsmallp">Leia mais sobre <a href="<?php echo "noticia_espe?especifico={$Fetch['hashtag']}"; ?>"><?php echo $Fetch['hashtag']; ?></a>!</p>
                
            </div>
            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId=834082556973997"></script>






<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>

            <?php
        }
      }
      ?>














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

