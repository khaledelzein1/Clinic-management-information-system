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
		   <form action="firstpage1.php" method="POST">
            <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  
<table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">  <tr align="center" bgcolor="#98AFC7">
 <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>BACK</b></a></font></td> 
			   <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="firstpage.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22" width="750" ><font face="cooper black, Helvetica, sans-serif" size="3"><b>ADD NEW CLINIC</b>
                  </font></td>
				  
                 <tr > 
          <td colspan="10" height="7" width="100%" bgcolor="red"></td>
        </tr>
				 
              
            

   
</table>
  <div class="imagebox">

</form>


<?php
$d1="";
$d2="";
$d3="";



include"bdd.php";
error_reporting(0);

if(isset($_POST["add"]))
{
$d1=$_POST["clinicid"];
$d2=$_POST["clinicname"];
$d3=$_POST["status"];

$sql="insert into clinic.newclinic(clinicname,status) VALUES ('".$d2."','".$d3."') ";

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
 if(isset($_REQUEST["clinicid"]))
 {
 $req=$_REQUEST["clinicid"];
 $sql="select * from newclinic where clinicid=".$req;
 $res = mysql_query($sql);
 $data=mysql_fetch_row($res);
 $d1=$data[0];
 $d2=$data[1];
 $d3=$data[2];
 


}
if (isset($_POST["modify"]))
    {
$d1=$_POST["clinicid"];
$d2=$_POST["clinicname"];
$d3=$_POST["status"];

    $sql = "update newclinic set clinicname = '" .$_POST["clinicname"]. "' , status = '" .$_POST["status"]. "' where clinicid  = ".$_POST["clinicid"];
	echo"$sql";
     $res = mysql_query($sql);
    }
if(isset($_POST["delete"]))
{

$d1=$_POST["clinicid"];
$d2=$_POST["clinicname"];
$d3=$_POST["status"];

    $sql = "delete from newclinic  where clinicid = ".$d1;
    $res = mysql_query($sql);

}

?>

<form action="newclinic.php" method="POST">
<br><br>

 <center><b>ADD NEW CLINIC</b></center>
<TABLE ALIGN=CENTER >
<tr>
<TD><INPUT TYPE=hidden NAME="clinicid" SIZE=30 value="<?php echo $d1;?>"</TD></Tr><tr>
<TD>CLINIC NAME:</TD>
<TD><INPUT TYPE=TEXT NAME="clinicname" SIZE=30 value="<?php echo $d2;?>"></TD>
<TD>STATUS:</TD>

<TD><select name="status">
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
$sql = "select * from newclinic order by newclinic.clinicid";
  $res = mysql_query($sql);
  ?>
<table align=center  bgcolor="#99ccff" border=1>
<th>SELECT</th><th> CLINIC NAME</th><th> STATUS</th>
 <?php
 for($n=0;$n<mysql_num_rows($res);$n++)
 {   if($n % 2==0)
 $bgcolor="white";
 else
 $bgcolor="#99ccff";
  $data = mysql_fetch_row($res);
  $lig="<TR bgcolor=".$bgcolor."><TD><center><a href=\"newclinic.php?clinicid=".$data[0]."\">".$data[0]."</a></TD><TD>".$data[1]."</TD><TD>".$data[2]."</TD></tr>";
  echo $lig;
    }
       ?>
</table>
