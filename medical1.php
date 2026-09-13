


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
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="todayapp2.php"><b>BACK</b></a></font></td> 
			    <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid2.php"><b>HOME</b></a></font></td>
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>MEDICAL VISITS</b>
                  </font>      </td>
        </tr>
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
				 <?php

include"bdd.php";
include"session.php";
$sql3="select doctorname  from doctor where doctor.username= '".$_SESSION["userid"]."' and doctor.password= '".$_SESSION["password"]."' ";
$res = mysql_query($sql3);
while($row = mysql_fetch_array($res)){

echo "<table><tr><td><b> Welcome Doctor: ". $row['doctorname'] ."</b></td></tr></table>";
}
?>
        <tr > 
          <td colspan="3" height="18"> 

            
                  <div class="imagebox">
 
 <form  action="medical1.php" id="medical1" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
 
<?php
error_reporting(0);
$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";
$d7="";


include"bdd.php";
include"session.php";

if(isset($_POST["add"]))
{
$d1=$_POST["investid"];
$d2=$_POST["medicalnumber"];
$d3=$_POST["patientregistrationdate10"];
$d4=$_POST["hist"];
$d5=$_POST["chcomp"];
$d6=$_POST["phexam"];
$d7=$_POST["diagnosis"];
$d8=$_POST["reservation1id"];

$d="select doctor.doctorid from doctor where doctor.username='".$_SESSION['userid']."' ";
$res1=mysql_query($d);
$p=mysql_fetch_array($res1);

$sql="insert into investigation (patientid,date,history,chiefcomplaint,physicalexam,diagnosis,reservation1id,doctorid) VALUES ('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."','" .$p[0]."')";

mysql_query($sql);

if($sql==0){

echo"<script>alert(\" REGISTRATION DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION REGISTRATION FAILED\")</script>";
}


}
 
 
?>

<fieldset>
<legend>MEDICAL VISIT'S</legend>

<TABLE   width="600"   background="images/log2.jpg">
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


<TD><INPUT TYPE="hidden"  NAME="investid"  value="<?php echo $d1;?>" ></TD></tr><tr>
<TD><INPUT TYPE="hidden"  NAME="medicalnumber"  value="<?php echo $_GET['patientid'];?>"  ></TD>
<TD><INPUT TYPE="hidden"  NAME="reservation1id"  value="<?php echo $_GET['reservation1id'];?>"  ></TD>

</tr><tr>
<TD><b>VISIT DATE:</b></TD>
 <td >
				
                    <input name="patientregistrationdate10" size=15 type="text" class="input" value="<?php echo date("20y-m-d",time())?>" >
               
				<A HREF="#" onClick="calendar.select(document.forms['medical1'].patientregistrationdate10,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
				</td>
 </tr><tr>
<TD><b>HISTORY:</b></TD>
<TD><textarea NAME="hist" size=50  style="height:120"  style="width:400" value="<?php echo $d4;?>"></textarea></TD>
<TD width="1000"><b>CHIEF COMPLAINT:</b></TD>
<TD><textarea NAME="chcomp" size="50"  style="height:120"  style="width:400" value="<?php echo $d5;?>"></textarea></TD></tr><tr>
<TD><b>PHYSICAL EXAM:</b></TD>
<TD><textarea NAME="phexam" size="50"  style="height:120" style="width:400" value="<?php echo $d6;?>" ></textarea></TD>
<TD><b>DIAGNOSIS:*</b></TD>
<TD><textarea NAME="diagnosis" size="50"  style="height:120" style="width:400" value="<?php echo $d7;?>" ></textarea></TD></tr><TR>
<td colspan="3" &nbsp;><input type="submit" align="center" style="height:60" style="width:150" value="----- S A V E -----" name="add" > </td>
</tr>


</tr><tr>
</table>

  <br>
</form>
</fieldset>
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

</body>



 

  
  
   

 







  
  
  




