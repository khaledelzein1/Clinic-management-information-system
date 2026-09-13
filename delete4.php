
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['labresultid']) && is_numeric($_GET['labresultid'])) { 
   // get id value
    $labresultid = $_GET['labresultid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM labresult WHERE labresultid=$labresultid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editlabres.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editlabres.php"); } ?>