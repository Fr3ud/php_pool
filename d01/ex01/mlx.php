#!/usr/bin/php
<?php
    $j = 0;
    for ($i = 0; $i < 1000; $i++)
    {
        if ($j == 88)
        {
            echo "\n";
            $j = 0;
        }
        echo "X";
        $j++;
    }
    echo "\n";
?>
