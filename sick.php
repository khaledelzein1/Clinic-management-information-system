

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
color: black;
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
var required=['medicalnumber','daye','diag','fromdate','todate'];
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
		<img border="0" src="images/jk.png" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  	  
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid2.php"><b>BACK</b></a></font></td>
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid2.php"><b>HOME</b></a></font></td>  
			  
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>MEDICAL REPORT FORM</b>
                  </font></td>
				  
                
				 
             
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="red"></td>
        </tr>
		
        <tr valign="top"> 
          <td colspan="4" height="18"> 

            
                  <div class="imagebox">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top" height="400" width="150"> 

 
<form  action="sick.php" id="sick" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
 
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
$d1=$_POST["sickid"];
$d2=$_POST["medicalnumber"];

$d4=$_POST["diag"];
$d5=$_POST["daye"];
$d6=$_POST["fromdate"];
$d7=$_POST["todate"];
$d8=date("20y-m-d",time());
$d="select doctor.doctorid from doctor where doctor.username='".$_SESSION['userid']."' ";
$res1=mysql_query($d);
$p=mysql_fetch_array($res1);

$sql="insert into sick(patientid,doctorid,diagnosis,day,fromdate,todate,date) VALUES ('".$d2."','" .$p[0]."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."')";
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

<TABLE  BORDER=0 background="images/log2.jpg">
<tr><td><b><u>SICK LEAVE FORM</u></b></td></tr>
<TD><INPUT TYPE="hidden"  NAME="sickid"  value="<?php echo $d1;?>" ></TD></tr><tr>
<TD><b>MEDICAL NUMBER:*</b></TD>
<TD><INPUT TYPE="text"  NAME="medicalnumber"  value="<?php echo $d2;?>" onChange="controler(this)"; ></TD></tr><tr>
<tr>
<TD><b>DIAGNOSIS:*</b></TD>

<TD><textarea  NAME="diag"  style="width:300" style="height:80"  value="<?php echo $d4;?>"></textarea></TD></tr><tr>
<TD><b>NUMBER OF DAY'S:*</b></TD>
<TD><INPUT TYPE="text"  NAME="daye" style="width:40" style="height:25"  value="<?php echo $d5;?>" onChange="controler(this)"; ></TD></tr><tr>
<tr>
                <td  ><b>STARTED :</b> </td>
                <td  >
				<div align="left" style="float:left">
                    <input name="fromdate"  type="text" size="15" class="input"  value="<?php echo $d6;?>"></textarea>
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['sick'].fromdate,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
				</td>
              </tr><tr>
                <td > <b>ENDED: </b> </td>
                <td >
				<div align="left" style="float:left">
                    <input name="todate" type="text" class="input"  size="15"  value="<?php echo $d7;?>">
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['sick'].todate,'anchor2','yyyy-MM-dd');return false;" NAME="anchor2" ID="anchor2"><img src="images/insert_table.gif" border=0></A>
				</div>
				</td>
              </tr>
			  <tr>

</tr>
<tr>

<td><input type="submit" align="center" style="height:50" style="width:200" border="3"  value="---- S A V E ----" name="add" > </td>
 
<td colspan="2"><a href="printsick.php"><b><center>PRINT SICK LEAVE REPORT </center></b></a></td></tr>
</table>


  <br>
</form>




</html>

</body>



 

  
  
   

 







  
  
  






