
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
<script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
{
var required=['medicalnumber','orderdate','medicationname','prescription'];
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
	  
        <tr> <br>
		<img border="0" src="images/med.jpg" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="med1.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td>
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>MEDICATION ORDERS</b>
         </font></td>
				  
                
				 
             
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
		
        <tr valign="top"> 
          <td colspan="3" height="18"> 

            
                  <div class="imagebox">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top" height="400" width="150" colspan="2"> 

  <form  action="medication.php" id="medication" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
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
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}


-->
</style>
<?php

$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";



include"bdd.php";



if(isset($_POST["add"]))
{
$d1=$_POST["medid"];
$d2=$_POST["medicalnumber"];
$d3=$_POST["doctorname"];
$d4=$_POST["orderdate"];
$d5=$_POST["medicationname"];
$d6=$_POST["prescription"];

$sql="insert into medication(patientid,doctorname,orderdate,medicationname,prescription) VALUES ('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."')";
mysql_query($sql);

if($sql==0){

echo"<script>alert(\" REGISTRATION DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION REGISTRATION FAILED\")</script>";
}


}
 
 

?>

<br>


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
TEXTAREA {
background-color: white;
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
<script language="JavaScript" type="text/javascript" src="richtext.js"></script>
<body background="images/p9.GIF">
 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/CalendarPopup.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/AnchorPosition.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/PopupWindow.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/date.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/dhtmlgoodies_calendar.js"></SCRIPT>
	
	<SCRIPT LANGUAGE="JavaScript">
		var calendar = new CalendarPopup();
	</SCRIPT>
	
	
	<SCRIPT>
	/*
function datevalid(){
d=window.document.form1.startDate.value;

     var t = d.split("-");
     if (t.length!=3) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     for (j=0;j<t.length;j++) 
       if (isNaN(t[j])) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     var j = parseInt(t[2]);
     var m = parseInt(t[1]);
     var a = parseInt(t[0]);
   if ((j<=0) || (m<=0) || (a<=0)) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     if (a%4==0) bs=true; else bs=false;
     if ( ( (j>30) && 
            ((m==4) || (m==6) || (m==9) || (m==11) ) ) ||
          ( (j>31) && 
            ((m==1) || (m==3) || (m==5) || (m==7)  || (m==8)  || (m==10)  || (m==12) ) ) ||
          ( (bs) && (j>29) && (m==2) ) ||
          ( (bs==false) && (j>28) && (m==2)||(m>12) )     
            ) 
			 {
        alert("Date invalide");
        v.value = ""; }
		
}
*/
</SCRIPT>
<TABLE  BORDER="0" background="images/log2.jpg" width="980"><tr>
<td colspan="2"><b><u>MEDICATION ORDERS</u></b></td></tr><tr>
<TD><INPUT TYPE="hidden"  NAME="medid"  value="<?php echo $d1;?>" ></TD></tr><tr>
<TD ><b>MEDICAL NUMBER:*</b></TD>
<TD><INPUT TYPE="text"  size=25 NAME="medicalnumber"  value="<?php echo $d2;?>" >
</td>
<td rowspan="3" colspan="6"><img border="0" src="images/med - Copy.jpg" width="550" height="100"></td> </tr><tr>
<TD><b>DOCTOR NAME:*</b></TD>
<TD><select  width="100%" NAME="doctorname"   value="<?php echo $d3;?>" class="listbox">
<option></option>
<option>KHALED ABOU HAMAD</option>
<option>-------------------------------------------</option>
</select></TD></tr>

<TD><b>ORDER DATE:*</b></TD>
<td>
				<div align="left" style="float:left">
                    <input name="orderdate" size=24type="text" class="input"  value="<?php echo date("20y-m-d",time())?>">
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['medication'].orderdate,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
</td>
</tr><tr>
<TD><b>MEDICATION NAME:*</b></TD>
<TD><textarea NAME="medicationname" size="50"  style="height:100"  style="width:250" value="<?php echo $d4;?>"></textarea></TD>
<TD><b>PRESCRIPTION:*</b></TD>
<TD><textarea NAME="prescription" size="50"  style="height:100"  style="width:415" value="<?php echo $d5;?>"></textarea></TD></tr><tr>

<td colspan="2" align="center"> <input type="submit" align="center" style="height:50" style="width:400" border="3" size="100" value="-------------- S A V E --------------" name="add" > </td>

<td colspan="2"><a href="prescription.php"><b><center>PRINT PRESCRIPTION </center></b></a></td>
</tr>
</table>

  <br>
</form>




</html>

</body>



 

  
  
   

 







  
  
  






