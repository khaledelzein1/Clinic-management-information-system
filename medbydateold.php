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
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> <br>
		<img border="0" src="images/med.jpg" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="med1.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>PATIENT MEDICATION HISTORY</b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
			
		
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="7" bgcolor="red"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="2" height="18"> 
            <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
              <br><br><br>
<form action="formmed1.php" method=POST>
<style type="text/css">
<!--
INPUT {
background-color: #99ccff;
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
TEXTAREA {
background-color:#FFE87C;
border: black 0px solid;
color: #000000;
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
  <script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
{
var required=['medicalnumber','fromdate','todate'];
// Place in this array the name of the form that you think should be mandatory
var bool=true; // Create bool variable and set its value to true
for(var i=0;i<required.length;i++)
{
if(document.getElementsByName(required[i])[0].value=='')
{
alert(required[i]+' CMIS-FIELD IS MANDATORY.');
bool=false;
}
}
return bool;
}
}
</script>

<?php
 if(isset ($_POST["cancel"]))
	  header("location:lstnews.php");
?>


<script language="JavaScript" type="text/javascript" src="calendrier/js/rte/richtext.js"></script>
<body background="images/p9.GIF">
<br><br>
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
	
	

 <table>
			  <tr>
                <td  >date debut : </td>
                <td style="WIDTH: 274px" >
				<div align="left" style="float:left">
                    <input name="startDate"  type="text" class="input" >
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['form1'].startDate,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="../images/insert_table.gif" border=0 ></A>
				</div>
				</td>
              </tr>
			  <tr>
                <td >date fin :  </td>
                <td style="WIDTH: 274px" >
				<div align="left" style="float:left">
                    <input name="endDate" type="text" class="input" >
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['form1'].endDate,'anchor2','yyyy-MM-dd');return false;" NAME="anchor2" ID="anchor2"><img src="../images/insert_table.gif" border=0></A>
				</div>
				</td>
              </tr>    
          </table>
		




<script language="JavaScript" type="text/javascript">
function submitForm() {
	updateRTEs();
}

initRTE("images/", "", "");

</script>

	
<TABLE  align="center"  BGCOLOR="#56A5EC">
<tr>
<TD colspan="2"><center><b>MEDICAL NUMBER:*</b><input type="text"  name="medicalnumber" size=20 onChange="controler(this)";></center></TD></tr>
<tr><TD><b>FROM DATE:*</b><input  type="text" name="fromdate" size=20><A HREF="#" onClick="calendar.select(document.forms['form1'].endDate,'anchor2','yyyy-MM-dd');return false;" NAME="anchor2" ID="anchor2"><img src="images/insert_table.gif" border=0></A></TD><TD><b>TO DATE:*</b><input type="text" name="todate" size=20><A HREF="#" onClick="calendar.select(document.forms['form1'].endDate,'anchor2','yyyy-MM-dd');return false;" NAME="anchor2" ID="anchor2"><img src="images/insert_table.gif" border=0></A></TD></tr>



<td align="center" colspan="2">
 <input type="submit" name="bt_search" value="-------- S E A R C H --------">
</tr>
</table>
</form> 
