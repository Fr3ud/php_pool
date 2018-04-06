<?php
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];

    if ($user == "zaz" && $pass == "jaimelespetitsponeys")
    {
        header('Content-Type: text/html');
        echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
        echo base64_encode(file_get_contents('../img/42.png'));
        echo "'>\n</body></html>\n";
    }
    else
    {
        header('HTTP/1.0 401 Unauthorized');
        header('WWW-Authenticate: Basic realm\'\'\'Member area\'\'');
        echo "<html><body>That area is accessible for members only</body></html>\n";
    }
?>