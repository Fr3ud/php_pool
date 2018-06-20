#!/usr/bin/php
<?php
$result = NULL;

for ($i = 2; $i < $argc; $i++) {
    $val = explode(':', $argv[$i]);
    if ($val[0] == $argv[1])
        $result = $val[1];
}
if (!is_null($result))
    echo "$result\n";
?>