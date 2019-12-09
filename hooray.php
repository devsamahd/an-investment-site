<?php include('loanlinks.php'); ?>

<style>
  form{
    background:transparent;
    padding-top: 200px;
    height: 400px;
    
  body{
     background-color: white;
         
  }
</style>


<div class="row">
  <div class="col-sm-2">
    <?php $name=$_GET['name']; ?>
 
  </div>
  <div class="col-sm-8">
<form method="post">

    <div align="center" style="font-size: 25px; padding-bottom: 20px;"><b><i class="fa fa-facebook"></i><br>Hooray!</b></div>
<div align="center">Based on your answers you qualify to invest in one of our <br> banks</div>
  


</form>
<form method="post" style="padding-top: 50px;">
	<div align="center" ><input type="submit" value="Continue" name="continue" class="btn btn-primary" style="height: 50px; width: 150px;"></div>
</form>
</div>
<div class="col-sm-2"></div>
</div>
<?php
if (isset($_POST['continue'])) {
   echo "<script type='text/javascript'>window.top.location='dashboard.php?name=$name';</script>";
  
}

?>