<?php include('loanlinks.php'); ?>
<style type="text/css">
	body{
		overflow-x: hidden;
		overflow-y: hidden;
	}
	/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid white;
  background-color: black;
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
  width: 160px;
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
  display: none;
  padding: 6px 12px;
  border: 1px solid white;
  border-top: none;
  width: 322px !important;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  box-shadow: 1px 8px 6px 0px #ece9e9;
  height: 160px;
  padding-left: 30px;
  padding-right: 30px;
}
.navbar a{
	color: black;
}
a:hover{
	text-decoration: none;
}
/* Dropdown Button */
.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: white;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
<?php $name=$_GET['name']; ?>


	<div class="navbar-brand" style="font-weight: bolder;">Appname</div><div class="navbar" style="float: right;">
		<a href="activity.php?name=<?php echo $name; ?>">Activity</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="">Statement</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href=""><?php echo $name; ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	</div>
</nav>
<div style="height: 190px; background-color: #f5f4f4;">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	<div align="center" style="padding-bottom: 0px; padding-top: 15px;">Your available balance</div>
	<div style="font-size: 70px; color: #881788; text-align: center; padding: 0px; font-family: Times new roman;"><b>$0.00</b></div>
	<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"><b>Activity</b></button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><b>Sell</b></button>
  
</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
  <h6>savings balance
    <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-caret-square-o-down"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
  </h6>
  <h4 style="font-weight: bolder;">$0.00</h4>
  <span>2019 contributions</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-align: right;">$0 of $7000</span><hr>
</div>

<div id="Paris" class="tabcontent">
  <h3>Nothing</h3>
  <p>to show</p> 
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
	function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>