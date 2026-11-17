
<?php

$db = mysqli_connect(
    "localhost",
    "YOUR_DATABASE_USERNAME",
    "YOUR_DATABASE_PASSWORD",
    "library management1"
);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
