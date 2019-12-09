<?php include('loanlinks.php'); ?>
<style type="text/css">

  #specialnav{
    background-color: white;
    border-radius: 4px;
    height: 50px;
    width: 200px;
    color: black;
    text-align: center;
    padding-top: 10px;
  }
  nav{
    height: 100px;
    
    background-color: black;
    color: white;
  }
	nav a{
    color: white;
    text-decoration: none;
    font-weight: bold;
  }
  .navbar-brand{
    font-weight: bolder;
  }
  a:hover{
    text-decoration: none;
  }
.container {
  display: inline-block;
  cursor: pointer;
  visibility: hidden;
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: #333;
  margin: 6px 0;
  transition: 0.4s;

}

nav{
    visibility: hidden;
  }
  .bar1:hover{
    color: lightgray;
  }

@media screen and (min-width: 800px){
	
  #opener{
    visibility: hidden;
  }
  nav{
    visibility: visible;
  }

}

/* The Overlay (background) */
.overlay {
  /* Height & width depends on how you want to reveal the overlay (see JS below) */    
  height: 100%;
  width: 0;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  background-color: rgb(0,0,0); /* Black fallback color */
  background-color: white; /* Black w/opacity */
  overflow-x: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
  position: relative;
  top: 25%; /* 25% from the top */
  width: 100%; /* 100% width */
  text-align: center; /* Centered text/links */
  margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
}

/* The navigation links inside the overlay */
.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block; /* Display block instead of inline */
  transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}


</style>
<nav class="fixed-top">
  <div class="row" >
    <div class="col-md-6" style="padding-top: 10px;"><div class="navbar-brand"><b>Name</b></div></div>
    <div class="col-md-6 navbar" style="padding-right: 50px; padding-bottom: 100px;" >
      <a href="#">Home</a>
      <a href="#">Loan</a>
      <a href="#">Invest</a>
      <a href="#" id="specialnav">Get started</a>
      <a href="#">Login</a>
    </div>
  </div>
</nav>

<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
      <a href="#">Home</a>
      <a href="#">Loan</a>
      <a href="#">Invest</a>
      <a href="#">Get started</a>
      <a href="#">Login</a>
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->
<div onclick="openNav()" id="opener" align='Center' class="fixed-top">
 
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>

</div>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}


/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
