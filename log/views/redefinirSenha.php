<?php \Classes\ClassLayout::setHead('Strix','Redefinição de Senha.','Strix');
use Models\classCrud;
?>
<?php
	if (isset($_SESSION['login'])) {
		\Classes\ClassLayout::setBarlog();
	}else{
		\Classes\ClassLayout::setBar();
	}
?>


<div class="login center auto">
	<h1>Redefinição de Senha</h1>

	<div class="retornoSen">
		
	</div>

	<form name="formRedSenha" id="formRedSenha" action="<?php echo DIRPAGE.'controllers/controllerConfirmacaoSenha'; ?>" method="POST">

		<input class="w80 input" type="email" id="email" name="email" value="<?php echo \Traits\TraitParseUrl::parseUrl(1); ?>" required>
        
        <input class="w80 input" type="text" id="token" name="token" value="<?php echo \Traits\TraitParseUrl::parseUrl(2); ?>" required>

        <input class="w80 input" type="password" name="senha" id="senha" onkeypress="getElementById('balao').style.display='block'" placeholder="Senha:" required>        

        <div id="balao" class="balao">
        	<span class="clos" onclick="getElementById('balao').style.display='none'">&times;</span>

        	<p>A senha deve conter no mínimo 8 caracteres, sendo pelo menos uma letra maiúscula, um caractere especial e um número.</p>
        	<br>
        	<p class="ssmallp">(ex: #Strix123)</p>
        </div>    

        <input class="w80 input" type="password" name="senhaConf" id="senhaConf" placeholder="Confirmar Senha:" required>            

        <input class="w20-80 input submit" type="submit" value="Cadastrar Nova Senha">
    </form>

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

<?php //\Classes\ClassLayout::Footer(); ?>
<?php \Classes\ClassLayout::setFooter(); ?>