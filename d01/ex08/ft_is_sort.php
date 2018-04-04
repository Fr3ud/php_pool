<?php
    function ft_is_sort($arr)
    {
        $sorted = $arr;
        $rsorted = $arr;
        sort($sorted);
        rsort($rsorted);
        return ($arr === $sorted || $arr === $rsorted);
    }
?>