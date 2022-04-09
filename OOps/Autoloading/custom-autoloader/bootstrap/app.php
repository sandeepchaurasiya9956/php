<?php
#echo "From app.php <br>";

$clsaa_folder = scandir(dirname(__DIR__).'/class');
unset($class_folder[0],$class_folder[1]);

$allow_files = [
    'student.php',
    'Teacher.php'
];

foreach($class_folder as $file){
    if(in_array($file,$allow_files)){
        require_once dirname(__DIR__).'/class'.$file;
    }
}
?>