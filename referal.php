

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
<title>referal</title>

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
<style>
.aa{
background-color:#99ccff;
color: black;
font-family: cooper black;
font-size: 10 pt
}
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
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}
.listbox{ 
background-color: #99ccff;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}
TEXTAREA {
background-color:white;
border: black 0px solid;
color: black;
font-family: arial, verdana, ms sans serif;
font-size: 12pt;
font-weight: normal
} 


.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 

-->
</style>
<script language="javascript">
 function controler(a){
         if(isNaN(a.value)){
                 alert("ATTENTION MEDICAL NUMBER:INTEGER VALUE");
                 a.value="";
         }
 }

  </script>
  <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/CalendarPopup.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/AnchorPosition.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/PopupWindow.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/date.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/dhtmlgoodies_calendar.js"></SCRIPT>
	
	<SCRIPT LANGUAGE="JavaScript">
		var calendar = new CalendarPopup();
	</SCRIPT>
	
	
	
 
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
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  	  
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid2.php"><b>BACK</b></a></font></td>
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid2.php"><b>HOME</b></a></font></td>  
			    
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>REFERRAL TO HOSPITAL FORM</b>
                  </font></td>
				  
                
				 
             
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="red"></td>
        </tr>
		
        <tr valign="top"> 
          <td colspan="4" height="18"> 

            
                  <div class="imagebox">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top" height="400" width="150"> 

 <form  action="referal.php" id="referal" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
 
<?php

$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";

$d7="";
$d8="";


include"bdd.php";



if(isset($_POST["add"]))
{
$d1=$_POST["referalid"];
$d2=$_POST["medicalnumber"];

$d4=$_POST["financial"];
$d5=$_POST["diagnosis"];
$d6=$_POST["tohospital"];
$d7=$_POST["refdate"];
$d8=$_POST["not"];
$d="select doctor.doctorid from doctor where doctor.username='".$_SESSION['userid']."' ";
$res1=mysql_query($d);
$p=mysql_fetch_array($res1);
$sql="insert into referal(patientid,doctorid,financial,diagnosis,tohospital,referaldate,notes) VALUES ('".$d2."','" .$p[0]."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."')";
mysql_query($sql);

if($sql==0){

echo"<script>alert(\" REGISTRATION DONE  \")</script>";
}
else{
echo"<script>alert(\"ATTENTION REGISTRATION FAILED\")</script>";
}


}
 
 

?>

<br><br>

<TABLE style="width:1000" BORDER=0  background="images/log2.jpg">
<tr><td><b><u>REFERAL TO HOSPITAL FORM</u></b></td></tr>
<TD><INPUT TYPE="hidden"  NAME="referalid"  value="<?php echo $d1;?>" ></TD><tr>
<TD><b>MEDICAL NUMBER:</b></TD>
<TD><INPUT TYPE="text"  NAME="medicalnumber"  value="<?php echo $d2;?>" onChange="controler(this)"; ></TD>
<tr>
<TD><b>FINANCIAL CATEGORY:</b></TD>
<TD><textarea  NAME="financial"  style="width:200" style="height:60"  value="<?php echo $d4;?>"></textarea></TD>

<TD><b>DIAGNOSIS:</b></TD>
<TD><textarea  NAME="diagnosis"  style="width:200" style="height:60"  value="<?php echo $d5;?>"></textarea></TD></tr><tr>

<TD><b>REFERAL TO HOSPITAL:</b></TD>
<TD><input type="text" NAME="tohospital" size=20  value="<?php echo $d6;?>"></TD>
<TD><b>REFERAL DATE:</b></TD>
<td  >
				<div align="left" style="float:left">
                    <input name="refdate"  type="text" size="17" class="input"  value="<?php echo date("20y-m-d",time())?>">
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['referal'].refdate,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
				</td>

</tr><tr>
<TD><b>NOTES:</b></TD>
<TD colspan="6"><textarea  NAME="not"  style="width:500" style="height:60"  value="<?php echo $d8;?>"></textarea></TD>
</tr><tr>
<td><input type="submit" align="center" style="height:50" calss="aa" style="width:200" border="3"  value="---- S A V E ----" name="add" > </td>
 
<td colspan="6"><a href="printreferal.php"><b><center>PRINT REFERRAL TO HOSPITAL<br> REPORT </center></b></a></td></tr>
</table>

  <br>
</form>




</html>

</body>



 

  
  
   

 







  
  
  






