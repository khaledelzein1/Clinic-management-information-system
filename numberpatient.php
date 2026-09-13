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
 <center><h2><u><font color="red"> NUMBER OF PATIENT'S VISITED CLINIC</u></h2></center>
<?php
include"bdd.php";
{
$sql2 = "select patient.patientid,patientfirstname,patient.patientregistrationdate from patient where  patient.patientregistrationdate between '".$_POST["FROMDATE"]."' and '".$_POST["TODATE"]."' order by patientregistrationdate  ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" NO RESULT FOUND \")</script>";
    // Affichage des produits
  else { ?>
<br>
     <TABLE  border="1"align="center" >
<?php

  echo "<th><b>MEDICAL NUMBER</b><th><b>PATIENT NAME</b></th><th><b>REGISTRATION DATE</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[1]. "<td><center>" . $data[2];
       echo $lig;
    }
    echo "</TABLE>";
  }
//$sql1 = "select idemployer,nameemployer,position from employer where employer.idemployer='".$_POST["txtsearch"]."'";
//$res1=mysql_query($sql1,$link);
//if(mysql_num_rows($res1)==0) echo"<br>Pas d'offre sur ce medicament";
//else{?><br />
  <?php
// Make a MySQL Connection

$query = "SELECT  COUNT(patientid) FROM patient where  patient.patientregistrationdate   between '".$_POST["FROMDATE"]."' and '".$_POST["TODATE"]."' order by patientregistrationdate  ";
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo "<center>THERE ARE ". $row['COUNT(patientid)'] ." PATIENTS.";
	echo "<br />";
}
?>
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
 



  <br /><br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>

 </form>

