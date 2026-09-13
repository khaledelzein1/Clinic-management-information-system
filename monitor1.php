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
	  <br>
        <tr> 
		<img border="0" src="images/jk.png" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="registration1.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid1.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> PATIENT'S MONITOR </b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
	
          </td>
        </tr>
       
        
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="3" height="18"> 

<br>


<?php
include"bdd.php";
$sql = "select * from patient order by patientid ";
  $res = mysql_query($sql);
 ?> 
<TABLE BORDER width="1300" align="center" bgcolor="#98AFC7" >
<caption align=center><h2></h2></caption><th>MR</th><th>PATIENT NAME</th><th>ADDRESS</th><th>PHONE NUMBER</th><th>REGISTER NUMBER</th><th>SEX</th><th>NATIONALITY</th><th>MARITAL STATUS</th><th>BIRTH DATE</th><th>REGISTRATION DATE</th>
<?php
 for($n=0;$n<mysql_num_rows($res);$n++)
 {   if($n % 2==0)
$bgcolor="white";
 else
 $bgcolor="#98AFC7";
  $data = mysql_fetch_row($res);
  $lig="<TR bgcolor=".$bgcolor."><TD><center><a href=\"patient.php?patientid=".$data[0]."\">".$data[0]."</a></center></TD><TD>".$data[1]."</TD><TD><center>".$data[2]."</TD><TD><center>".$data[3]."</TD><TD><center>".$data[4]."</TD><TD><center>".$data[5]."</TD><TD><center>".$data[6]."</TD><TD><center>".$data[7]."</TD><TD><center>".$data[8]."</TD><TD><center>".$data[9]."</TD></tr>";
  echo $lig;
    }
       ?>