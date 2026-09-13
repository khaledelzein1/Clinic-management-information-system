
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['sickid']) && is_numeric($_GET['sickid'])) { 
   // get id value
    $sickid = $_GET['sickid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM sick WHERE sickid=$sickid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editsick.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editsick.php"); } ?>