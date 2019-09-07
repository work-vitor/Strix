<?php \Classes\ClassLayout::setHead('Strix','Essa é a home page do nosso site.','Strix');
\Classes\ClassLayout::setModais();
use Models\classCrud;
?>
<?php
	if (isset($_SESSION['login'])) {
		\Classes\ClassLayout::setBarlog();
	}else{
        \Classes\ClassLayout::setBar();
?>

<div onclick="getElementById('myModl').style.display='block'" class="banner"></div> 
<?php
    }
?>






<div class="contain">

    <!-- SLIDER DE CONTEUDO  INICIO -->
    <div class="idea">
        <div class="slideshow-container">
        <?php
        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB(
            "*",
            "postagem",
            "",
            array()
        );
        while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
            if(($Fetch['destaque'] == "slider")){
        ?>
        <a href="<?php echo "visu_post?id={$Fetch['id']}"; ?>">
        <div class="mySlides fade">
            <img class="noned" src="img/Postagem/<?php echo $Fetch['imagem']; ?>">
            <div class="text">
                <h2 class="h2txt"><?php echo $Fetch['titulo']; ?></h2>
                <br> 
                <p class="sliderp"><?php echo $Fetch['subtitulo']; ?></p>
            </div>
        </div> 
        <?php
            }
                }
        ?>
        </div>
            
    <!-- SLIDER DE CONTEUDO FIM -->
    <!-- NOTICIAS INICIO -->
    <div class="news center auto">
        <?php
        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB(
            "*",
            "postagem",
            "",
            array()
        );
        while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
            if(($Fetch['destaque'] == "destaque")){
        ?>
        <a class="too" href="<?php echo "visu_post?id={$Fetch['id']}"; ?>">
            <div>
                <h3><img class="right" src="img/Postagem/<?php echo $Fetch['imagem']; ?>"><?php echo $Fetch['titulo']; ?></h3>
                <p class="lsp"><?php echo $Fetch['subtitulo']; ?></p>
                <p class="llsp"><?php echo $Fetch['data']; ?></p>
            </div>
        </a>
        <?php
            }
                }
        ?>
        </div>
    </div>
    <div class="stoo">        
    <?php
        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB(
            "*",
            "postagem",
            "",
            array()
        );
        while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
            if(($Fetch['destaque'] == "indicar")){
        ?>
        <a class="indicacao" href="<?php echo "visu_post?id={$Fetch['id']}"; ?>">
            <div>
                <h3><img class="lnoned right" src="img/Postagem/<?php echo $Fetch['imagem']; ?>"><?php echo $Fetch['titulo']; ?></h3>
                <p class="lsp"><?php echo $Fetch['subtitulo']; ?></p>
            </div>
        </a>
        <?php
            }
                }
        ?>
    </div>
    <!-- NOTICIAS FIM -->
    <!-- FOOTER INICIO -->
    
    <!-- FOOTER FIM -->
    
</div>

































<script>
    //SCRIPT SLIDER INICIO
        var slideIndex = 0;
        showSlides();
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            } 
            slides[slideIndex-1].style.display = "block"; 
            setTimeout(showSlides, 4000); // Change image every 2 seconds
    }

//SCRIPT SLIDER FIM
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