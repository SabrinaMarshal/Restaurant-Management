<?php 
session_start();
?>
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

label {
  width:100%;
  padding: 0px 12px 12px 0;
  display: inline-block;
}
h2{
  font-family: Lucida Console;
  font-size: 20px;
  text-align: center;
  background-color:#4682B4;
  padding: 30px;
  border-radius: 4px;
}
.box{
    width:300px;
	text-allign:center;
	position:absolute;
	top:50%;
	left:40%;
}
.box1{
    width:300px;
	text-allign:center;
	position:absolute;
	top:25%;
	left:43%;
}

h3{
    color:red;
	text-align:center;
	
}
p{
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
$t=$_SESSION['tab'];
$result=oci_parse($conn,"select * from ".$t);
oci_execute($result); 
$n=oci_num_fields($result);
$_SESSION['rows']=$n;
for ($i = 1; $i <= $n; $i++){
       $column_name[$i-1]  = oci_field_name($result, $i);
       $column_type[$i-1] = oci_field_type($result,$i);
}
?>
<div>
  <h2>   UPDATING DATA INTO TABLE </h2>
<form  class=box1 method="post" >
<b> Choose search condition:</b><br>
<?php for ($i = 0; $i < $n; $i++) {
      echo $column_name[$i];?><input type="radio" name="check" 
      value="<?php echo $column_name[$i];?>"><br>
      <?php 
}?>   
<input type="submit" name="submit" value="Submit"><br>
<br>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
$s=$_POST['check'];
$_SESSION['change']=$s;

?>
<br>
<form class=box method="post" action="update2.php">

<b>Enter search condition:</b><br>
<?php  
echo "Enter ".$s;?><input type="text" name="cond"><br>
<b>Enter data to be changed:</b><br>
<?php for ($i = 0; $i < $n; $i++) {
    if($column_name[$i]!=$s){
      echo $column_name[$i];?><input type="text" name="temp[]" >
      <?php 
} }
$_SESSION['cname']=$column_name;
$_SESSION['ctype']=$column_type;
?> 
<input type="submit" name="go" value="Submit">
</form>
<?php } ?>


