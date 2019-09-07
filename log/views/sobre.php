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

<div onclick="getElementById('myModl').style.display='block'" class="banner"></div> 
<?php
    }
?>


<div class="perfils">
    
<div class="cardsons">
  <img src="img/us/joao.jpg" alt="João" style="width:100%">
  <h1>João Vitor</h1>
  <p class="title">Desenvolvedor back-end</p>
  <p>17 anos <br> IFSP Caraguatatuba</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/Joao.Vitor.costa.rx"><i class="fab fa-facebook-f"></i></a> 
    <a target="_blank" href="https://www.instagram.com/vitor_rodrigues7k/"><i class="fab fa-instagram"></i></a>  
  </div>
</div>
<div class="cardsons">
  <img src="img/us/pedro.jpg" alt="John" style="width:100%">
  <h1>Pedro Victor</h1>
  <p class="title">CEO</p>
  <p>17 anos <br> IFSP Caraguatatuba</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/profile.php?id=100009376758458"><i class="fab fa-facebook-f"></i></a> 
    <a target="_blank" href="https://www.instagram.com/predo.pqp/"><i class="fab fa-instagram"></i></a>  
  </div>
</div>
<div class="cardsons">
  <img src="img/us/juliano.jpg" alt="John" style="width:100%">
  <h1>Juliano Paulo</h1>
  <p class="title">Marcação e estilo</p>
  <p>15 anos <br> IFSP Caraguatatuba</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/juliano.paulodealmeida"><i class="fab fa-facebook-f"></i></a> 
    <a target="_blank" href="https://www.instagram.com/juliyear/"><i class="fab fa-instagram"></i></a>  
  </div>
</div>
<div class="cardsons">
  <img src="img/us/yuri.jpg" alt="John" style="width:100%">
  <h1>Yuri Santos</h1>
  <p class="title">Desenvolvedor back-end</p>
  <p>17 anos <br> IFSP Caraguatatuba</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/yuri.santos.1420"><i class="fab fa-facebook-f"></i></a> 
    <a target="_blank" href="https://www.instagram.com/_yuri_svs_/"><i class="fab fa-instagram"></i></a>  
  </div>
</div>
<div class="cardsons">
  <img src="img/us/daniele.jpg" alt="John" style="width:100%">
  <h1>Danielle Dantas</h1>
  <p class="title">Gerente de marketing</p>
  <p>17 anos <br> IFSP Caraguatatuba</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/danielle.dantasdionizio"><i class="fab fa-facebook-f"></i></a> 
    <a target="_blank" href="https://www.instagram.com/nani.dantas/"><i class="fab fa-instagram"></i></a>  
  </div>
</div>


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
        if (slideIndex > slides.length) {slideIndex = 1} 
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