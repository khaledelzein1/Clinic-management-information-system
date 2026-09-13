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
INPUT {
background-color: white;
color: black;
font-family: cooper black;
font-size: 16 pt
}
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}

</style>
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> <br>
		<img border="0" src="images/xr2.jpg" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="report2.php" method="POST">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="xray1.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>X_RAY STATISTICS</b>
                 
 </font></td>
				  
                
				 
             
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="3" height="7" bgcolor="red"></td>
        </tr>
		
        <tr valign="top"> 
          <td colspan="3" height="18"> 

            
                  <div class="imagebox">
                  <br>
					  
					   <center><table align="center" border="0" width="40%"  background="images/log2.jpg">
              <tr > 
						 <td align="center">
						  <form action="bymedical4.php" method="post""> 
               <input type="submit" value="VIEW ALL X_RAY 
REQUESTED FROM DOCTOR" style="height:60" style="width:100%"/> 
               </form></td>
			   <td> <form action="bymedical1.php" method="post""> 
               <input type="submit" value=" REPORTS BY MEDICAL NUMBER 
AFTER  RESULT" style="height:60" style="width:100%"/> 
               </form>
						  
				</td></tr><tr>
				<td align="center">
						  <form action="byorder.php" method="post""> 
               <input type="submit" value=" REPORTS BY ORDER NUMBER 
AFTER RESULT" style="height:60" style="width:100%"/> 
               </form>
			   </td><td> <form action="bynam2.php" method="post""> 
               <input type="submit" value=" REPORTS LAST VISIT'S" style="height:60" style="width:100%"/> 
               </form>
						  
				</td></tr>	<tr>
				<td colspan="2"> <form action="byxray4.php" method="post""> 
               <input type="submit" value=" REPORTS BY DATE AFTER ENTER RESULT'S " style="height:60" style="width:100%"/> 
               </form>
						  
				</td></tr>		  
						 
						
                           
						
</table></center>
					  
					  
					  
					  
					  
					  
					  
					  
					  
                       
						
                         
</body>
</html>
