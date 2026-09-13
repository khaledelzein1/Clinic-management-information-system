<html>

<body  background="images\log.jpg"  style="width:100%" style="height:100%" bgcolor="#33FFFF">


<table  width="100%" border="0" cellspacing="0" cellpadding="0">
<br><font  size="+10"><h2><center>CLINIC MANAGEMENT INFORMATION SYSTEM</center></h2></font><br><hr>
<br><br>

<center><table bgcolor="#00FFFF"  border=1  >
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp


<html>
 
<head>
 
<style type="text/css">
 
.clockStyle {
 
	background-color:#000;
 
	border:#999 2px inset;
 
	padding:6px;
 
	color:#0FF;
 
	font-family:"Arial Black", Gadget, sans-serif;
 
        font-size:16px;
 
        font-weight:bold;
 
	letter-spacing: 2px;
 
	display:inline;
 
}
 
</style>
 
</head>
 
<body>

<div id="dateDisplay" class="clockStyle"></div>
<div id="clockDisplay" class="clockStyle"></div>
<SCRIPT language="JavaScript">
<!-- Script courtesy of http://www.web-source.net - Your Guide to Professional Web Site Design and Development
var today_date= new Date()
var today=today_date.getDate()
 var month=today_date.getMonth()+1

var year=today_date.getFullYear()
//document.write("Today's date is: ")
var mydate = document.getElementById('dateDisplay');
mydate.textContent = today+"-"+month+"-"+year ;
mydate.innerText = today+"-"+month+"-"+year ;
 

//-->
</SCRIPT> 
 
<script type="text/javascript" language="javascript">
 
function renderTime() {
 
	var currentTime = new Date();
 
	var diem = "AM";
 
	var h = currentTime.getHours();
 
	var m = currentTime.getMinutes();
 
    var s = currentTime.getSeconds();
 
	setTimeout('renderTime()',1000);
 
    if (h == 0) {
 
		h = 12;
 
	} else if (h > 12) { 
 
		h = h - 12;
 
		diem="PM";
 
	}
 
	if (h < 10) {
 
		h = "0" + h;
 
	}
 
	if (m < 10) {
 
		m = "0" + m;
 
	}
 
	if (s < 10) {
 
		s = "0" + s;
 
	}
 
    var myClock = document.getElementById('clockDisplay');
 
	myClock.textContent = h + ":" + m + ":" + s + " " + diem;
 
	myClock.innerText = h + ":" + m + ":" + s + " " + diem;
 
}
 
renderTime();
 
</script>

 
</body>
 
</html>
 

</center> <br>

<form  method="post" name="form1">
<style type="text/css">
<!--
INPUT {
background-color: #00FFFF;
color: black;
font-family: cooper black, verdana, ms sans serif;
font-weight: bold;
font-size: 16pt
} 




.altTextField {
background-color: #ececec;
font-family: verdana;
font-size: 12pt;
color: black;
} 

-->
</style>
<tr><td colspan="2"><pre><h2><center><font color="black">LOG IN</font></center></h2></td></tr>
<td>
<pre><h2><center><font color="black"> USER NAME:</font></center></h2></td>
<td><input type="txt" size="21" name="username" class="altTextField" ></td></tr>
 <tr><td>
<pre><h2><center><font color="black">PASSWORD</font></center></h2></td>
<td><input type="password" size="21" name="password" class="altTextField"></center></td></tr>
<td>
<center><input  type="submit" name="ok" value="
CONNECT

"></td></center>
<td><IMG height="90" width="220" SRC="images\imagesCAWM4CG3.jpg" ></td>
</pre>
</form>
 </table>
 <center><a href="updatepass.php">Forget Password</a></center>
 
 
 </center>
 <br><br><br>
<center><b> CMIS@2012<br>Approvided by:khaled el zein</b></center> 
<?php
 include"bdd.php";
 include"session.php";
  $seldb = mysql_select_db("clinic");
  if ($seldb==false) {
    echo "La base de donnees n'existe pas";
    exit ;  }
if(isset($_POST["ok"])){
$u=$_POST["username"];
$p=$_POST["password"];
$password=md5($p);
  $sql = "select * from security where username='".$u."' and password='".$p."';";
  $res = mysql_query($sql,$link);

if (mysql_num_rows($res)==0)
echo"<script>alert(\" ATTENTION:MAKE SHURE USERNAME AND PASSWORD ARE CORRECT\")</script>";
 else
       {

       $_SESSION["user"] = $u;
       $_SESSION["pwd"] = $p;
        header("Location:datagrid.php"); }
}

?>


</body>
</html>
