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
background-color:#FFE87C;
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
		<img border="0" src="images/lab.jpg" width="1300" height="150">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  <td height="32"><font face="Arial, Helvetica, sans-serif" size="3"><a href="lab2.php"><b>BACK</b></a></font></td> 
			    <td height="32"><font face="Arial, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td>
			   
				   <td height="32"><font face="Arial, Helvetica, sans-serif" size="3"><b>LABORATORY MASTER REPORTS FROM PATIENT</b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
			
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="10" bgcolor="#3366CC"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="2" height="18"> 
            <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top" height="400" width="150"> <br><br><br>
<form action="test.php" method=POST>

<TABLE   width="380"  BORDER=2 BGCOLOR="#00CCFFC">
<tr>
<TD><b>MEDICAL NUMBER:*</b><input type="text" name="medicalnumber" size=20  onChange="controler(this)";></TD><tr><td align="center" colspan="2">
 <input type="submit" name="bt_search" value="SEARCH">
<input type="RESET" value="CLEAR"></td></tr>
</table>
</form> 
<p align="center" style="margin-left: 20"><font face="Arial" size="2"></font></p>
      <p align="center" style="margin-left: 20"><font face="Arial" size="1">&nbsp;
      </font><font size="2">&nbsp;</font><font face="Arial" size="1">&nbsp;</font></p>
      <p align="center"><br>
      <font face="Arial" size="1"></font></p>
    </td>
  </tr>
</table>
<table border="0" width="100%" bgcolor="#3366CC" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><font size="1">&nbsp;</font></td>
  </tr>
</table>


