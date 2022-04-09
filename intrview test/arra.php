<?php
$emp=[
    [1,"Jagriti","CS",5000], 
    [2,"Vaishali","IT",4000],   
    [3,"Nehali","CS",4000],  
    [4,"Ravina","CS",2500],   
    [5,"Akansha","CS",3500]
];
echo "<table border=2>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>BRANCH</th>";
echo "<th>SALARY</th>";
echo "</tr>";
foreach ($emp as $a)
{
   echo "<tr>";
{
 foreach($a as $b)
echo "<td> $b </td>";
}
echo "</tr>";
}
echo "</table>";
?>