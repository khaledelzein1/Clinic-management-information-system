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
</table>
  <?php
// Make a MySQL Connection
 include"bdd.php";

$query = " SELECT distinct referal.patientid,patient.patientfirstname,doctor.doctorname,referal.diagnosis,referal.financial,referal.diagnosis,referal.tohospital,referal.referaldate,referal.notes FROM doctor, referal,patient where  referal.doctorid=doctor.doctorid and patient.patientid=referal.patientid and referal.patientid='".$_POST["medicalnumber"]."' and referal.referaldate= '".$_POST["date"]."'";
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo "<br><tr><td><center><h2><br> <u><font color=red> REFERAL TO HOSPITAL </u></h2></center><center> </td></tr></table></center>";
echo "<center><table><tr><td><b> Medical Number :</b> ". $row['patientid'] ."</td><td><b> Doctor Name : </b> ". $row['doctorname'] ."</td></tr>";
echo "<tr><td><b>Patient Name :</b> ". $row['patientfirstname'] ."</td></tr></table>";
echo "<br><table><tr><td><b>Referral To Hospital : </b> ". $row['tohospital'] ."</td></tr>";
echo "<tr><td><b>Diagnosis : </b>". $row['diagnosis'] ."</td></tr>";
echo "<tr><td><b>Financial Category :</b> ". $row['financial'] ."</td></tr>";

echo "<tr><td><b>Referral Date :</b> ". $row['referaldate'] ."</td></tr>";
echo "<tr><td><b>Doctor Notes :</b> ". $row['notes'] ."</td></tr></table>";
echo "<br />";
}
?>
<br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>