<?php 
ob_clean(); //cleaned the output buffer of header.php

echo '<pre>';

//print_r($_SERVER);
$conn = mysqli_connect(
    $_SERVER['DB_HOST'],
    $_SERVER['DB_USER'],
    $_SERVER['DB_PASSWORD'],
    $_SERVER['DB_NAME']
);

print_r($conn);

exit();
?>
