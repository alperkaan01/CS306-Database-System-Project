<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $aid = $_POST['ids'];
    $sql_statement = "DELETE FROM athletes WHERE aid = $aid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>