<?php
session_start();
echo 'something else';
while($i = 0; $i < 10; $i++)
	echo 'iteration ' . $i . '<br />';
?>