<?php
     $str = "This is";
     echo $str;
     echo "<br>";
     $lenn=strlen($str);
     echo "The length of string is <br>";
     echo $lenn;
     echo "<br>The length of string is ".$lenn." Thank you<br>";
     /*To concate two string or one string & one intiger use '.' as concating operator */
     echo "The number of words in string is ".str_word_count($str)."<br>";
     echo "The reversed string is ".strrev($str)."<br>";

     echo "The search for positon index of substring 'his' is ".strpos($str,"his")."<br>";

     echo "The replaced string is ".str_replace("is","at",$str);
     /*syntax for replace string 
     str("string want to remove","string want to add",string variable);*/

?>