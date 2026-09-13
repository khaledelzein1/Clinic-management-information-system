
   <table align="center">
  <tr><td><img  align="center"  width="500" src="images/appoin1.jpg" ></td></tr>
</table>
   
  
  <?php
// Make a MySQL Connection
 include"bdd.php";

$query = " SELECT distinct sick.patientid,patient.patientfirstname,doctor.doctorname,sick.diagnosis,sick.day,sick.fromdate,sick.todate FROM sick,patient,doctor where doctor.doctorid=sick.doctorid and  patient.patientid=sick.patientid and sick.patientid='".$_POST["medicalnumber"]."' and sick.date= '".$_POST["date"]."'";
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo "<center><h2><br><u><font color=red>MEDICAL REPORT</u></h2></center>";
echo "<center><table><tr><td> Medical Number : ". $row['patientid'] ."</td><td> Doctor Name : ". $row['doctorname'] ."</td></tr>";
echo "<tr><td>Patient Name : ". $row['patientfirstname'] ."</td></tr></table>";
	echo "<br><table><tr><td><center><h3>I have examined the patient ". $row['patientfirstname'] ."<br> in my clinic and i found the patient is suffering<br> from ". $row['diagnosis'] ."<br> 
	and the patient needs  rest for ". $row['day'] ." days <br> From ". $row['fromdate'] ." To ". $row['todate'] ." </center></h3>. </td></tr></table></center>";
	echo "<br />";
}
?>
<br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>
<html>
 
<head>
 
 <script language="javascript">
 function printpage()
  {
   window.print();
  }
 </script>
 </head>
 
<body>
 
<form>
 <input type="button" value="Print" onClick="printpage();">
 </form>
 </body>
 
</html>