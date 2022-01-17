<?php 
session_start();
?>
<html>
<head>

<style type="text/css">


div {
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 20px;

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
	top:32%;
	left:40%;
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
$n=$_SESSION['rows'];
$s=$_SESSION['change'];
$column_name=$_SESSION['cname'];
$column_type=$_SESSION['ctype'];
?>

<div>
 <h2>   UPDATING DATA INTO TABLE </h2>
</div>
<P class=box>
 <br>RETURN TO:<br><br>
<a href="listoftab.php" class=button2>Main Page</a>
<a href="operations.php" class=button2>Edit Details</a><br>
</P>
<h3>
<?php

function handleError($errno,$errstr){
echo "Invalid input";
?>


<?php
die();
}
set_error_handler("handleError");
if(isset($_POST['go']))
{
$str="Update $t set ";
$v=$_POST['cond'];
$j=0;
for($i= 0; $i < $n; $i++) {
if($column_name[$i]!=$s){
$c=$_POST['temp'][$j];
$j++;
if($c!=""){
if($column_type[$i]=='VARCHAR2')
$str=$str."$column_name[$i]='$c',";
else $str=$str."$column_name[$i]=$c,";
}
}
else 
$st=$column_type[$i];
}
$str=substr($str,0,-1);
if($st=='VARCHAR2')
$str=$str." where $s='$v'";
else $str=$str." where $s=$v";
$objParse = oci_parse($conn, $str);  
oci_execute ($objParse);
echo "Data updated";
}
?>
</h3>
<P>

</body>
</html>