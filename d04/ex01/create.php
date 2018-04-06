<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "OK")
    {
        if (!file_exists('../private'))
            mkdir('../private');
        $user = unserialize(file_get_contents('../private/passwd'));
        $exist = false;
        foreach ($user as $key => $value)
            if ($value['login'] === $_POST['login'])
                $exist = true;
        if ($exist)
            echo "ERROR\n";
        else
        {
            $user[] = array('login' => $_POST['login'],
                'passwd' => hash('whirlpool', $_POST['passwd']));
            file_put_contents('../private/passwd', serialize($user));
            echo "OK\n";
        }
    }
    else
        echo "ERROR\n";
?>