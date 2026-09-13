
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
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> 
		<img border="0" src="images/jk.png" width="1300" height="100">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="registration.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> DOCTOR REGISTRATION </b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
	
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="10" bgcolor="#3366CC"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="2" height="18"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top" height="400" width="150"> 
                 


<?php
$d1="";
$d2="";
$d3="";
$d4="";




include"bdd.php";

if(isset($_POST["add"]))
{
$d1=$_POST["drid"];
$d2=$_POST["doctorname"];
$d3=$_POST["doctorspeciality"];
$d4=$_POST["drget"];

//$r="select * from sagesse.employer where idemployer=".$d1;
//$res = mysql_query($r);
//if(mysql_num_rows($res)>0)
//echo"<h1>ce numero est deja utilisee</h1>";
//else
//{
$sql="insert into clinic.doctor (doctorname,doctorspeciality,getdate)values ('".$d2."','" .$d3."','" .$d4."')";
mysql_query($sql);

if($sql==0){

echo"<script>alert(\" REGISTRATION DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION REGISTRATION FAILED\")</script>";
}
    }
 ?>
 <?php
 if(isset($_REQUEST["doctorid"]))
 {
 $req=$_REQUEST["doctorid"];
 $sql="select * from clinic.doctor where doctorid=".$req;
 $res = mysql_query($sql);
 $data=mysql_fetch_row($res);
 $d1=$data[0];
 $d2=$data[1];
 $d3=$data[2];
 $d4=$data[3];
 
 
}
if (isset($_POST["modifier"]))
    {
    $d1=$_POST["drid"];
$d2=$_POST["doctorname"];
$d3=$_POST["doctorspeciality"];
$d4=$_POST["drget"];
    $sql = "update doctor set doctorname = '" .$_POST["drname"]. "',doctorspeciality ='" .$_POST["drspec"]."',getdate ='" .$_POST["drget"]."' where doctorid = ".$_POST["drid"];
     $res = mysql_query($sql);
     if($sql==0){
echo"<script>alert(\" UPDATE OK \")</script>";
}
else{
echo"<script>alert(\" ATTENTION UPDATE FAILED\")</script>";
}
    }
if(isset($_POST["delete"]))
{
$d1=$_POST["drid"];
$d2=$_POST["doctorname"];
$d3=$_POST["doctorspeciality"];
$d4=$_POST["drget"];
    $sql = "delete from doctor where doctorid = ".$d1;
    $res = mysql_query($sql);
    if($sql==0){
echo"<script>alert(\" DELETE OK \")</script>";
}
else{
echo"<script>alert(\" ATTENTION DELETE FAILED\")</script>";
}

}

?>

<form action="doctor.php" method="POST">
<script type="text/javascript" language="javascript">
         function ClearTextboxes()
         {
             document.getElementById('drname').value = '';
             document.getElementById('drspec').value = '';            
         }
     </script>
	 <script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
{
var required=['doctorname','doctorspeciality'];
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
</style><br>
<fieldset>
<legend align="center">DOCTOR REGISTRATION</legend>

<TABLE width="440" BORDER= 3  BGCOLOR="#00CCFF">
<tr>
<TD</TD>
<TD><INPUT TYPE="hidden" NAME="drid" SIZE=30 value="<?php echo $d1;?>"></TD></tr><tr>
<TD><b>DOCTOR NAME:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="doctorname" SIZE=30 value="<?php echo $d2;?>"></TD>
</tr><tr>
<TD><b>SPECIALITY:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="doctorspeciality" SIZE=30 value="<?php echo $d3;?>"></TD></tr><tr>

</tr><tr>
<TD><b>REGISTRATION DATE:</b></TD>
<TD><INPUT TYPE=TEXT NAME="drget"  SIZE=30 value="<?php echo date("20y-m-d",time())?>"></TD>
</table>

<TABLE  BORDER="0" width="440" BGCOLOR="#00CCFF">
<td><center><input type="submit"   style="height:40"  style="width:80"  name="add" value="S A V E" OnClientClick="ClearTextboxes();"  ></center></td>
<td><center><input type="submit" style="height:40"  style="width:80" value="MODIFY" name="modifier" OnClientClick="ClearTextboxes();" ></center></td>
<td><center><input type="submit" value="DELETE" style="height:40"  style="width:80" name="delete" OnClientClick="ClearTextboxes();" ></center></td><td>
    <center><INPUT name="RESET" style="height:40"  style="width:80" TYPE=submit VALUE="CLEAR"></center></td>
	<tr><td colspan="2">
(*)MANDATORY FIELD</td></tr>

</table>
</fieldset>
</form>
<?php
include"bdd.php";
$sql = "select * from doctor order by doctorid ";
  $res = mysql_query($sql);
 ?> 
<TABLE BORDER width="700" align="center" BGCOLOR="#00CCFF">
<caption align=center><h2>LIST OF DOCTORS</h2></caption><th>SELECT</th><th>DOCTOR NAME</th><th>SPECIALITY DOCTOR</th><th>REGISTRATION DATE</th>
<?php
 for($n=0;$n<mysql_num_rows($res);$n++)
 {   if($n % 2==0)
$bgcolor="white";
 else
 $bgcolor="#00CCFF";
  $data = mysql_fetch_row($res);
  $lig="<TR bgcolor=".$bgcolor."><TD><a href=\"doctor.php?doctorid=".$data[0]."\">".$data[0]."</a></TD><TD>".$data[1]."</TD><TD>".$data[2]."</TD><TD>".$data[3]."</TD></tr>";
  echo $lig;
    }
       ?>
</table>


<p align="left" style="margin-left: 20"><font face="Arial" size="2"></font></p>
      <p align="left" style="margin-left: 20"><font face="Arial" size="1">&nbsp;
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



</html>
