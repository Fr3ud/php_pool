#!/usr/bin/php
<?php

function erup_str($str)
{
    $result = preg_replace('/ {2,}/', ' ', trim($str));
    return $result;
}

if ($argc == 2)
    echo erup_str($argv[1]) . "\n";
?>