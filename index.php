<meta charset="Utf-8">
<?php
$names[0]="Апельсин";
$names[1]="Банан";
$names[2]="Груша";
$names[3]="Помидор";
$names[4]="Огурец";
echo "<br>";
echo "<pre>";
print_r($names);
echo "</pre>";


//
///
//
$names[0]="Апельсин";
$names[1]="Банан";
$names[2]="Груша";
list($names[0], $names[1], $names[2]) = $names;
print_r($names)


?>
