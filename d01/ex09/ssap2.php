#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $arr = array_diff(explode(' ', $str), array(''));
        return $arr;
    }

    function ft_length($a, $b)
    {
        if (strlen($a) > strlen($b))
            return strlen($b);
        return strlen($a);
    }

    function ft_sort($a, $b)
    {
        $a = strtolower($a);
        $b = strtolower($b);
        $sort = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $len = ft_length($a, $b);
        for ($i = 0; $i < $len; $i++)
        {
            $asort = array_search($a[$i], $sort);
            $bsort = array_search($b[$i], $sort);
            if ($asort === false)
                $asort = ord($a[$i]) + 100500;
            if ($bsort === false)
                $bsort = ord($b[$i]) + 100500;
            if ($asort < $bsort)
                return true;
            if ($asort > $bsort)
                return false;
        }
        return (strlen($a) <= strlen($b));
    }

    $result = array();
    for ($i = 1; $i < $argc; $i++)
    {
        $tmp = ft_split($argv[$i]);
        foreach ($tmp as $item)
            $result[] = $item;
    }
    for ($i = 0; $i < count($result) - 1;)
    {
        if (ft_sort($result[$i], $result[$i + 1]))
            $i++;
        else
        {
            $tmp = $result[$i];
            $result[$i] = $result[$i + 1];
            $result[$i + 1] = $tmp;
            $i = 0;
        }
    }
    foreach ($result as $item)
        echo $item . "\n";
?>