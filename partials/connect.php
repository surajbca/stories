<?php

$con = new mysqli('localhost', 'root', '#Surajmysql7481', 'Stories');
if ($con) {
    echo '';
} else {
    die(mysqli_error($con));
}

?>
