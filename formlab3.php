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
  <tr><td><img  align="center"  src="images/picvis.jpg" ></td></tr>
</table>
<?php
echo "<tr><td><center><h2><br> <u>LABORATORY  REPORT</u></h2></center><center> </td></tr></table></center>";
include"bdd.php";
{
$sql2 = "select laboratory.laboratoryid, patient.patientid,patientfirstname,laboratory.doctorname,laboratory.testname,labresult.labresult,labresult.notes,laboratory.orderdate,labresult.labresultdate from patient,laboratory,labresult where patient.patientid=laboratory.patientid and laboratory.laboratoryid=labresult.laboratoryid and laboratory.laboratoryid='".$_POST["ordernumber"]."'";
$res = mysql_query($sql2);

  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" ATTENTION: NO RESULTS FOR THIS ORDER NUMBER \")</script>";
    // Affichage des produits
  else { ?>
<br>
     <TABLE  border="1"align="center" >
<?php

  echo "<th><b>OR</b></th><th><b>MR</b></th><th><b>PATIENT NAME</b></th><th><b>DOCTOR NAME</b></th><th><b>TEST NAME</b></th><th><b>TEST RESULT</b></th><th><b>DOCTOR NOTES</b></th><th><b>ORDER DATE</b></th><th><b>RESULT DATE</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[1]. "<td><center>" . $data[2]. "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5]. "<td><center>" . $data[6]. "<td><center>" . $data[7]. "<td><center>" . $data[8];
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
 <br /><br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>

 </form>

