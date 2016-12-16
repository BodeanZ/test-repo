<?php
session_start();
echo 'some text in branch feature/usefulFeature';
for($i = 0; $i < 10; $i++)
	echo 'iteration ' . $i . '<br />';
echo 'some changes';
?>