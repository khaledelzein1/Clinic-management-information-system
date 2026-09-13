<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
<?php
  include"session.php";
  include"bdd.php";


$u=$_SESSION["user"];
$p=$_SESSION["pwd"];
  $sql = "select *from security where username='".$u."' and password='".$p."';";
  $res = mysql_query($sql,$link);
  if ($_SESSION["user"]==false)
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
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="15">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="vital.php"><b>BACK</b></a></font></td> 
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>BODY MASS INDEX CALCULATOR</b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
			
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="7" bgcolor="red"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="2" height="18"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <br><br><br>
				

<center>
<legend ><b>BODY MASS INDEX CALCULATOR</b></legend><TABLE align="center"   BORDER=2 BGCOLOR="#56A5EC"  width="330">
<form name="bmiForm">

<tr><td>Your Weight(kg):</td><td> <input type="text" name="weight" size="10"></td></tr>
<tr><td>Your Height(cm):</td><td> <input type="text" name="height" size="10"></td></tr>
<tr><td colspan="2" align="center"><input type="button" value="Calculate BMI" onClick="calculateBmi()"></td></tr>
<tr><td>Your BMI:</td><td> <input type="text" name="bmi" size="10"></td></tr>
<tr><td>This Means:</td><td> <input type="text" name="meaning" size="20"></td></tr>

<tr><td colspan="2" align="center"><input type="reset" value="Reset" /></td></tr>
</form>
</TABLE></center>
<table align="center" width="400"><tr><td>• Thin < 18.5</td></tr>
        <tr><td> • Healthy  = 18.5-25</td></tr>
        <tr><td> • Overweight > 25 </td></tr></table>





