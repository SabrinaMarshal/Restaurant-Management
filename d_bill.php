<html>
<head>
<style type="text/css">
input[type=text], select {
  width: 100%;
  padding:12px 12px 12px 0;
  margin-left:  8px 8px;
  display:inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  
  background-color:#4682B4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: auto;
}

input[type=submit]:hover {
  background-color:#6495ED;
}


div {
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 20px;

}
h2{
  font-family: Lucida Console;
  font-size: 25px;
  text-align: center;
  background-color:#4682B4;
  padding: 30px;
  border-radius: 4px;
}
.box{
	font-size: 20px;
    width:300px;
	text-allign:center;
	position:absolute;
	top:34%;
	left:40%;
}
p{
	text-align:center;
	font-size: 15px;
}
h3{
    color:red;
	text-align:center;
	
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
  border-radius: 4px;
   padding: 1px 1px;
  margin: 8px 0;
}
.button2:hover {
  background-color:#6495ED;;
  color: white;
}
</style>
</head>
<body>
<?php
$conn=oci_connect("","","localhost/orcl");
?>
<div>
<h2> TOTAL SALES</h2>
</div>
<form class=box method="post">
Enter date:<input type="text" name="date">
<input type="submit" name="go" value="Submit">
<p>
<br>RETURN TO:<br><br>
<a href="listoftab.php"class=button2>Main page</a>
<a href="operations.php"class=button2>Edit details</a><br>
</p>
</form>

<h3>
<?php
if(isset($_POST['go']))
{
function handleError($errno,$errstr){
echo "Invalid Input";
?>
</h3>
<?php
die();
}
set_error_handler("handleError");
$d=$_POST['date'];
$str="select delivery_bill_date,sum(delivery_dish_price) from bill_delivery where delivery_bill_date='$d' group by delivery_bill_date";
$result=oci_parse($conn,$str);
oci_execute($result);
$rows=oci_fetch_assoc($result);
echo "Total sales of ".$d." is ".$rows['SUM(DELIVERY_DISH_PRICE)'];
}
?>

</body>
</html>