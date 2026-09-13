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


<table align="center">
  <tr><td><img  align="center"  width="500" src="images/appoin1.jpg" ></td></tr>
</table><br />
<center><u><h2>LAST  VISIT'S REPORT</h2></u></center><br />
</table>
<?php 

  include"bdd.php";
// Build sql command  
$sqlCommand = "SELECT * FROM investigation,doctor  where investigation.doctorid=doctor.doctorid and investigation.patientid= '".$_POST["medicalnumber"]."' ORDER BY investigationid DESC LIMIT ".$_POST["last"]." "; 
$sql3="select patient.patientid,patient.patientfirstname,patient.patientphone from patient where patient.patientid='".$_POST["medicalnumber"]."' ";
$result = mysql_query($sql3) or die(mysql_error());
while($row = mysql_fetch_array($result)){

echo "<table><tr><td><b> Medical Number :</b> ". $row['patientid'] ."</td></tr>";
echo "<tr><td><b>Patient Name :</b> ". $row['patientfirstname'] ."</td></tr>";
echo "<tr><td><b>Phone Number :</b> ". $row['patientphone'] ."</td></tr></table><br>";
}
echo"<b><u> VISIT'S HISTORY</u></b><br>";
// Execute the query here now  
$query = mysql_query($sqlCommand) or die (mysql_error());  
// Output the data here using a while loop 

while ($row = mysql_fetch_array($query)) {  
    // Gather all $row values into local variables 
    $investigationid = $row["investigationid"];  
	 $doctorname = $row["doctorname"]; 
    $history = $row["history"];  
    $chiefcomplaint = $row["chiefcomplaint"];  
	 $physicalexam = $row["physicalexam"];  
	  $diagnosis = $row["diagnosis"]; 
	  $date = $row["date"]; 
    // echo the output to browser 
	
    echo "
	 <br /> Doctor Name : $doctorname  
    <br /> History : $history  
    <br />Chief Complain : $chiefcomplaint  
	<br />Physical Exam : $physicalexam  
	<br />Diagnosis : $diagnosis  
	<br />Visit Date : $date 
    <hr/>";  
}   
// close mysql connection  
mysql_close(); 
?> <br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>