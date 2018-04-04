#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $arr = array_diff(explode(' ', $str), array(''));
        return $arr;
    }

    $result = array();
    for ($i = 1; $i < $argc; $i++)
        $result = array_merge($result, ft_split($argv[$i]));
    sort($result);
    foreach ($result as $item)
        echo $item . "\n";
?>