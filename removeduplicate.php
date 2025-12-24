<?php
function removeDuplicates($array){
$result = array_values(array_unique($array));
return $result;
}
$sortedlist = [1,1,2,2,3,3,4,4,5,5];
$uniquelist = removeDuplicates ($sortedlist);
echo "original list:";
print_r ($sortedlist);
echo "<br> uniquelist:";
print_r ($uniquelist);
?>