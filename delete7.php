
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['immunizationid']) && is_numeric($_GET['immunizationid'])) { 
   // get id value
    $immunizationid = $_GET['immunizationid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM immunization WHERE immunizationid=$immunizationid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editimmunization.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editimmunization.php"); } ?>