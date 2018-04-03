#!/usr/bin/php
<?php

function ft_split($str)
{
    $arr = array_diff(explode(' ', $str), array(''));
    return $arr;
}

//function ssap($argc, $argv)
//{
    $result = array();
//    array_shift($argv);
//    foreach ($argv as $item)
//        $result = array_merge($result, ft_split($item));
    for ($i = 1; $i < $argc; $i++)
        $result = array_merge($result, ft_split($argv[$i]));
    sort($result);
    foreach ($result as $item)
        echo $item . "\n";

//}
//ssap($argc, $argv);
?>