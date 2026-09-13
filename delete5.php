
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['xrayid']) && is_numeric($_GET['xrayid'])) { 
   // get id value
    $xrayid = $_GET['xrayid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM xray WHERE xrayid=$xrayid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editxray.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editxray.php"); } ?>