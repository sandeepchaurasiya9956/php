<?php

//wap in php to show exception-handling

$x = readline('Enter the x value :');
$y = readline('Enter the y value :');
$result = 0; 

try{
    
    echo "Block of try started...\n";
    if($y==0){
        throw new Exception;
}else{
   $result = $x/$y;


}    

   echo "Block of try endeded.......\n";


}catch(Exception $e){

echo "Some Exception Raised".$e->getMessage();

}finally{

echo "This block will be, executed...\n";
echo "The Result = $result \n";

}