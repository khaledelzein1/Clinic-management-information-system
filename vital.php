


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
	  
        <tr> <br>
		<img border="0" src="images/jk.png" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="todayapp4.php"><b>BACK</b></a></font></td> 
			    <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid3.php"><b>HOME</b></a></font></td>
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>VITAL SIGNS</b>
                 </font></td>
				  
                
				 
             
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
							   		 <?php

include"bdd.php";
include"session.php";
$sql3="select employername  from employer where employer.username= '".$_SESSION["userid"]."' and employer.username= '".$_SESSION["password"]."' ";
$res = mysql_query($sql3);
while($row = mysql_fetch_array($res)){

echo "<table><tr><td><b> Welcome Nurse: ". $row['employername'] ."</b></td></tr></table>";
}
?>
        <tr valign="top"> 
          <td colspan="3" height="18"> 

            
                  <div class="imagebox">

 <form action="vital.php" method=POST>
<?php

$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";
$d7="";
$d8="";
$d9="";
$d10="";
$d11="";
$d12="";
$d13="";


include"bdd.php";
error_reporting(0);


if(isset($_POST["add"]))
{
$d1=$_POST["vitalid"];
$d2=$_POST["medicalnumber"];

$d4=$_POST["visitdate"];
$d5=$_POST["temperature"];
$d6=$_POST["height"];
$d7=$_POST["weight"];
$d8=$_POST["respiratoryrate"];
$d9=$_POST["bodyposition"];
$d10=$_POST["bloodpressure"];
$d11=$_POST["heartstatus"];
$d12=$_POST["heart"];
$d13=$_POST["doctornote"];
$d14=$_POST["reservation1id"];
$d="select employerid  from employer where employer.username= '".$_SESSION["userid"]."' and employer.username= '".$_SESSION["password"]."' ";

$res1=mysql_query($d);
$p=mysql_fetch_array($res1);

$sql="insert into vital (patientid,employerid,visitdat,temperature,height,weight,respiratoryrate,bodyposition,bloodpressure,heartstatus,heart,notes,reservation1id) VALUES ('".$d2."','" .$p[0]."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."','" .$d9."','" .$d10."','" .$d11."','" .$d12."','" .$d13."','" .$d14."')";

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
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
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
<center><H2><font-color:red>VITAL SIGNS</font></h2></center>
<TABLE  align="center" BORDER=0 background="images/log2.jpg" width="800" align="left">

<TD><INPUT TYPE="hidden"  NAME="vitalid"  value="<?php echo $d1;?>" ></TD></tr><tr>

<TD><INPUT TYPE="hidden"  NAME="medicalnumber"  value="<?php echo $_GET['patientid'];?>" ></TD>

<TD><INPUT TYPE="hidden"  NAME="reservation1id"  value="<?php echo $_GET['reservation1id'];?>" ></TD>

<TD><INPUT TYPE=hidden NAME="visitdate"   value="<?php echo date("20y-m-d",time())?>"></TD></tr>
<tr>

<TD><b>Temperature:</b></TD>
<TD><INPUT TYPE=TEXT  NAME="temperature" value="<?php echo $d5;?>" >C</TD>
<TD><b>Height:</b></TD>
<TD><INPUT TYPE=TEXT  NAME="height" value="<?php echo $d6;?>" >Cm</TD><tr>
<TD><b>Weight:</b></TD>
<TD><INPUT TYPE=TEXT  NAME="weight" value="<?php echo $d7;?>" >Kg</TD>
<TD><b>Respiratory Rate:</b></TD>
<TD><INPUT TYPE=TEXT  NAME="respiratoryrate" value="<?php echo $d8;?>" ></TD><tr>
<TD><b>Blood Pressure:</b></TD>
<TD><select  width="100%" NAME="bodyposition"   value="<?php echo $d9;?>" class="listbox">
<option></option>
<option>Sitting</option>
<option >Lying</option>
<option >Standing</option>
</select>
<INPUT TYPE=TEXT  NAME="bloodpressure"  size="6"value="<?php echo $d10;?>" ></TD>
<TD><b>Heart:</b></TD>
<TD><select  width="100%" NAME="heartstatus"   value="<?php echo $d11;?>" class="listbox">
<option></option>
<option>Normal</option>
<option>Abnormal</option>
</select>
<INPUT TYPE=TEXT  NAME="heart"  size="6"value="<?php echo $d12;?>" >BPM</TD>
</tr>
<tr>
<TD><b>Nurse Note:</b></TD>
<TD><textarea NAME="doctornote" size="50"  style="height:80" style="width:300" value="<?php echo $d13;?>" ></textarea></TD>
<td colspan="2"><img border="0" src="images/temp.jpg" width="60" height="80">
<img border="0" src="images/weight.jpg" width="60" height="80">
 <img border="0" src="images/height.jpg" width="60" height="80">
 <img border="0" src="images/heart.jpg" width="70" height="80">
 <img border="0" src="images/resp.jpg" width="70" height="80">	
 </td>

<tr>
<td colspan="4" align="center"><input type="submit" align="center" style="height:50" style="width:200" border="3" size="100" value="---------- S A V E ----------" name="add" > 
 <INPUT name="RESET" TYPE=submit VALUE="--------- CLEAR ---------" style="height:50" style="width:200"> </td>
</tr><tr>
</table>


		
	

  <br>
</form>

<p align="left" style="margin-left: 20"><font face="Arial" size="2"></font></p>
      <p align="left" style="margin-left: 20"><font face="Arial" size="1">&nbsp;
      </font><font size="2">&nbsp;</font><font face="Arial" size="1">&nbsp;</font></p>
      <p align="center"><br>
      <font face="Arial" size="1"></font></p>
    </td>
  </tr>
</table>




</html>

</body>



 

  
  
   

 







  
  
  




