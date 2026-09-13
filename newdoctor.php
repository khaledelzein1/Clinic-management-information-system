  <html>
<head>
<title>DMIS</title>

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
var required=['prodname','desc','price','photos'];
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
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
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
	  
        <tr> <br>
		<img border="0" src="images/jk.png" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="newdoctor.php" method="POST">
            <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  
<table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">  <tr align="center" bgcolor="#98AFC7">
 <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>BACK</b></a></font></td> 
			   <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="firstpage.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22" width="750" ><font face="cooper black, Helvetica, sans-serif" size="3"><b>ADD NEW DOCTORS</b>
                  </font></td>
				  
                 <tr > 
          <td colspan="10" height="7" width="100%" bgcolor="red"></td>
        </tr>
				 
              
            

   
</table>
  <div class="imagebox">

</form>


<?php
error_reporting(0);
$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";



include"bdd.php";

if(isset($_POST["add"]))
{
$d1=$_POST["doctorid"];
$d2=$_POST["doctorname"];
$d3=$_POST["doctorspeciality"];
$d4=$_POST["status"];
$d5=$_POST["username"];
$d6=$_POST["password"];

$sql="insert into doctor(doctorname,doctorspeciality,status,username,password,usertypeid) VALUES ('".$d2."','".$d3."','".$d4."','".$d5."','".$d6."','2') ";
echo"$sql";
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
 $sql="select * from doctor where doctorid=".$req;
 $res = mysql_query($sql);
 $data=mysql_fetch_row($res);
 $d1=$data[0];
 $d2=$data[1];
 $d3=$data[2];
 $d4=$data[3];
  $d5=$data[4];
   $d6=$data[5];
    $d7=$data[6];
 
 


}
if (isset($_POST["modify"]))
    {
$d1=$_POST["doctorid"];
$d2=$_POST["doctorname"];
$d3=$_POST["doctorspeciality"];
$d4=$_POST["status"];
$d5=$_POST["username"];
$d6=$_POST["password"];


    $sql = "update doctor set doctorname = '" .$_POST["doctorname"]. "' , doctorspeciality = '" .$_POST["doctorspeciality"]. "', status = '" .$_POST["status"]. "', username = '" .$_POST["username"]. "', password = '" .$_POST["password"]. "' where doctorid  = ".$_POST["doctorid"];

     $res = mysql_query($sql);
	 
	 if($sql==0){

echo"<script>alert(\" UPDATE DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION UPDATE FAILED\")</script>";
}
    }
if(isset($_POST["delete"]))
{

$d1=$_POST["doctorid"];
$d2=$_POST["doctorname"];
$d3=$_POST["doctorspeciality"];
$d4=$_POST["status"];
$d5=$_POST["username"];
$d6=$_POST["password"];

    $sql = "delete from doctor  where doctorid = ".$d1;
    $res = mysql_query($sql);
	if($sql==0){

echo"<script>alert(\" DELETE DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION DELETE FAILED\")</script>";
}

}

?>

<form action="newdoctor.php" method="POST">
<br><br>

 <center><b>ADD NEW DOCTORS</b></center>
<TABLE ALIGN=CENTER >
<tr>
<TD><INPUT TYPE=hidden NAME="doctorid" SIZE=30 value="<?php echo $d1;?>"</TD></Tr><tr>
<TD>Doctor Name:</TD>
<TD><INPUT TYPE=TEXT NAME="doctorname" SIZE=30 value="<?php echo $d2;?>"></TD><TD>Speciality:</TD>
<TD><INPUT TYPE=TEXT NAME="doctorspeciality" SIZE=30 value="<?php echo $d3;?>"></TD></tr>
<tr>
<TD>Username:</TD>
<TD><INPUT TYPE=TEXT NAME="username" SIZE=30 value="<?php echo $d5;?>"></TD>
<TD>Password:</TD>
<TD><INPUT TYPE=TEXT NAME="password" SIZE=30 value="<?php echo $d6;?>"></TD></tr>
<tr>
<TD>STATUS:</TD>

<TD><select name="status" value="<?php echo $d4;?>">
<option>----------</option>
<option>ACTIVE</option>
<option >INACTIVE</option>

</select></td>
</tr>
</table>

<table align="center"><tr><td>
<input type="submit" align="center" style="height:30" style="width:100" border="3" size="100" value="-- S A V E --" name="add" ></td><td>
<input type="submit" align="center" style="height:30" style="width:100" border="3" size="100" value="-- MODIFY --" name="modify" > </td><td>
<input type="submit" align="center" style="height:30" style="width:100" border="3" size="100" value="-- DELETE --" name="delete" > </td><td>
<input type="reset" style="height:30" style="width:100" border="3" size="100" value="-- CLEAR --"  > </td></tr>



</form>

<?php
include"bdd.php";
$sql = "select * from doctor order by doctor.doctorid";
  $res = mysql_query($sql);
  ?>
<table align=center  bgcolor="#99ccff" border=1>
<th>SELECT</th><th> DOCTOR NAME</th><th> SPECIALITY</th><th> STATUS</th>
 <?php
 for($n=0;$n<mysql_num_rows($res);$n++)
 {   if($n % 2==0)
 $bgcolor="white";
 else
 $bgcolor="#99ccff";
  $data = mysql_fetch_row($res);
  $lig="<TR bgcolor=".$bgcolor."><TD><center><a href=\"newdoctor.php?doctorid=".$data[0]."\">".$data[0]."</a></TD><TD>".$data[1]."</TD><TD>".$data[2]."</TD><TD>".$data[3]."</TD></tr>";
  echo $lig;
    }
       ?>
</table>
