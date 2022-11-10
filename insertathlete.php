<?php 

include "config.php"; 

if (!empty($_POST['name']) && !empty($_POST['profession']) && !empty($_POST['age']) && !empty($_POST['contact_info']) && ($_POST['gender'] != "")){  
    $name = strtoupper($_POST['name']); 
    $profession = $_POST['profession']; 
    $age = $_POST['age'];
    $contact_info = $_POST['contact_info']; 
    $gender = $_POST['gender']; 
    $sql_statement = "INSERT INTO athletes(name, profession, age, contact_info, gender) VALUES ('$name', '$profession' ,$age, '$contact_info', '$gender' )"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You have to enter all fields!";
}

?>
