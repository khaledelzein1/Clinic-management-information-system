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
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}

INPUT {
background-color: #306EFF;
color: black;
font-family: cooper black;
font-size: 16 pt
}
</style>
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
		 
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="40">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="editimmunization.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>CHECK RECORD TO EDIT</b>
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
<br><br><br>
			    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>        <title>View Records</title></head>
<body>
<?php /*         VIEW.PHP        Displays all data from 'players' table*/        // connect to the database     
 include"bdd.php";       
  // get results from database   
       $result = mysql_query("select immunization.immunizationid,immunization.patientid,immunization.drname,immunization.immunizationdate,immunization.immunizationname,immunization.doctornote from immunization where immunization.patientid='".$_POST["medicalnumber"]."'  order by immunization.immunizationdate  ")   or die(mysql_error());       
	                      // display data in table       
						        
						             echo "<table border='1'  bgcolor='white'cellpadding='10'>";       
									  echo "<tr><th>TRANS ID</th> <th> MR</th> <th>DOCTOR NAME</th><th>ORDER DATE</th><th>VACCINATION NAME </th><th>DOCTOR NOTES</th><th>EDIT </th><th>DELETE</th> </tr>";     
						      // loop through results of database query, displaying them in the table    
							      while($row = mysql_fetch_array( $result )) {                         
								         // echo out the contents of each row into a table       
										          echo "<tr>";      
												             
															 echo '<td><center>' . $row['immunizationid'] . '</td>';     
															         echo '<td>' . $row['patientid'] . '</td>';       
																	          echo '<td><center>' . $row['drname'] . '</td>';       
																			  echo '<td><center>' . $row['immunizationdate'] . '</td>'; 
																			   echo '<td><center>' . $row['immunizationname'] . '</td>'; 
																			    echo '<td><center>' . $row['doctornote'] . '</td>';   
																			   
																			  
																			           echo '<td><a href="edit7.php?immunizationid=' . $row['immunizationid'] . '"><u>Edit</u></a></td>';          
																					         echo '<td><a href="delete7.php?immunizationid=' . $row['immunizationid'] . '"><u>Delete</u></a></td>';                                                                                      echo "</tr>";         }       
												    // close table>       
													 echo "</table>";?><p><a href="immunization1.php">Add a new records</a></p></body></html> 