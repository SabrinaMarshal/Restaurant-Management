<?php
session_start();
?>
<html>
<head>
<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
  margin-left:auto; 
   margin-right:auto;

}

th, td {
  text-align: left;
  padding: 8px;
  font-size: 100%;
  
  
}

tr:nth-child(even){background-color: #f2f2f2}

th {
	
  background-color: #4682B4;
  color: white;
 
}
.button {
  background-color:#4682B4; 
  border: none;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  color: white;
  border-radius: 4px;
  border: 2px solid #555555;
}
.button:hover {
  background-color: #6495ED;
  color: white;
}
p {
  font-family: Lucida Console;
  font-size: 20px;
  text-align: center;
}
h2{
  font-family: Lucida Console;
  font-size: 20px;
  color:white;
  text-align: center;
  background-color:#4682B4;
  padding: 30px;
  border-radius: 4px;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}

</style>
</head>
<body> 
<?php 
$conn=oci_connect("","","localhost/orcl");
$_SESSION['tab']=$_GET['a'];
$t=$_SESSION['tab'];
$result=oci_parse($conn,"select * from ".$t);
oci_execute($result);
$n=oci_num_fields($result);
?>
<div>
<h2> DISPLAYING CONTENTS </h2>
</div>
<table style="width:600px" >
<tr>
<?php for ($i = 1; $i <= $n; $i++) {
    $column_name[$i]  = oci_field_name($result, $i);?>
    <th><?php echo   $column_name[$i]; ?> </th>
  <?php } ?>
   </tr> 
<?php

while($rows=oci_fetch_assoc($result))
{ ?>
 <tr>
<?php for($i = 1; $i <= $n; $i++){
  ?>
  <td><?php echo $rows[$column_name[$i]];?></td>
<?php } ?>
  </tr>
<?php }?>
</table>

<p>
<a href="operations.php" class=button>EDIT DETAILS</a><br>
</p>
</body>
</html>


