
   <table align="center">
  <tr><td><img  align="center"  width="500" src="images/appoin1.jpg" ></td></tr>
</table>
<?php
include"bdd.php";
{
$sql2 ="select patient.patientid,patient.patientfirstname,doctor.doctorname,immunization.immunizationdate,immunization.immunizationname,immunization.doctornote from patient,immunization,doctor where immunization.doctorid=doctor.docotorid and  patient.patientid=immunization.patientid and patient.patientid='".$_POST["medicalnumber"]."' order by immunization.immunizationid";

$result = mysql_query($sql2) or die(mysql_error());
$row = mysql_fetch_array($result);
echo "<tr><td><center><h2><br> <u> <font color=red>Vaccination Report</u></h2></center><center> </td></tr></table></center>";
echo "<center><table><tr><td><b> Medical Number :</b> ". $row['patientid'] ."</td><td><b> Doctor Name : </b> ". $row['doctorname'] ."</td></tr>";
echo "<tr><td><b>Patient Name :</b> ". $row['patientfirstname'] ."</td></tr></table>";

$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" ATTENTION: NO RESULT FOUND \")</script>";
    // Affichage des produits
  else { ?>
<br><br><br>
     <TABLE  border="1"align="center" >
<?php

  echo " <th><b>VACCINATION NAME</b></th><th><b>DOCTOR NOTES</b></th><th><b>ORDER DATE</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
        $lig = "<tr><td><center>" .
               $data[4]. "<td><center>".$data[5]. "<td><center>".$data[3];
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
  <br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>

 </form>

