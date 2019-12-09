<?php include("loanlinks.php"); ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 10px;
  background-color: royalblue;
  border-radius: 10px;
  padding-bottom: 10px;
}
#text{
	text-align: center;
	font-size: 30px;
	padding-top: 200px;
}
.far{
	font-size: 100px !important;
	color: blue;
}

</style>
<body>

<div id="text" align='center'>
	You're almost there kindly visit your email to confirm registration
	<br><i class="far fa-smile-wink"></i>
</div>



<div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;	color: lightgray" align="center">
  	<a href="#">Help</a>
  	|
  	<a href="#">Terms</a>
  	|
  	<a href="#">Policy</a>

  </div>
</div>
</div>

<br>


<script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 75;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 95) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

move();
</script>




