//SCRIPT SLIDER INICIO
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

/*
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

</script>*/