<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM athletes"; //sql query 

$result = mysqli_query($db, $sql_statement); // Executing query, returns bool to show if it was successful

//transforms it to a list 
while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $athlete_id = $row['aid']; //reading columns
    $athlete_name = $row['name']; 
    $profession = $row['profession'];
    $age = $row['age']; 
    $contact_info = $row['contact_info']; 
    $gender = $row['gender'];  
    echo $athlete_id . " " . $athlete_name . " " . $profession . " " . $age . " " . $contact_info ." " . $gender . "<br>";  //printing out the values 
    //. is to concatanate 
} 

?>