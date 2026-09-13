<?php
/*
 * connect to the database
 */
$dbLink = mysql_connect("127.0.0.1", "root", "");
  
if (!$dbLink) 
{
        print "Could not connect: ".mysql_error();
        exit(0);
}

if (!mysql_select_db("clinic", $dbLink)) 
{
        print "Could not select database: ".mysql_error();
        exit(0);
}

/*
 * read the data from the result set and output 
 * to the graphing software
 */
$sql    = "SELECT count(patientid),patientregistrationdate FROM patient group BY patientregistrationdate ";
$result = mysql_query($sql, $dbLink);
echo $result;
$dataNum = 1;
seriesMdataN = [DATA VALUE];

series1data1 = 345;
while ( $row = mysql_fetch_array($result,MYSQL_ASSOC) ) 
{
        echo "series1data1" . $dataNum . " = " . $row["patientid"] . PHP_EOL;
       
        $dataNum++;
}

/*
 * release the result set and close the databse connection
 */
mysql_free_result($result);
mysql_close($dbLink);

/*
 * all finished so exit
 */
exit(0);
?>
