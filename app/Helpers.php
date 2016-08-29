<?php

if (!function_exists('p')) {
    function p($var)
    {
        var_dump($var);
    }
}

if (!function_exists('xdd')) {
    function xdd($var) {
        p($var);
        exit();
    }
}