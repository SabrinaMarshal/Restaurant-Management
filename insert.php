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
	top:30%;
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
$result=oci_parse($conn,"select * from ".$t);
oci_execute($result);
$pkey=oci_parse($conn,"SELECT column_name FROM all_cons_columns WHERE constraint_name = (SELECT constraint_name FROM all_constraints WHERE UPPER(table_name) = UPPER('".$t."') AND CONSTRAINT_TYPE = 'P')");
oci_execute($pkey);
$j=0;
while($r=oci_fetch_row($pkey))
{
$pk[$j]=$r[0];
$j++;
}
$n=oci_num_fields($result);
for ($i = 1; $i <= $n; $i++){
       $column_name[$i-1]  = oci_field_name($result, $i);
       $column_type[$i-1] = oci_field_type($result,$i);
  }
?>
<div>
<h2>   INSERTING  DATA INTO  TABLE</h2>
</div>
<label>
<form class=box method="post" >
<?php for ($i = 0; $i < $n; $i++) {
      echo $column_name[$i];?></label><input type="text" name="temp[]" ><br/>
<?php }?>
      <input type="submit" value="Submit Info" name="go">
	  <br>
	  <br>
	  <p>
	   <br> RETURN TO :<br><br>
<a href="listoftab.php "class=button2>Main page</a>
<a href="operations.php" class=button2>Edit details</a><br>
	 	  </p>

</form>
<h3>
<?php
if(isset($_POST['go']))
{

for ($i = 0; $i < $n; $i++) {
if($column_type[$i]=='NUMBER')
{
$a=$_POST['temp'][$i];
if(!preg_match("/^[0-9]*$/",$a))
{echo " Invalid input "; 
?>

</h3>

<h3>
<?php
die();
}
}
}
function handleError($errno,$errstr){
echo "Invalid input";
?>
</h3>

<?php
die();
}
set_error_handler("handleError");

$k=0;
for ($i = 0; $i < $n; $i++) {
if(in_array($column_name[$i],$pk)){
     $val[$k]=$_POST['temp'][$i];
     $pos[$k]=$i;
     $k++;
}
else{
$c[$i]=$_POST['temp'][$i];}
}

if($j==1){
if($column_type[$pos[0]]!='VARCHAR2'){
$insp=oci_parse($conn,"insert into ".$t."(".$pk[0].") values(".$val[0].")");}
else if($column_type[$pos[0]]=='VARCHAR2'){
$insp=oci_parse($conn,"insert into ".$t."(".$pk[0].") values('".$val[0]."')");}
}
else if($j==2)
{
if($column_type[$pos[0]]!='VARCHAR2' && $column_type[$pos[1]]!='VARCHAR2'){
$insp=oci_parse($conn,"insert into ".$t."(".$pk[0].",".$pk[1].") values(".$val[0].",".$val[1].")");}
else if($column_type[$pos[0]]=='VARCHAR2' && $column_type[$pos[1]]!='VARCHAR2'){
$insp=oci_parse($conn,"insert into ".$t."(".$pk[0].",".$pk[1].") values('".$val[0]."',".$val[1].")");}
else if($column_type[$pos[0]]!='VARCHAR2' && $column_type[$pos[1]]=='VARCHAR2'){
$insp=oci_parse($conn,"insert into ".$t."(".$pk[0].",".$pk[1].") values(".$val[0].",'".$val[1]."')");}
if($column_type[$pos[0]]=='VARCHAR2' && $column_type[$pos[1]]=='VARCHAR2'){
$insp=oci_parse($conn,"insert into ".$t."(".$pk[0].",".$pk[1].") values('".$val[0]."','".$val[1]."')");}
}
oci_execute($insp);

for ($i = 0; $i < $n; $i++){
if(!in_array($column_name[$i],$pk) && $column_type[$i]!='VARCHAR2' && $column_type[$pos[0]]!='VARCHAR2'){
$insert=oci_parse($conn,"update ".$t." set ".$column_name[$i]."=".$c[$i]." where ".$pk[0]."=".$val[0]);
oci_execute($insert);
}
else if(!in_array($column_name[$i],$pk) && $column_type[$i]=='VARCHAR2' && $column_type[$pos[0]]!='VARCHAR2'){
$insert=oci_parse($conn,"update ".$t." set ".$column_name[$i]."='".$c[$i]."' where ".$pk[0]."=".$val[0]);
oci_execute($insert);
}
else if(!in_array($column_name[$i],$pk) && $column_type[$i]!='VARCHAR2' && $column_type[$pos[0]]=='VARCHAR2'){
$insert=oci_parse($conn,"update ".$t." set ".$column_name[$i]."=".$c[$i]." where ".$pk[0]."='".$val[0]."'");
oci_execute($insert);
}
else if(!in_array($column_name[$i],$pk) && $column_type[$i]=='VARCHAR2' && $column_type[$pos[0]]=='VARCHAR2'){
$insert=oci_parse($conn,"update ".$t." set ".$column_name[$i]."='".$c[$i]."' where ".$pk[0]."='".$val[0]."'");
oci_execute($insert);
}
}
echo "Data inserted";
}

?>

</body>
</html>

