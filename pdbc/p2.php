<?php

//wap in php to connect to mysql database

define('HOST','localhost:3308');
define('USER','root');
define('PASSWORD','');
define('DBNAME','app2021');

try{
    
    if($conn = mysqli_connect(HOST,USER,PASSWORD,DBNAME)){
            print_r($conn);
}else{
     throw new Exception();
}
}catch(Exception $e){
    var_dump($e->getMessage());
    exit('Connection Error'.mysqli_connect_error($conn));

}

