#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $arr = array_diff(explode(' ', $str), array(''));
        return $arr;
    }
    if ($argc > 1)
    {
    $arr = ft_split($argv[1]);
        foreach ($arr as $key => $item)
            if ($key != 0)
                echo $item . ' ';
        echo $arr[0] . "\n";
    }

