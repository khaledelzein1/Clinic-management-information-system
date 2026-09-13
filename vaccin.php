

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
.q1 {  background-color: #FFFF99; border: #000000; border-style: ridge; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px}
-->
</style>
<style type="text/css">
<!--
INPUT {
background-color: #99ccff;
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
TEXTAREA {
background-color:white;
border: black 0px solid;
color: #000000;
font-family: arial, verdana, ms sans serif;
font-size: 12pt;
font-weight: normal
} 


.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 

-->
</style>
<script language="javascript">
 function controler(a){
         if(isNaN(a.value)){
                 alert("ATTENTION MEDICAL NUMBER:INTEGER VALUE");
                 a.value="";
         }
 }

  </script>
  <script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
{
var required=['medicalnumber'];
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
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> 
		<img border="0" src="images/med4.jpg" width="1300" height="150">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="vaccin.php" method="POST">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  <td height="35"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="immunization.php"><b>BACK</b></a></font></td> 
			  	  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>CHECK ALL VACCINATION FOR PATIENT</b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
<form action="todayapp.php" method=POST>
 <br><br>
<center><table border=1   bgcolor="#00CCFF">
<tr><td colspan=2 align="center"><b>MEDICAL NUMBER</b></td></tr>
<td><input type=text align="center" size=20 name="medicalnumber" onChange="controler(this)";></td></tr>
<td><center><input type=submit size=20 name="btsearch" value="----- F I N D -----"></center></td></tr>
</table>
<?php
include"bdd.php";
if(isset($_POST["medicalnumber"])){
 $a=$_POST["medicalnumber"];
$sql2 ="select patient.patientid,patientfirstname,drname,immunizationdate,immunizationname,immunization.doctornote from patient,immunization where patient.patientid=immunization.patientid and immunization.patientid='".$_POST["medicalnumber"]."' order by immunization.immunizationid";

$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
       echo "</br> THIS PATIENT DON'T HAVE ANY VACCINATION";

  else { ?>
<br>
     <TABLE BORDER align="center" BGCOLOR="#00CCFF">
<CAPTION><b><i>VACCINATION LISTS</i></b></CAPTION>
 <th><b>MEDICAL NUMBER</b><th><b>PATIENT NAME</b><th><b>DOCTOR NAME</b><th><b>VACCINATION NAME</b></th><th><b>DOCTOR NOTES</b></th><th><b>ORDER DATE</b></th>
   <?php
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td>" .
               $data[0]. "<td>".$data[1]. "<td>".$data[2]. "<td>".$data[4]. "<td>".$data[5]. "<td>".$data[3];
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



