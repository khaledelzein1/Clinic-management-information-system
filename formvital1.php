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
<!-- this script got from www.javascriptfreecode.com-Coded by: Krishna Eydatoula -->
<style type="text/css">
<!--


INPUT {
background-color:white ;
color: black;
font-family: cooper black;
font-size: 16 pt
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


.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 
.imagebox{width:100%;
height:400;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}
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
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>Vital Signs</b>
                  </font>      </td>
        </tr>
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
		
        <tr > 
          <td colspan="3" height="18"> 

            
                  <div class="imagebox">
				  <br>
				  			   		 <?php

include"bdd.php";

$sql3="select employername  from employer ,vital where employer.employerid=vital.employerid and vital.reservation1id= '".$_GET["reservation1id"]."' ";
$res = mysql_query($sql3);
while($row = mysql_fetch_array($res)){

echo "<table><tr><td><b> Nurse Name: ". $row['employername'] ."</b></td></tr></table>";
}
?>
<?php
include"bdd.php";
{
$sql2 = "select  vital.patientid,patient.patientfirstname,vital.visitdat,vital.temperature,vital.height,vital.weight,vital.respiratoryrate,vital.bodyposition,vital.bloodpressure,vital.heartstatus,vital.heart,vital.notes from patient,vital where vital.patientid=patient.patientid and vital.reservation1id='".$_GET['reservation1id']."' ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" NO RESULT FOUND \")</script>";
    // Affichage des produits
  else { ?>
<br><br><br>
     <TABLE  border="1"align="center" width="100%">
<?php

  echo "<th><b>NAME</b></th><th><b>Visit Date</b></th><th><b>TEMP<br>(C)</b></th><th><b>HEIGHT<br>(cm)</b></th><th><b>WEIGHT<br>(kg)</b></th><th><b>RESPIRATORY</b></th><th><b>POSITION</b></th><th><b>BLOOD PRESSURE</b></th><th><b>HEART STATUS</b></th><th><b>HEART<br>(BPM)</b></th><th><b>NOTES</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" . $data[1]. "<td><center>" . $data[2]. "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5]. "<td><center>" . $data[6]. "<td><center>" . $data[7]. "<td><center>" . $data[8]. "<td><center>" . $data[9]. "<td><center>" . $data[10]. "<td><center>" . $data[11];
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


 </form>

