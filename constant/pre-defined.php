<?php

//wap in php to show total pre-defined constan in php
 
$count = count(get_defined_constants());
printf('The total constants = %d',$count);

print_r(get_defined_constants());

?>