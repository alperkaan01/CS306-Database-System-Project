<?php 

include "config.php"; 

$sql_statement = "SELECT * FROM athletes";

if (!empty($_POST['name']) || !empty($_POST['profession']) || !empty($_POST['age']) || !empty($_POST['gender'])) {

    $sql_statement .= " WHERE";

    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        $sql_statement .= " name = '$name' AND";
    }

    if (!empty($_POST['profession'])) {
        $profession = $_POST['profession'];
        $sql_statement .= " profession = '$profession' AND";
    }

    if (!empty($_POST['age'])) {
        $age = $_POST['age'];
        $sql_statement .= " age < $age AND"; //age smaller than given age
    }

    if (!($_POST['gender'] == "")) {
        $gender = $_POST['gender'];
        $sql_statement .= " gender = '$gender'";
    }

    if (str_ends_with($sql_statement, " AND")) {
        $sql_statement = rtrim($sql_statement, " AND");
    }  

    //echo $sql_statement;

}

//echo $sql_statement;

$result = mysqli_query($db, $sql_statement);

    //transforms it to a list 
while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $athlete_id = $row['aid']; //reading columns
    $athlete_name = $row['name']; 
    $profession = $row['profession'];
    $age = $row['age']; 
    $contact_info = $row['contact_info']; 
    $gender = $row['gender'];  
    echo $athlete_id . " " . $athlete_name . " " . $profession . " " . $age . " " . $contact_info ." " . $gender . "<br>";
}

?>