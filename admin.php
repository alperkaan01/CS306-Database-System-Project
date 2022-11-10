<?php 

include "config.php";

?>

<form action="delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT aid, name FROM athletes";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $aid = $id_rows['aid'];
        $name = $id_rows['name'];
        echo "<option value=$aid>". $name  . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>