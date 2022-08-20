<?php


?>

<!-- 
<div class="sideNav">

    <div class="links1">
        <a href="forms/new_drug.php">ADD DRUG </a>
    </div>
    <div class="links2">
        <a href="forms/new_classification.php"> ADD CLASSIFICATION</a> 
    </div> 
    <div class="links1">
        <a href="forms/new_branch.php">   ADD BRANCH</a>
    </div>
    <div class="links2">
        <a href="forms/new_employee.php"> ADD EMPLOYEE </a>
    </div>
    <div class="links1">      
        <a href="forms/new_supplier.php">  ADD SUPPLIER </a>
    </div>
    <div class="links2">
        <a href="forms/new_patient.php"> ADD PATIENT </a> 
    </div>
    <div class="links1">
        <a href="forms/edit.php">EDIT </a>
    </div> 
</div>
<div class="sideNav">

    <div class="links1">
        <a href="forms/new_drug.php">SALES </a>
    </div>
    <div class="links2">
        <a href="forms/new_classification.php"> PURCHASES</a> 
    </div> 
    <div class="links1">      
        <a href="forms/new_supplier.php">  PATIENT MGMT </a>
    </div>
    <div class="links1">
        <a href="forms/new_branch.php"> EMPLOYEE MGMT </a>
    </div>
    <div class="links2">
        <a href="forms/new_patient.php"> STOCK MGMT </a> 
    </div>
    <div class="links2">
        <a href="forms/new_employee.php"> MY ACCOUNT </a>
    </div>
    <div class="links1">
        <a href="forms/edit.php">EDIT </a>
    </div> 
</div>   -->


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css.loggedin.css">
  <script>
      /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
      function openNav() {
      document.getElementById("mySidebar").style.width = "200px";
      document.getElementById("main").style.marginLeft = "250px";
      }

      /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
      function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      }

    /* When the user clicks on the button,

    toggle between hiding and showing the dropdown content */
    function myFunction1() {
      document.getElementById("myDropdown1").classList.toggle("show");
    }
    function myFunction2() {
      document.getElementById("myDropdown2").classList.toggle("show");
    }
    function myFunction3() {
      document.getElementById("myDropdown3").classList.toggle("show");
    }
    function myFunction4() {
      document.getElementById("myDropdown4").classList.toggle("show");
    }
    function myFunction5() {
      document.getElementById("myDropdown5").classList.toggle("show");
    }
    function myFunction6() {
      document.getElementById("myDropdown6").classList.toggle("show");
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
  <link rel="stylesheet" href="../nav/nav.side.css">

  
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/../index.loggedin.php">HOME</a>
  <a href="#">SALES</a>
  <a href="#">PURCHASES</a>

  <div class="dropdown"> 
    <a onclick="myFunction2()" class="dropbtn">STOCK MGMT</a>
    <div id="myDropdown2" class="dropdown-content">
      <a href="forms/new_item.php">New Item</a>
      <a href="#">Edit Item</a>
      <a href="#">Stock Levels</a>
    </div>
  </div>

  <div class="dropdown"> 
    <a onclick="myFunction1()" class="dropbtn">PATIENT MGMT</a>
    <div id="myDropdown1" class="dropdown-content">
      <a href="patients/index.php">Patient File</a>
      <a href="../forms/new_patient.php">New Patient</a>
      <!-- <a href="#">Link 3</a> -->
    </div>
  </div>

  
  <div class="dropdown"> 
    <a onclick="myFunction3()" class="dropbtn"> MY ACCOUNT</a>
    <div id="myDropdown3" class="dropdown-content">
      <a href="#">Profile</a>
      <a href="#">Settings</a>
      <a href="#">Logout</a>
    </div>
  </div>
  <div class="dropdown"> 
    <a onclick="myFunction4()" class="dropbtn"> EMPLOYEE MGMT</a>
    <div id="myDropdown4" class="dropdown-content">
      <a href="../forms/new_employee.php">New Employee</a>
      <a href="#">Edit</a>
      <a href="../forms/new_branch.php">New Branch</a>
    </div>
  </div>
  <div class="dropdown"> 
    <a onclick="myFunction5()" class="dropbtn">ADV STOCK MGMT</a>
    <div id="myDropdown5" class="dropdown-content">
      <a href="../forms/new_supplier.php">New Supplier</a>
      <a href="#">Edit</a>
      <!-- <a href="#">Logout</a> -->
    </div>
  <div class="dropdown"> 
    <a onclick="myFunction6()" class="dropbtn">REPORTS</a>
    <div id="myDropdown6" class="dropdown-content">
      <a href="#">Sales </a>
      <a href="#">Purchase </a>
      <a href="#">Employee </a>
      <a href="#">Stock </a>
      <a href="#">Branch </a>
    </div>
  </div>
  </div>
</div>

<div id="main">
<button class="openbtn" onclick="openNav()">&#9776;</button>


