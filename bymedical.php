

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
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> <br>
		<img border="0" src="images/med7.jpg" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="bymedical.php" method="POST">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="report1.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid1.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> ALL APPOINTMETNS BY MEDICAL NUMBER</b>
                  </font></td>
				  
                
				 
             
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="red"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="4" height="18"><div class="imagebox"> <br><br><br><br>
<form action="bymedical.php" method=POST>
<center><table   background="images/log2.jpg">
<tr><td  align="center"><b>MEDICAL NUMBER </b></td></tr><tr>
<td><input type=text align="center" size=25 name="txtsearch"></td></tr>
<td colspan="2"><center><input type=submit size=20 name="btsearch" value="----S E A R C H----"></center></td></tr>
</table>





<?php
include"bdd.php";
if(isset($_POST["btsearch"])){
 $a=$_POST["txtsearch"];
$sql2 = "select reservation1.reservation1id,patient.patientid,patientfirstname,doctor.doctorname,reservation1.reservationdate,reservation1.reservationtime from doctor,patient,reservation1 where reservation1.doctorid=doctor.doctorid and patient.patientid=reservation1.patientid   and reservation1.patientid='".$_POST["txtsearch"]."' order by  reservation1.reservationdate " ;

$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
       echo "<br> NO APPOINTMENTS FOR THIS MEDICAL NUMBER ";

  else { ?>
  
<br>
     <TABLE BORDER align="center"  background="images/log2.jpg">
<CAPTION><b><i>APPOINTMENTS BY MEDICAL NUMBER</i></b></CAPTION>
 <th><b>MR</b><th><b>PATIENT NAME</b><th><b>DOCTOR NAME</b><th><b>RESERVATION DATE</b></th><th><b>RESERVATION TIME</b></th>
   <?php
   for ($n=0;$n<mysql_num_rows($res);$n++)
    {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
               $data[1]. "<td><center>".$data[2]. "<td><center>".$data[3]. "<td><center>".$data[4]. "<td><center>".$data[5];
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
  <br><br>
  
 </table>



 </form>



