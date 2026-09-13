


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
background-color:white;
border: black 0px solid;
color: #000000;
font-family: arial, verdana, ms sans serif;
font-size: 12pt;
font-weight: normal
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
<script language="javascript">
 function controler(a){
         if(isNaN(a.value)){
                 alert("ATTENTION MEDICAL NUMBER:INTEGER VALUE");
                 a.value="";
         }
 }

  </script>
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
  <script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
{
var required=['medicalnumber','vaccinationname'];
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
		<img border="0" src="images/med4.jpg" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  	  
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="immunization.php"><b>BACK</b></a></font></td>
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid2.php"><b>HOME</b></a></font></td>  
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>IMMUNIZATION RECORD</b>
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
                <td valign="top" height="400" width="150"> 
 
 <form  action="immunization1.php" id="immunization1" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
<?php

$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";



error_reporting(0);
include"bdd.php";

include"session.php";

if(isset($_POST["add"]))
{
$d1=$_POST["medid"];
$d2=$_POST["medicalnumber"];
$d3=$_POST["doctorname"];
$d4=$_POST["orddate"];
$d5=$_POST["vaccinationname"];
$d6=$_POST["dnote"];

$d7="select doctor.doctorid from doctor where doctor.doctorname='".$_POST["doctorname"]."' ";
$res1=mysql_query($d7);
$p=mysql_fetch_array($res1);
$sql="insert into immunization(patientid,doctorid,immunizationdate,immunizationname,doctornote) VALUES ('".$d2."','" .$p[0]."','" .$d4."','" .$d5."','" .$d6."')";
mysql_query($sql);

if($sql==0){

echo"<script>alert(\" REGISTRATION DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION REGISTRATION FAILED\")</script>";
}


}
 
 

?>

<br><br>

<TABLE  BORDER=0  background="images/log2.jpg" width="1000">
<tr><td><b><u>IMMUNIZATION RECORD</u></b></td></tr>
<TD><INPUT TYPE="hidden"  NAME="medid"   value="<?php echo $d1;?>" ></TD></tr><tr>
<TD><b>MEDICAL NUMBER:*</b></TD>
<TD><INPUT TYPE="text"  NAME="medicalnumber"  size=25 value="<?php echo $d2;?>"  onChange="controler(this)"; ></TD><tr>
<TD><b>DOCTOR NAME:*</b></TD>
<TD><select name="doctorname" >

                 <?php 
				 include"bdd.php";
                    $query = mysql_query("SELECT doctorname  FROM doctor where username='". $_SESSION["userid"]."' and status='ACTIVE' ") 
                           or die(mysql_error());  
                    while ($result = mysql_fetch_assoc($query)) {   
                           $stateChoice = $result['doctorname'];                                      
                             echo '<option value="';
                             echo "$stateChoice"; 
                             echo '">';
                             echo "$stateChoice";  
                             echo '</option>';
                             echo '<br />';                  
                     }
                  ?>
    </select> </td>
</tr>
<TD><b>ORDER DATE:</b></TD>
<td>
				<div align="left" style="float:left">
                    <input name="orddate" size=23 type="text" class="input"  value="<?php echo date("20y-m-d",time())?>">
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['immunization1'].orddate,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
</TD></tr><tr>
<TD><b>VACCINATION NAME:*</b></TD>
<TD><textarea NAME="vaccinationname" size="50"  style="height:100"  style="width:300" value="<?php echo $d5;?>"></textarea></TD>

<TD><b>DOCTOR NOTES:</b></TD>
<TD><textarea NAME="dnote" size="50"  style="height:100"  style="width:300" value="<?php echo $d6;?>"></textarea></TD>
</tr><tr><td align="center" colspan="6">

<input type="submit" align="center" style="height:50" style="width:200" border="3" size="100" value="---- S A V E ----" name="add" > </td></tr>

</TABLE>
 



</html>

</body>



 

  
  
   

 







  
  
  






