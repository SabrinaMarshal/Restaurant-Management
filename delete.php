<?php 
session_start();
?>


<html>
<head>
<style type="text/css">
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin-left:  8px 8px;
  display:block;
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
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}

label {
  width:100%;
  padding: 12px 12px 12px 0;
  display: block;
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
	top:30%;
	left:40%;
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
p{
	text-align:center;
	
}
</style>
</head>
<body>
<?php
$t=$_SESSION['tab'];
$conn=oci_connect("","","localhost/orcl");
$result=oci_parse($conn,"select * from ".$t);
oci_execute($result); 
$n=oci_num_fields($result);
for ($i = 1; $i <= $n; $i++){
       $column_name[$i-1]  = oci_field_name($result, $i);
       $column_type[$i-1] = oci_field_type($result,$i);
}
?>
<div>
<h2> DELETING DATA FROM TABLE </h2>
<form class=box method="post" >
 <b> Choose search condition:  </b>  <br><br>
<?php for ($i = 0; $i < $n; $i++) {
      echo $column_name[$i];?><input type="radio" name="check" 
      value="<?php echo $column_name[$i];?>"> <br>
      <?php 
}?><br>
Enter value:
  <input type="text" name="val">
<input type="submit" name="submit" value="Submit">
<br>
<br>
<p>
<br>RETURN TO:<br><br>
<a href="listoftab.php" class=button2>Main page</a>
<a href="operations.php" class=button2>Edit details</a><br>
</p>

</form>
</div>
<h3>
<?php
function handleError($errno,$errstr){
echo "Invalid Input";
?>
</h3>


<?php
die();
}

set_error_handler("handleError");
$result=oci_parse($conn,"select * from ".$t);
oci_execute($result); 
$n=oci_num_fields($result);
for ($i = 1; $i <= $n; $i++){
       $column_name[$i-1]  = oci_field_name($result, $i);
       $column_type[$i-1] = oci_field_type($result,$i);
}
?>
<?php
if(isset($_POST['submit']))
{
$c=$_POST['check'];
$v=$_POST['val'];
for ($i = 0; $i < $n; $i++){
       if($c==$column_name[$i]) $type=$column_type[$i];
}
if($type=='VARCHAR2'){
$delete=oci_parse($conn,"delete from ".$t." where ".$c." = '".$v."'");}
else{
$delete=oci_parse($conn,"delete from ".$t." where ".$c." = ".$v);}
oci_execute($delete);
echo "Record deleted";
}
?>

</body>
</html>
