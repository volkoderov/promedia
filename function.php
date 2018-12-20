<?php

if ($_POST['text']){
	$text=$_POST['text']."<br>";
	$text=preg_replace('#\*\*(.*?)\*\*#s', '<b>$1</b>', $text);
	$text=preg_replace('#\*(.*?)\*#s', '<i>$1</i>', $text);
	$text = str_replace("\n", "<br>", $text);
	$text=preg_replace('#\#(.*?)\<br\>#s', '<h1>$1</h1>', $text);
	echo ($text);
} 