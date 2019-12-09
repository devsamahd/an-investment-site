<?php include("loanlinks.php"); ?>


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
    <?php $name=$_GET['name']; ?>
  <h5 align="left" style="padding-top: 300px;" class="container"><i class="fa fa-angle-left" aria-hidden="true"></i><a href="dob.php?name=<?php echo $name; ?>" style="color: black; text-decoration: none;">Back</a></h5>
  </div>
  <div class="col-sm-8">
<form method="post">
    <div align="center" style="font-size: 25px; padding-bottom: 20px;"><b>What's your gender?</b></div>
  <div style="padding-bottom: 40px;" class="form-row" align="center">
    <div class="col-md-4"><span style="width: 150px; height: 60px; border: 1px solid lightgray; background-color: white; padding-top: 15px;" class="btn" value="Female" id="s1">Female</span></div>
    <div class="col-md-4"><span style="width: 150px; height: 60px; border: 1px solid lightgray; background-color: white; padding-top: 15px;" class="btn" value="Female" id="s2">Male</span></div>
    <div class="col-md-4" id="s3"><span style="width: 150px; height: 60px; border: 1px solid lightgray; background-color: white; padding-top: 15px;" class="btn" value="Female" id="s3">Other</span></div>

    </div>
 <br>

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

if (isset($_POST['s1'])) {
  


}

?>
</div>
<script >

  

var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 93) {
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
 

 $('#s1').click(function(){
  window.top.location='income.php?name=<?php echo $name; ?>';
});

$('#s2').click(function(){
  window.top.location='income.php?name=<?php echo $name; ?>';
});
$('#s3').click(function(){
  window.top.location='income.php?name=<?php echo $name; ?>';
});


</script>