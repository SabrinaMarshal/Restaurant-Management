<!DOCTYPE html>
<html>
<title>LIST OF TAB PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
.w3-bar-block .w3-bar-item {padding:20px}
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
   background-color: white;
  color: black;
  border: 2px solid #555555;
}
.button:hover {
  background-color: #555555;
  color: white;
}
p {
  font-family: verdana;
  font-size: 20px;
  text-align: center;
}
body  {
  background-color:lightblue;
  opacity:0.9;
}

  
   table {
  border-collapse: collapse;
  width: 100%;
  margin-left:auto; 
   margin-right:auto;

}
th {
	background-color: #4682B4;
 
 
}
th, td {
  text-align: left;
  padding: 8px;
  font-size: 100%;
}
}

h1{
	text-align:center;
	 font-family: Lucida Console;
      font-size: 25px;
	  background-color:#f2f2f2;
      padding: 30px;
     border-radius: 4px;
	 
}
</style>


<body>
<div class="sidenav">
  <a href="homepage.php">Return to Homepage</a>
  <div class="w3-dropdown-hover">
    <a href="#Food">Food</a>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="food.php" class="w3-bar-item w3-button">Menu</a>
      <a href="special_dish.php" class="w3-bar-item w3-button">Special Dishes</a>
    </div>
  </div> 
<div class="w3-dropdown-hover">
    <a href="Contact">Contact</a>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Phone No:9817599022/01292273028</a>
      <a href="#" class="w3-bar-item w3-button">Email Id:wok_in_india7513@gmail.com</a>
    </div>
  </div> 
 <a href="form.php">Logout</a>
</div>

<div class="main">

<h1>Restaurant Management Tables</h1><br>
<table align="center" >
<p>
<tr><td><img style="vertical-align:middle" src="dishes_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Dishes" class=button>Menu</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle" src="cost_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Cost" class=button>Cost</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="customer_pic.webp" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Customer" class=button>Customers</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="order_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Orders" class=button>Customers Orders</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="delivery_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Delivery" class=button>Delivery</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="phonedelivery_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Cphone" class=button>Customer Phone Numbers</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="caddr_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Caddr" class=button>Customer Address</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="deliveryfood_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Delivery_Orders" class=button>Delivery Orders</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="bill_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=bill" class=button> Bill</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="billdelivery_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=bill_date" class=button> Bill Date</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="paycustomer_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=customer_pays_1" class=button>Customer Totals</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="paydelivery_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=delivery_pays_2" class=button>Delivery Totals</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="staff_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Staff" class=button>Staff</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="designation_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=desig" class=button>Designation</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="serve_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=serves" class=button>Staff Service</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="stock_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Stock" class=button>Stock</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="amount_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Amount" class=button>Cost of Stock</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="prepare_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Prepare" class=button>Ingredients</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="supplier_pic.png" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=Supplier" class=button>Suppliers</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="phonecustomer_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=SPhone" class=button>Supplier Phone Number</a></img><br><br></td></tr>
<tr><td><img style="vertical-align:middle"src="address_pic.jpg" width="60" height="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php?a=SAddr" class=button>Supplier Address</a></img><br><br></td></tr>
</p>
</table>
</div>
</body>
</html>
