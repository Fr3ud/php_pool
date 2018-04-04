<?php
function ft_split($str)
{
    $arr = array_diff(explode(' ', $str), array(''));
    sort($arr);
    return $arr;
}
?>