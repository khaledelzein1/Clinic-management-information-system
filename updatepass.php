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
var required=['medicalnumber','doctorname'];
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
		<img border="0" src="images/med7.jpg" width="1300" height="150">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="bydate.php" method="POST">
            <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="35">
              <tr align="center" bgcolor="#00CCFF">
			  <td height="22"><font face="Arial, Helvetica, sans-serif" size="2"><a href="securiter.php"><b>BACK</b></a></font></td> 
			   
			   
				   <td height="22"><font face="Arial, Helvetica, sans-serif" size="2"><b> SECURITY</b>
                  </font></td>
				   </tr>
            </table>
			</form>
          <tr> 
          <td colspan="2" height="10" bgcolor="#3366CC"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="2" height="18"> 
            </table>
                      </td>
                    </tr>
                  </table>
                </td>
                <td width="550" valign="top">
                 
                    
                    <tr> 
                      <td height="1" colspan="2" bgcolor="#3366CC"></td>
                    </tr>
                    <tr> 
                      <td colspan="2" height="200"></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2"><!-- You may replace the following with your own information. -->
</td>
        </tr>
      </table>

<?php
$d1="";
$d2="";
$d3="";

include"bdd.php";

if(isset($_POST["add"]))
{
$d1=$_POST["idu"];
$d2=$_POST["user"];
$d3=$_POST["pass"];


//$r="select * from secure where idsecure=".$d1;
//$res = mysql_query($r);
//if(mysql_num_rows($res)>0)
//echo"<h1>ce numero est deja utilisee</h1>";
//else
//{
$sql="insert into security (username,password) VALUES ('".$d2."','" .$d3."')";
mysql_query($sql);
if($sql==0){
echo"<script>alert(\" INSERTION OK \")</script>";
}
else{
echo"<script>alert(\" INSERTION FAILED\")</script>";
}
//}
}
 ?>
 <?php
 if(isset($_REQUEST["securityid"]))
 {
 $req=$_REQUEST["securityid"];
 $sql="select * from security where securityid=".$req;
 $res = mysql_query($sql);
 $data=mysql_fetch_row($res);
 $d1=$data[0];
 $d2=$data[1];
 $d3=$data[2];

}
if (isset($_POST["modifier"]))
    {
    $d1=$_POST["idu"];
$d2=$_POST["user"];
$d3=$_POST["pass"];

    $sql = "update security set username = '" .$_POST["user"]. "', password ='" .$_POST["pass"]."' where securityid = ".$_POST["idu"];
     $res = mysql_query($sql);
     if($sql==0){
echo"<script>alert(\" MODIFICATION OK \")</script>";
}
else{
echo"<script>alert(\" MODIFICATION FAILED\")</script>";
}
    }
if(isset($_POST["delete"]))
{
$d1=$_POST["idu"];
$d2=$_POST["user"];
$d3=$_POST["pass"];
    $sql = "delete from security where securityid = ".$d1;
    $res = mysql_query($sql);
    if($sql==0){
echo"<script>alert(\" DELETE OK \")</script>";
}
else{
echo"<script>alert(\" DELETE FAILED\")</script>";
}

}

?>


<center><legend><i><h2>Change User Password</h2></i></legend></center>
<form action="updatepass.php" method="POST">

<TABLE align="center" BORDER="1" bgcolor="#00CCFF">

<tr>
<TD><INPUT TYPE=hidden NAME=idu SIZE=20  value="<?php echo $d1;?>"></TD>
<tr>
<TD><pre><h2><center><font color="black"> USER NAME:</font></center></h2></TD>
<TD><INPUT TYPE=TEXT NAME=user SIZE="30"  value="<?php echo $d2;?>"></TD>
</tr> <tr>
<TD><pre><h2><center><font color="black"> PASSWORD:</font></center></h2></TD>
<TD><INPUT TYPE="password" NAME=pass SIZE=30  value="<?php echo $d3;?>"></TD>
</table>
<TABLE ALIGN="CENTER"  background="" BORDER="1" bgcolor="#00CCFF" width="452">
<tr><td><input type="submit"    style="height:40"  style="width:100" value="S A V E" name="add" ></td>
<td> <input type="submit" value="MODIFY" style="height:40" style="width:104"  name="modifier"></td>
<td> <input type="submit" value="DELETE" style="height:40"   name="delete"></td>
<td><INPUT name="RESET" TYPE=submit style="height:40" VALUE="CLEAR"></td></tr>
</table>

</form>


