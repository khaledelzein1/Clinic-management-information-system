
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['xrayresultid']) && is_numeric($_GET['xrayresultid'])) { 
   // get id value
    $xrayresultid = $_GET['xrayresultid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM xrayresult WHERE xrayresultid=$xrayresultid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editxrayres.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editxrayres.php"); } ?>