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
</style>
<style type="text/css">
<!--
INPUT {
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}
.listbox{ 
background-color: #99ccff;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}

.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 

-->
</style>
<SCRIPT LANGUAGE="JavaScript" src="calendrier/js/CalendarPopup.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/AnchorPosition.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/PopupWindow.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/date.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/dhtmlgoodies_calendar.js"></SCRIPT>
	
	<SCRIPT LANGUAGE="JavaScript">
		var calendar = new CalendarPopup();
	</SCRIPT>
	
	
	<SCRIPT>
	/*
function datevalid(){
d=window.document.form1.startDate.value;

     var t = d.split("-");
     if (t.length!=3) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     for (j=0;j<t.length;j++) 
       if (isNaN(t[j])) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     var j = parseInt(t[2]);
     var m = parseInt(t[1]);
     var a = parseInt(t[0]);
   if ((j<=0) || (m<=0) || (a<=0)) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     if (a%4==0) bs=true; else bs=false;
     if ( ( (j>30) && 
            ((m==4) || (m==6) || (m==9) || (m==11) ) ) ||
          ( (j>31) && 
            ((m==1) || (m==3) || (m==5) || (m==7)  || (m==8)  || (m==10)  || (m==12) ) ) ||
          ( (bs) && (j>29) && (m==2) ) ||
          ( (bs==false) && (j>28) && (m==2)||(m>12) )     
            ) 
			 {
        alert("Date invalide");
        v.value = ""; }
		
}
*/
</SCRIPT>
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> <br>
		<img border="0" src="images/med7.jpg" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="reservation.php" method="POST">
            <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  <?php
  include"bdd.php";
  ?>
  <?php
  if(isset($_POST["ref"]))
{

    $sql = "insert into reservation1 (reservation1id,patientid,doctorname,reservationdate,reservationtime,getdate) select * from reservation";


    $res = mysql_query($sql);
	$sql1 = "delete from reservation";
    $res1 = mysql_query($sql1);
	 if($sql==0){
	echo"<script>alert(\" SEND OK \")</script>";
}
else{
echo"<script>alert(\" NOT SEND TRY AGAIN\")</script>";
    
}


}


?>
<table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">  <tr align="center" bgcolor="#98AFC7"><td>

<form action="reservation.php" method="POST">
<TABLE  align="left"  width=20% BGCOLOR="#98AFC7"><td height="20">
<center><input type="submit"  value="    -------- S E N D --------    " style="height:25"  style="width:200"  name="ref"></center></td>


</TABLE></form></td>

 
            
			  <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="appointment.php"><b>BACK</b></a></font></td> 
			   <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22" width="750" ><font face="cooper black, Helvetica, sans-serif" size="3"><b>APPOINTMENT</b>
                  </font></td>
				  
                 <tr > 
          <td colspan="10" height="7" width="100%" bgcolor="red"></td>
        </tr>
				 
              
            

   
</table>
  <div class="imagebox">
</form>

			
            
</body>
</html>






<?php
$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";




include"bdd.php";

if(isset($_POST["add"]))
{
$d1=$_POST["resid"];
$d2=$_POST["medicalnumber"];
$d3=$_POST["ihs"];
$d4=$_POST["reservationdate"];
$d5=$_POST["restime"];
$d6=$_POST["getdate"];
//$r="select * from sagesse.employer where idemployer=".$d1;
//$res = mysql_query($r);
//if(mysql_num_rows($res)>0)
//echo"<h1>ce numero est deja utilisee</h1>";
//else
//{

	
$sql="insert into clinic.reservation (patientid,doctorname,reservationdate,reservationtime,getdate)values ('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."')";

echo"$sql";
mysql_query($sql);

if($sql==0){
echo"<script>alert(\" REGISTRATION DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION REGISTRATION FAILED\")</script>";
}
    }
	
	
 ?>
 <?php
 if(isset($_REQUEST["reservationid"]))
 {
 $req=$_REQUEST["reservationid"];
 $sql="select * from clinic.reservation where reservationid=".$req;
 $res = mysql_query($sql);
 $data=mysql_fetch_row($res);
 $d1=$data[0];
 $d2=$data[1];
 $d3=$data[2];
 $d4=$data[3];
 $d5=$data[4];
 $d6=$data[5];
 
 
}
if (isset($_POST["modifier"]))
    {
   $d1=$_POST["resid"];
$d2=$_POST["medicalnumber"];
$d3=$_POST["ihs"];
$d4=$_POST["reservationdate"];
$d5=$_POST["restime"];
$d6=$_POST["getdate"];

    $sql = "update reservation set patientid = '" .$_POST["medicalnumber"]. "',doctorname ='" .$_POST["ihs"]."',reservationdate='" .$_POST["reservationdate"]."', reservationtime ='" .$_POST["restime"]."', getdate='" .$_POST["getdate"]."' where reservationid = ".$_POST["resid"];
     $res = mysql_query($sql);
     if($sql==0){
echo"<script>alert(\" UPDATE OK \")</script>";
}
else{
echo"<script>alert(\" ATTENTION UPDATE FAILED\")</script>";
}
    }
if(isset($_POST["delete"]))
{
$d1=$_POST["resid"];
$d2=$_POST["medicalnumber"];
$d3=$_POST["ihs"];
$d4=$_POST["reservationdate"];
$d5=$_POST["restime"];
$d6=$_POST["getdate"];
    $sql = "delete from reservation where reservationid = ".$d1;
    $res = mysql_query($sql);
    if($sql==0){
echo"<script>alert(\" DELETE OK \")</script>";
}
else{
echo"<script>alert(\" ATTENTION DELETE FAILED\")</script>";
}

}

?>
<html>
<body  topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0">
<script language="javascript">
 function controler(a){
         if(isNaN(a.value)){
                 alert("ATTENTION MEDICAL NUMBER:INTEGER VALUE");
                 a.value="";
         }
 }

  </script>
  
<form  action="reservation.php" id="reservation" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">


<H3 ALIGN=left><b>RESERVATION</b></H3>
<TABLE width="700"    background="images/log2.jpg" align="left">
<tr><TD><INPUT TYPE="hidden" NAME="resid" SIZE=20 value="<?php echo $d1;?>"></TD></tr><tr>
<TD width="500"><b>MR:</b></TD>
<TD><INPUT TYPE=TEXT NAME="medicalnumber" SIZE=20 value="<?php echo $d2;?>" onChange="controler(this)";></TD>
<TD><b>DOCTOR NAME:*</b></TD>
<TD><select  width="100%" NAME="ihs"   value="<?php echo $d3;?>" class="listbox">
<option></option>
<option>KHALED ABOU HAMAD</option>
</select></TD></tr>

<TD><b>RESERVATION DATE:</b></TD>
 <td  >
				<div align="left" style="float:left">
                    <input name="reservationdate"  type="text" size="15" class="input"  value="<?php echo $d4;?>">
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['reservation'].reservationdate,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
				</td>


<TD><b>RESERVATION TIME:</b></TD>
<TD><select  width="100%" NAME="restime" width="100%"  value="<?php echo $d5;?>" class="listbox">
<option></option>
<option>8:00 </option>
<option>8:30 </option>
<option>9:00 </option>
<option>9:30 </option>		
<option>10:00 </option>		
<option>10:30 </option>		
<option>11:00 </option>		
<option>11:30 </option>		
<option>12:00 </option>		
<option>12:30 </option>		
<option>1:00 </option>		
<option>1:30 </option>		
<option>2:00 </option>		
<option>2:30 </option>		
<option>3:00 </option>		
<option>3:30 </option>		
<option>4:00 </option>		
<option>4:30 </option>		
<option>5:00 </option>		
<option>5:30 </option>	
<option>6:00 </option>		
<option>6:30 </option>		
<option>7:00 </option>		
<option>7:30 </option>		
<option>8:00 </option>		
<option>8:30 </option>		
<option>9:00 </option>		
<option>9:30 </option>		
<option>10:00 </option>		
<option>10:30 </option>		
<option>11:00 </option>		
<option>11:30 </option>		
<option>12:00 </option>	
<option>------------------------------------.</option>
		</select></tr><tr>




<TD><INPUT TYPE="hidden" NAME="getdate"  SIZE=30 value="<?php echo date("20y-m-d",time())?>"></TD>
</table><br><br><br><br><br><br>
<TABLE  BORDER=0 align="left" width=670   background="images/log2.jpg">


<td><input type="submit"   style="height:40"  style="width:80"  name="add" value="S A V E" ></td><td>
   <input type="submit" style="height:40"  style="width:80" value="MODIFY" name="modifier"></td><td>
  <input type="submit" value="DELETE" style="height:40"  style="width:80" name="delete"></td><td>
    <INPUT name="RESET" style="height:40"  style="width:80" TYPE=submit VALUE="CLEAR"></td>
	<td width="600"><a href="slip.php"><b><center>PRINT SLIP APPOINTMENT </center></b></a></td>
</table>
</form>

<?php
include"bdd.php";
$sql = "select reservation.reservationid,patient.patientid,patientfirstname,reservation.doctorname,reservationdate,reservationtime from patient,reservation where patient.patientid=reservation.patientid order by reservation.reservationid  ";
  $res = mysql_query($sql);
  
 ?> 
 <br><br><br>
<TABLE BORDER width="1000" align="left"  background="images/log2.jpg">
<?php
echo "<CAPTION><b><i>RESERVATION LISTS</i></b></CAPTION>" ;
echo "<th>SELECT</th><th>MR</th><th>PATIENT NAME</th><th>DOCTOR NAME</th><th>RESERVATION DATE</th><th>RESERVATION TIME</th>";
 for($n=0;$n<mysql_num_rows($res);$n++)
 {   if($n % 2==0)
 $bgcolor="white";
 else
 $bgcolor="#98AFC7";
  $data = mysql_fetch_row($res);
  $lig="<TR bgcolor=".$bgcolor."><TD><a href=\"reservation.php?reservationid=".$data[0]."\">".$data[0]."</a></TD><TD>".$data[1]."</TD><TD>".$data[2]."</TD><TD>".$data[3]."</TD><TD>".$data[4]."</TD><TD>".$data[5]."</TD></tr>";
  echo $lig;
    }
       ?>
</table>