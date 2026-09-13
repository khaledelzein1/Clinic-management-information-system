
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['referalid']) && is_numeric($_GET['referalid'])) { 
   // get id value
    $referalid = $_GET['referalid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM referal WHERE referalid=$referalid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editreferal.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editreferal.php"); } ?>