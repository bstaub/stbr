<?php

$name = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
/*
$name = $_REQUEST['name'];
$city = $_REQUEST['city'];
*/

$name = $_POST['name'];
$city = $_POST['city'];
}


echo 'Hallo $name '.chr(13).chr(10).'<br/>';
echo 'Hoffe du lebst gut in $city';

?>