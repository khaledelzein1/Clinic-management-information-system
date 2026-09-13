<?
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

include"bdd.php";// database connection details stored here

?>
<style type="text/css">
<!--


INPUT {
background-color:white ;
color: black;
font-family: times new roman;
font-size: 14 pt
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
$d7="";
$d8="";


include"bdd.php";

if(isset($_POST["add"]))
{
$d1=$_POST['userid'];
$d2=$_POST['password'];

$d5=$_POST['todo'];
$d6=$_POST['email'];
$d7=$_POST['name'];
$d8=$_POST['sex'];


//$r="select * from secure where idsecure=".$d1;
//$res = mysql_query($r);
//if(mysql_num_rows($res)>0)
//echo"<h1>ce numero est deja utilisee</h1>";
//else
//{
$sql=mysql_query("insert into plus_signup(userid,password,email,name,sex) values('$d1','$d2','$d6','$d7','$d8')");
mysql_query($sql);
if($sql==0){
echo"<script>alert(\" INSERTION OK \")</script>";
}
else{
echo"<script>alert(\" INSERTION OK\")</script>";
}
//}
}
 ?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>CMIS</title>



</head>

<body >
 <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> <br>
		<img border="0" src="images/jk.png" width="1320" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			    <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>BACK</b></a></font></td> 
				<td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="editpass.php"><b>UPDATE PASSWORD</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>New Member Sign UP</b>
                  </font></td>
				  
                
				 
              </tr>
             
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="3" height="18"> 
			 </table>
            

<table width="700" border='0' width='50%' cellspacing='0' cellpadding='0' align=center>
<form name=form1 method=post action=signup.php >
<input type=hidden name=todo value=post>

<tr bgcolor='#98AFC7'><td align=center colspan=2><font  face='Verdana'><b>SIGN UP</b></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='2' >User ID </td><td ><font face='Verdana' size='2'><input type=text name=userid></td></tr>

<tr bgcolor='#98AFC7'><td >&nbsp;<font face='Verdana' size='2' >Password</td><td ><font face='Verdana' size='2'><input type=password name=password></td></tr>



<tr bgcolor='#ffffff'><td ><font face='Verdana' size='2' >&nbsp;Email</td><td  ><input type=text name=email></td></tr>
<tr bgcolor='#98AFC7'><td >&nbsp;<font face='Verdana' size='2' >Name</td><td ><font face='Verdana' size='2'><input type=text name=name></td></tr>

<tr bgcolor='#ffffff'><td >&nbsp;<font face='Verdana' size='2' >Sex</td><td ><font face='Verdana' size='2'>  <input type='radio' value=male checked name='sex'>Male <input type='radio' value=female  name='sex'>Female</td></tr>



<tr bgcolor='#98AFC7'><td align=center colspan=2><input type=submit name="add" value="SIGN UP"></td></tr>
</table>

</body>

</html>
