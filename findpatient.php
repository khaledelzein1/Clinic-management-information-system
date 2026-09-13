<?php
  include"session.php";
  include"bdd.php";


$u=$_SESSION["userid"];
$p=$_SESSION["password"];
  $sql = "select *from plus_signup where userid='".$u."' and password='".$p."';";
  $res = mysql_query($sql,$link);
  if ($_SESSION["userid"]==false)
       {
           echo "<br><b>ATTENTION YOU CAN NOT ACCESS</b>";
exit;
}

  ?>

<?php

  include"bdd.php";
 ?>
<html>
<head>
<title>CMIS</title>

<style type="text/css">
<!--
A. { font-family: "Arial"; font-size: 11pt; text-decoration: underline}
.table {  font-family: "Arial"; font-size: 12pt; ; line-height: 12pt}
A:link {color:#000000;text-decoration: none}
A:visited{color:#000000;text-decoration: none} 
A:hover {color: #ff0000;text-decoration: underline}
.q1 {
  background-color: #FFFF99; border: #000000; border-style: ridge; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px}
.imagebox{width:100%;
height:300;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}
-->
</style>
<script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
{
var required=['PATIENTNAME'];
// Place in this array the name of the form that you think should be mandatory
var bool=true; // Create bool variable and set its value to true
for(var i=0;i<required.length;i++)
{
if(document.getElementsByName(required[i])[0].value=='')
{
alert(required[i]+' CMIS-FIELD IS MANDATORY.');
bool=false;
}
}
return bool;
}
}
</script>
<style type="text/css">
<!--
INPUT {
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}
.listbox{ 
background-color: #99ccff;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}

.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 

-->
</style>
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> 
		<br>
		<img border="0" src="images/jk.png" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="findpatient.php" method="POST">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="registration.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td>
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="patient.php"><b>ADD NEW PATIENT</b></a></font></td>
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>FIND PATIENT</b></font></td>
				  
			 </tr>
            </table>
	
          </td>
        </tr>
         </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="red"></td>
        </tr>
        <tr >
          <td colspan="4" height="10">
             
				</table>
				<div class="imagebox">
				<br><br>
			
<form action="findpatient.php" method=POST>
<table  align="center"   background="images/log2.jpg">
<tr><td colspan=2 align="center"><b>FIND NAME</b></td></tr>
<td><input type=text align="center" size=30 name="PATIENTNAME"></td></tr>
<td><center><input type=submit size=30 name="btsearch" value="----S E A R C H----"></center></td></tr>
</table>

<?php
include"bdd.php";
if(isset($_POST["btsearch"])){
 $a=$_POST["PATIENTNAME"];
$sql2 = "select patientid,patientfirstname,patientadresse,patientphone,registernumber,patientbirthday from patient where patientfirstname like '".$a."%'";

$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
     echo"<script>alert(\"  Patient Not Registered \")</script>"; 

  else { ?>
<br>
     <TABLE BORDER  align="center" BGCOLOR="#56A5EC">
<CAPTION><b><i>RESULT'S FOUND</i></b></CAPTION>
 <th><b>MR</b><th><b>PATIENT NAME</b><th><b>ADRESS</b><th><b>PHONE</b></th><th>REGISTER NUMBER</th><th><b>BIRTH DATE</b></th>
   <?php
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td>" .
               $data[0]. "<td>".$data[1]. "<td>".$data[2]. "<td>".$data[3]. "<td><center>".$data[4]. "<td>".$data[5];
       echo $lig;
    }
    echo "</TABLE>";
  }
//$sql1 = "select idemployer,nameemployer,position from employer where employer.idemployer='".$_POST["txtsearch"]."'";
//$res1=mysql_query($sql1,$link);
//if(mysql_num_rows($res1)==0) echo"<br>Pas d'offre sur ce medicament";
//else{?>

<?php
         //$lig="";
         //for($n=0;$n<mysql_num_fields($res1);$n++)
         //$lig=$lig."<th>".mysql_field_name($res1,$n);
         //echo $lig;
         //for($n=0;$n<mysql_num_rows($res1);$n++){
         //$lig="<tr>";
         //$data1=mysql_fetch_row($res1);
         //for($j=0;$j<mysql_num_fields($res1);$j++)
         //$lig=$lig."<td>".$data1[$j];
         //echo $lig;}
         //echo"</table>";}

}

  //?>
 
</table>


 </form>



