

<?php
 
  include"bdd.php";
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
<script language="JavaScript" type="text/javascript" src="richtext.js"></script>
<body background="images/p9.GIF">
<br>
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
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	 
        <img border="0" src="images/med7.jpg" width="1300" height="130">
        <tr></tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
	
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="appointment1.php"><b>BACK</b></a></font></td> 
			     <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid1.php"><b>HOME</b></a></font></td>
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> TODAY APPOINTMENT BY DOCTOR NAME</b>
                  </td>
        </tr>
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
		
        <tr valign="top"> 
          <td colspan="3" height="18"> 

            
                  <div class="imagebox">
<form  action="todayapp1.php" id="todayapp1" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
 <br><br><br><br>
<center><table     background="images/log2.jpg">
<tr><td colspan=2 align="center"><b> DOCTOR NAME:</b></td><TD><select name="doctorname" >
        <option> Select Doctor .....</option>'
                 <?php 
				 include"bdd.php";
                    $query = mysql_query("SELECT doctorname  FROM doctor where status='ACTIVE' ") 
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
    </select> </td></td><td colspan=2 align="center"><b>SELECT DATE :</b>

<td ><div align="left" style="float:left">
                    <input name="date"  align="center" type="text" size="15" class="input" >
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['todayapp1'].date,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
				</td>
</tr>

</tr>
<td colspan="6"><center><input type=submit size=30 name="btsearch" value="----S E A R C H----"></center></td></tr>
</table>
<?php
include"bdd.php";
if(isset($_POST["btsearch"])){

$d="select doctor.doctorid from doctor where doctor.doctorname='".$_POST["doctorname"]."' ";
$res1=mysql_query($d);
$p=mysql_fetch_array($res1);

$sql2 ="select reservation1.reservation1id,patient.patientid,patientfirstname,doctor.doctorname,newclinic.clinicname,reservation1.reservationdate,reservation1.reservationtime from doctor,newclinic,patient,reservation1 where reservation1.doctorid=doctor.doctorid and reservation1.clinicid=newclinic.clinicid and patient.patientid=reservation1.patientid and reservation1.doctorid='".$p[0]."' and reservation1.reservationdate='".$_POST["date"]."' order by reservation1.patientid";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
       echo "<br> NO APPOINTMENTS IN THIS DAY ";

  else { ?>
<br>
     <TABLE BORDER align="center"   background="images/log2.jpg">
<CAPTION>
<b><i>TODAY APPOINTMENTS</i></b>
</CAPTION>
 <th><b>MR</b><th><b>Name</b><th><b>Doctor</b><th><b>Clinic</b></th><th><b>Date</b></th><th><b>Time</b></th>
   <?php
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td>" .
               $data[1]. "<td>".$data[2]. "<td>".$data[3]. "<td>".$data[4]. "<td>".$data[5]. "<td>".$data[6];
       echo $lig;
    }
    echo "</TABLE>";
  }
//$sql1 = "select idemployer,nameemployer,position from employer where employer.idemployer='".$_POST["txtsearch"]."'";
//$res1=mysql_query($sql1,$link);
//if(mysql_num_rows($res1)==0) echo"<br>Pas d'offre sur ce medicament";
//else{?>

<?php
         //$lig="";
         //for($n=0;$n<mysql_num_fields($res1);$n++)
         //$lig=$lig."<th>".mysql_field_name($res1,$n);
         //echo $lig;
         //for($n=0;$n<mysql_num_rows($res1);$n++){
         //$lig="<tr>";
         //$data1=mysql_fetch_row($res1);
         //for($j=0;$j<mysql_num_fields($res1);$j++)
         //$lig=$lig."<td>".$data1[$j];
         //echo $lig;}
         //echo"</table>";}

}

  //?>
 
</table>


 </form>



