<?php include('loanlinks.php'); ?>
<style type="text/css">
	body{
		overflow-x: hidden;
		overflow-y: hidden;
	}
	/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: white;
  width: 322px;
  /*padding-top: 10px;*/
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  color: white;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  width: 322px;
  color: white;
}

/* Change background color of buttons on hover */
/*.tab button:hover {
  background-color: #ddd;
}*/

/* Create an active/current tablink class */
.tab button.active {
  background-color: white;
  color: black;
}

/* Style the tab content */
.tabcontent {
  /*display: none;*/
  padding: 6px 12px;
  border: 1px solid #ccc;
  width: 322px !important;
  border-radius: 10px;
}
.navbar a{
	color: black;
}
a:hover{
	text-decoration: none;
}

</style>
<?php $name=$_GET['name']; ?>


	<div class="navbar-brand" style="font-weight: bolder;">Appname</div><div class="navbar" style="float: right;">
		<a href="Dashboard.php?name=<?php echo $name; ?>">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="">Statement</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href=""><?php echo $name; ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	</div>
</nav>
<div style="height: 190px; background-color: white;">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8"><div class="row"><div class="col-sm-6">
	<div align="left" style="padding-bottom: 0px; padding-top: 5px; padding-bottom: 70px;"><h1><b>Activity</b></h1>
	</div></div><div class="col-sm-6" align="right" style="padding-top: 15px;"><div class="btn" style="height: 60px; width: 200px; border: 1px solid lightblue; padding-top: 15px;"><a href="#"> <b>Statements</b></a></div></div></div>


<!-- Tab content -->
<div id="London" class="tabcontent">
  <h6>savings balance<i></i></h6>
  <h4 style="font-weight: bolder;">$0.00</h4>
  <span>2019 contributions</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-align: right;">$0 of $7000</span><hr>
</div>




</div>

<div class="col-sm-2"></div>
</div>
</div>
<div class="row fixed-bottom">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"><b>Do everything from this App.</b><br>
		<div>It's all in there! Check your balance, track activities, make<br> payment and so much more.</div>

	</div>
	<div class="col-sm-2"></div>

</div>


<script type="text/javascript">
	
</script>