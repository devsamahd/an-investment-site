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
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
<form method="post">

    <div align="center" style="font-size: 25px; padding-bottom: 20px;"><b><i class="fa fa-facebook"></i><br>Bummer!</b></div>
<div align="center">you bmfd fgdsnvg gnsfgg jgn yhg  jyng' hjkn hn'k <br> hnk mhjn'hkhj y'j kjgngn yjn'ygn yhn' hnm ghn' nm</div>
  


</form>
<form method="post" style="padding-top: 50px;">
	<div align="center" ><input type="submit" value="Start Over" name="starto" class="btn btn-primary" style="height: 50px; width: 150px;"></div>
</form>
</div>
<div class="col-sm-2"></div>
</div>

<?php

if (isset($_POST['starto'])) {
   echo "<script type='text/javascript'>window.top.location='sendmail.php?name=$firstname';</script>";
	
}

?>