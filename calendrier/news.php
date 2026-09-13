<?php
 if(isset ($_POST["cancel"]))
	  header("location:lstnews.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script language="JavaScript" type="text/javascript" src="richtext.js"></script>
<body background="images/p9.GIF">
<br><br>
 <SCRIPT LANGUAGE="JavaScript" src="js/CalendarPopup.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="js/AnchorPosition.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="js/PopupWindow.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="js/date.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="js/dhtmlgoodies_calendar.js"></SCRIPT>
	
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
	
	
<form id="form1" method="post" enctype="multipart/form-data" name="RTEDemo" onsubmit="submitForm();">
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



</html>
