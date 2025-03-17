<?php
echo date("m");
echo date("d");
echo date("Y");
echo "<br>";
echo date("d-m-Y");

echo "<br>";

echo date("d-m-Y H:i:s");

echo "<br>";

echo date("l, d F Y H:i:s");

echo "<br>";

echo date("jS F Y, l");

echo "<br>";

echo date("h:i:sa");

echo "<br>";

echo date("Y-m-d H:i:s", strtotime("now - 1 week"));

echo "<br>";

date_default_timezone_get();
echo "<br>";
date_default_timezone_set("Asia/Kolkata"); // Set the default timezone
?>