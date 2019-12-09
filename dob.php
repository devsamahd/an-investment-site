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
  <h5 align="left" style="padding-top: 300px;" class="container"><i class="fa fa-angle-left" aria-hidden="true"></i><a href="more.php?name=<?php echo $name;?>" style="color: black; text-decoration: none;">Back</a></h5> 
  </div>
	<div class="col-sm-6">
<form method="post">
  <div align="center"><h1>What's your date of birth?</h1>
    Tvds vdv efrab fdb gfdb fgdbg bngng bnfbtgbn fgbfvbt bfdbegtb fbfdb<br>DGBFDGF fbF rbr brfbr 
  </div>

<div align="center"><input type="number" name="phone" class="form-control" placeholder="DD-MM-YY" style="width: 50%; height: 50px; background-color: #f7f0f0;" required></div><br>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-primary" style="width: 140px; height: 50px; font-weight: bolder;"></div><br>

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
 	
 
$connect=mysqli_connect('localhost','root','','invest');
$number=$_POST['phone'];
$a="update user set dob='$number'";
$b=mysqli_query($connect, $a);
if ($b) {

   echo "<script>window.top.location='gender.php?name=$name';</script>";
	
}
}
?>

 <script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 85) {
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