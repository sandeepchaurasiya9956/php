<?php

include __DIR__.'/dbconnect.php';
 $create="CREATE TABLE Chaurasia(name varchar(20),email varchar(20));";

mysqli_query($conn,$create);