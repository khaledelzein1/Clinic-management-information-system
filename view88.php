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
INPUT {
background-color: #306EFF;
color: black;
font-family: cooper black;
font-size: 16 pt
}
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}
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
		 
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="40">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="editpatient1.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid1.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>CHECK RECORD TO EDIT</b>
                  </font></td>
				  
                
				 
             
		
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="red"></td>
        </tr>
        <tr >
          <td colspan="4" height="20">	
		  <div class="imagebox"><br><br><br>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>        <title>View Records</title></head>
<body>
<?php /*         VIEW.PHP        Displays all data from 'players' table*/        // connect to the database     
 include"bdd.php";       
  // get results from database   
       $result = mysql_query("SELECT patient.patientid,patientfirstname,patientadresse,patientphone,registernumber,patientsexe, patientnationality,patientstatus,patientbirthday,patientregistrationdate FROM clinic.patient where patient.patientid='".$_POST["medicalnumber"]."'")             
	       or die(mysql_error());       
	                      // display data in table       
						       
						             echo "<table border='1' bgcolor='white' cellpadding='10'>";       
									  echo "<tr> <th>MR</th> <th>NAME</th> <th>ADRESSE</th><th>PHONE </th><th>REGISTER</th><th>SEXE</th><th>NATIONALITY</th><th>STATUS</th><th>BIRTH DATE</th><th>DATE</th><th>EDIT </th> </tr>";     
						      // loop through results of database query, displaying them in the table    
							      while($row = mysql_fetch_array( $result )) {                         
								         // echo out the contents of each row into a table       
										          echo "<tr>";      
												            echo '<td>' . $row['patientid'] . '</td>';       
															         echo '<td>' . $row['patientfirstname'] . '</td>';  
																	 echo '<td>' . $row['patientadresse'] . '</td>'; 
																	  echo '<td>' . $row['patientphone'] . '</td>';      
																	   echo '<td>' . $row['registernumber'] . '</td>';  
																	    echo '<td>' . $row['patientsexe'] . '</td>';      
																	   echo '<td>' . $row['patientnationality'] . '</td>';  
																	    echo '<td>' . $row['patientstatus'] . '</td>'; 
																		 echo '<td>' . $row['patientbirthday'] . '</td>'; 
																		  echo '<td>' . $row['patientregistrationdate'] . '</td>';       
																	   
																			           echo '<td><a href="edit88.php?patientid=' . $row['patientid'] . '"><u>Edit</u></a></td>';          
																					                                                                                               echo "</tr>";         }       
												    // close table>       
													 echo "</table>";?><p><a href="patient1.php">Add a new patient</a></p></body></html> 