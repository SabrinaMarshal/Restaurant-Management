<!DOCTYPE html>
<html>
<title>HOMEPAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
.ribbon {
 font-size: 16px !important;
 /* This ribbon is based on a 16px font side and a 24px vertical rhythm. I've used em's to position each element for scalability. If you want to use a different font size you may have to play with the position of the ribbon elements */

 width: 50%;
    
 position: relative;
 background: #ba89b6;
 color: #000000;
 text-align: center;
 padding: 1em 2em; /* Adjust to suit */
 margin: 2em auto 3em; /* Based on 24px vertical rhythm. 48px bottom margin - normally 24 but the ribbon 'graphics' take up 24px themselves so we double it. */
}
.ribbon:before, .ribbon:after {
 content: "";
 position: absolute;
 display: block;
 bottom: -1em;
 border: 1.5em solid #986794;
 z-index: -1;
}
.ribbon:before {
 left: -2em;
 border-right-width: 1.5em;
 border-left-color: transparent;
}
.ribbon:after {
 right: -2em;
 border-left-width: 1.5em;
 border-right-color: transparent;
}
.ribbon .ribbon-content:before, .ribbon .ribbon-content:after {
 content: "";
 position: absolute;
 display: block;
 border-style: solid;
 border-color: #804f7c transparent transparent transparent;
 bottom: -1em;
}
.ribbon .ribbon-content:before {
 left: 0;
 border-width: 1em 0 0 1em;
}
.ribbon .ribbon-content:after {
 right: 0;
 border-width: 1em 1em 0 0;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
body  {
   background-image: url("chinesepic.jpg");
   background-color: #cccccc
   background-repeat: no-repeat;
   background-size: 1500px 660px;
}
h1 {
    font-size: 30px;
    text-align: center;
    color: black;
}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close</a>
<img src="woklogo.png" style="width:50%">
<div class="w3-dropdown-hover">
    <button class="w3-button">Food
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="food.php" class="w3-bar-item w3-button">Menu</a>
      <a href="special_dish.php" class="w3-bar-item w3-button">Special Dishes</a>
    </div>
  </div> 
 <a href="listoftab.php" onclick="w3_close()" class="w3-bar-item w3-button">Manage Restaurant Tables</a>
<div class="w3-dropdown-hover">
    <button class="w3-button">Contact
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Phone No:9817599022/01292273028</a>
      <a href="#" class="w3-bar-item w3-button">Email Id:wok_in_india7513@gmail.com</a>
    </div>
  </div> 
<a href="form.php" onclick="w3_close()" class="w3-bar-item w3-button">Logout</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
</div>
<h1 class="ribbon">
   <strong class="ribbon-content">WELCOME TO WOK IN INDIA</strong>
</h1>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br>
<h1> ENJOY THE AUTHENTIC CHINESE FOOD WITH US!!!</h1>

</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>