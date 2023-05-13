<?php
$str="This is a string";
echo $str;
$leng= strlen($str);
echo "<br>The length of the string is:".$leng; //(.)Concatination Operator
echo "<br>The number of word in this string is ".str_word_count($str)."<br>";
//echo $leng;
echo "The reverse of the string is:".strrev($str);
echo "<br>The search of ing is:".strpos($str,"ing");
echo "<br>The replaced string is:".str_replace("is","at",$str);
?>