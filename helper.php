<?php

    if (! function_exists('redirectTo')) {
        function redirectTo(string $to)
        {
            header("Locatiob: {$to}");
            die();
        }
    }

    if (! function_exists('dd')) {
        function dd($val, bool $die = false)
        {
            var_dump($val);

            if ($die) die();
        }
    }
