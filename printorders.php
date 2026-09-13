
   <table align="center">
  <tr><td><img  align="center"  width="500" src="images/appoin1.jpg" ></td></tr>
  <tr></tr>
  <tr><td><h2><center><u><font color="red">Medical Prescription</u></center></h2></td></tr>
</table>

  <?php
include"bdd.php";
{
$sql2 = "select  orders.patientid,orderdate,doctor.doctorname,ordertype,ordername,notes from doctor,orders where  doctor.doctorid=orders.doctorid and  orders.reservation1id='".$_GET["reservation1id"]."'  order by orderdate ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"NO Orders REQUESTED FOR THIS PATIENT";
    
  else { ?>

<TABLE align="center"  border="1" >
<?php

  echo "<th><b>MR</b></th><th><b>Order Date</b></th><th><b>Dr Name</b></th><th><b>Order Type</b></th><th><b>Order Name</b></th><th><b>Notes</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[1]. "<td>" . $data[2]. "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5];
       echo $lig;
    }
    echo "</TABLE>";
  }
}
?>
  <br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>

 </form>

