#!/usr/bin/php
<?php
if ($argc != 2) {
    echo "Incorrect Parameters\n";
} else {
    $args = sscanf($argv[1], "%d %c %d %s");
    if (!is_null($args[0]) && $args[1] && !is_null($args[2]) && !$args[3]) {
        switch ($args[1]) {
            case ("/"):
                if ($args[2] == 0)
                    echo "Error : division by zero!\n";
                else
                    echo($args[0] / $args[2]);
                break;
            case ("%"):
                if ($args[2] == 0)
                    echo "Error : modulo by zero!\n";
                else
                    echo($args[0] % $args[2]);
                break;
            case ("*"):
                echo($args[0] * $args[2]);
                break;
            case ("+"):
                echo($args[0] + $args[2]);
                break;
            case ("-"):
                echo($args[0] - $args[2]);
                break;
        }
    } else {
        echo "Syntax Error\n";
    }
}
?>