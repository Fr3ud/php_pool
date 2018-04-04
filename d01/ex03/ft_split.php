<!--#!/usr/bin/php-->
<?php
function ft_split($str)
{
    $arr = array_diff(explode(' ', $str), array(''));
    sort($arr);
    return $arr;
}
//
//$arr = "   Hello a a    fsd g  00000 0  1 11 2";
//print_r(ft_split($arr));

?>