<?php

    set_error_handler(function (int $level, string $message, string $file, int $line) {
        if (error_reporting() === 0) {
            return;
        }

        throw new ErrorException($message, 0, $level, $file, $line);
    });

    try {
        var_dump($array); // not existing variable
    } catch (ErrorException $e) {
        var_dump($e);
    }

    try {
        $array = [];
        var_dump($array['missing-key']); // not existing key
    } catch (ErrorException $e) {
        var_dump($e);
    }
