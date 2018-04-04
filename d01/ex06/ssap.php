#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $arr = array_diff(explode(' ', $str), array(''));
        return $arr;
    }

    $result = array();
    for ($i = 1; $i < $argc; $i++)
    {
        $tmp = ft_split($argv[$i]);
        foreach ($tmp as $item)
            $result[] = $item;
    }
    sort($result);
    foreach ($result as $item)
        echo $item . "\n";
?>