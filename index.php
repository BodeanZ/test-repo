<?php
session_start();
echo 'something in master branch';
while($i = 0; $i < 10; $i++)
	echo 'iteration ' . $i . '<br />';
echo 'some changes';
?>