<?php include("loanlinks.php"); ?>

<nav class="container navbar" style="font-size: 20px;">

  <span>Appname</span><span>
  <font style=" text-align: center;"><i class="fa fa-angle-down" aria-hidden="true"></i></font></span>

  
</nav>

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
</style>
<div class="row" style="padding-top: 100px;">
	<div class="col-sm-3">
   <?php $name=$_GET['name']; ?>
  <h5 align="left" style="padding-top: 300px;" class="container"><i class="fa fa-angle-left" aria-hidden="true"></i><a href="plan.php?name=<?php echo $name; ?>" style="color: black; text-decoration: none;">Back</a></h5> 
  </div>
	<div class="col-sm-6" align="center">
    <h1>When do you think you'll need the money you invest?</h1><br><br>
<form method="post" align='center'>
<div><div class="btn" style="width: 50%; height: 50px; background-color: white; border: 1px solid lightgray; text-align: left" id="pl">6months</div>
<div class="btn" style="width: 50%; height: 50px; background-color: white; border: 1px solid lightgray; text-align: left" id="pl2">1year</div>
<div class="btn" style="width: 50%; height: 50px; background-color: white; border: 1px solid lightgray; text-align: left" id="pl3">2years</div>

</div><br>
  

</form>
</div>
<div class="col-sm-3"></div>
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

 <?php
 if (isset($_POST['continue'])) {
 	
 

	$firstname=$_GET['name'];
   echo "<script type='text/javascript'>window.top.location='dob.php?name=$firstname';</script>";
	

}
?>

 <script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 95;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 100) {
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

$('.row').fadeIn();

$('#pl').click(function(){
  window.top.location='hooray.php?name=<?php echo $name; ?>';
});

$('#pl2').click(function(){
  window.top.location='hooray.php?name=<?php echo $name; ?>';
});

$('#pl3').click(function(){
  window.top.location='hooray.php?name=<?php echo $name; ?>';
});
</script>