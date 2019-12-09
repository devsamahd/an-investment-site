<?php include("loanlinks.php"); include('database.php'); ?>
<div id="section3">

<?php 
session_start();
$name=$_GET['name'];

 ?>
<div style="text-align: center; padding-top: 200px;">Nice to meet you, <?php echo $name; ?></div><br>
<div align="center"><font><i class="fa fa-smile-o" style="color: blue; font-size: 100px;"></i></font></div>
</div>

<div id="section4">

<style type="text/css">
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
  .row{
    padding-top: 10%;

  }
  form{
    background:transparent;
    padding-top: 50px;
    height: 400px;

  }
  body{
     background-color: white;
         font-size: 50px;
  }
  .form-control{
    width: 50% !important;
    height: 60px;
    border:1px solid white !important;
    background-color: #f7f0f0;

  }

</style>
<div class="row">
  <div class="col-sm-2">
  <h5 align="left" style="padding-top: 300px;" class="container"><i class="fa fa-angle-left" aria-hidden="true"></i><a href="welcome.php?name=<?php echo $name; ?>" style="color: black; text-decoration: none;">Back</a></h5>
    
  </div>
  <div class="col-sm-8">
<form method="post">
    <div align="center" style="font-size: 25px; padding-bottom: 20px;"><b>create an account</b></div>
  <div style="padding-bottom: 40px;">
    <div align="center"><input type="email" name="email" class="form-control" placeholder="email" id="name" required></div>

    <div align="center"><input type="password" name="password" class="form-control" placeholder="password" required></div>
   
  </div>
  <div align="center"><input type="submit" name="create" value="Create account" class="btn btn-primary" style="width: 140px; height: 50px; font-weight: bolder;"></div><br>

  </div>

</form>
</div>
<div class="col-sm-2"></div>
</div>
<div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;  color: lightgray; font-size: 15px;" align="center">
    <a href="#">Help</a>
    |
    <a href="#">Terms</a>
    |
    <a href="#">Policy</a>

  </div>
</div>
<?php

if (isset($_POST['create'])) {
 
  
  $email=$_POST['email'];
  $password=sha1($_POST['password']);
  $phone="";
  $token=sha1($email).$phone;

  $a="select * from user where email='$email'";
  $b=mysqli_query($connect,$a);
  if ($b->num_rows) {
      echo "email has been taken";
    }

    else{
    $o="update user set token='$token', email='$email', password='$password', phone='$phone'";
    $p=mysqli_query($connect, $o);
    if ($p) {
      header("location:addnumber.php?name=$name");
    }

  }


}

?>
</div>
<script >
$('#section4').hide();
  function change(){

     $('#section3').fadeOut();

  }
setInterval(change, 3000);

function change2(){
     $('#section4').fadeIn();

  }
setInterval(change2, 4000);


var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 20) {
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