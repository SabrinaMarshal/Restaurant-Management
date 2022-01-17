<?php 
session_start();
?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<html>  
<head>  
<title>Search data</title>  
<style>
table {
  border-collapse: collapse;
  background-color: white
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
	
  background-color: #ADD8E6;
  color: black;
 
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
<form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">  
<table width="599" border="6" bordercolor="blue" align="center">  
<tr>  
<th>Keyword  
<input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_GET["txtKeyword"];?>">  
<input type="submit" value="Search" class=button2></th>  
</tr>  
</table>  
</form>  
<?php
if($_GET["txtKeyword"] != "")  
{  
$objConnect = oci_connect("","","localhost/orcl"); 
$t=$_SESSION['tab'];
$res=oci_parse($objConnect,"select * from ".$t);
oci_execute($res); 
$n=oci_num_fields($res);
for ($i = 1; $i <= $n; $i++){
       $column_name[$i-1]  = oci_field_name($res, $i);
} 
$k=0;
$strSQL="SELECT  *  FROM ".$t."  WHERE (";
while($column_name[$k])
{
$str[$k]= "lower($column_name[$k]) LIKE lower('%".$_GET["txtKeyword"]."%') OR ";
$strSQL=$strSQL.$str[$k];
$k++;
}
$str=substr($strSQL,0,-3);
$strSQL=$str.")";
$objParse = oci_parse($objConnect, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
  
$Num_Rows = oci_fetch_all($objParse, $Result);  
  
$Per_Page = 5;   // Per Page  
  
$Page = $_GET["Page"];  
if(!$_GET["Page"])  
{  
$Page=1;  
}  
  
$Prev_Page = $Page-1;  
$Next_Page = $Page+1;  
  
$Page_Start = (($Per_Page*$Page)-$Per_Page);  
if($Num_Rows<=$Per_Page)  
{  
$Num_Pages =1;  
}  
else if(($Num_Rows % $Per_Page)==0)  
{  
$Num_Pages =($Num_Rows/$Per_Page) ;  
}  
else  
{  
$Num_Pages =($Num_Rows/$Per_Page)+1;  
$Num_Pages = (int)$Num_Pages;  
}  
$Page_End = $Per_Page * $Page;  
IF ($Page_End > $Num_Rows)  
{  
$Page_End = $Num_Rows;  
}  
  
?>  
<table width="600" border="1">  
<tr> 
<?php 
$k=0;
while($column_name[$k]){?>
<th width="91"> <div align="center"><?php echo $column_name[$k]?></div></th>  
<?php 
$k++;
}?>  
</tr>  
<?php
for($i=$Page_Start;$i<$Page_End;$i++)  
{  
?>  
<tr> 
<?php
$k=0;
while($column_name[$k]){ ?>
<td><div align="center"><?=$Result["$column_name[$k]"][$i];?></div></td>  
<?php
$k++;
}?> 
</tr>  
<?php
}  
?>  
</table>  
<br>  
Total <?= $Num_Rows;?> Record : <?=$Num_Pages;?> Page :  
<?php
if($Prev_Page)  
{  
echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtKeyword=$_GET[txtKeyword]'><< Back</a> ";  
}  
  
for($i=1; $i<=$Num_Pages; $i++){  
if($i != $Page)  
{  
echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$_GET[txtKeyword]'>$i</a> ]";  
}  
else  
{  
echo "<b> $i </b>";  
}  
}  
if($Page!=$Num_Pages)  
{  
echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtKeyword=$_GET[txtKeyword]'>Next>></a> ";  
}  
  
oci_close($objConnect);  
  
}  
?>  
</body>  
</html>  
