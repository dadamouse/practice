<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($str)
{
    if (!empty($str)) {
        $tmp = [];
        for ($i=0; $i<strlen($str); $i++) {
           // echo $S[$i]."\n";
            
            switch ($str[$i]) {
                case '{':
                case '[':
                case '(':
                    $tmp[] = $str[$i];
                    break;
                case '}':
                    if (!checkChar('{', $tmp)) {
                        return 0;
                    }
                    break;
                case ']':
                    if (!checkChar('[', $tmp)) {
                        return 0;
                    }
                    break;
                case ')':
                    if (!checkChar('(', $tmp)) {
                        return 0;
                    }
                    break;
            }
        }
        if (!empty($tmp)) {
            return 0;
        }
        
        return 1;
    }
    return 1;
    // write your code in PHP7.0
}

function checkChar($char, &$tmp)
{
    $match = array_pop($tmp);
   // echo "\n".$char."@@".$match."\n";
    //var_dump($tmp);
    return ($char == $match) ? true : false;
}
