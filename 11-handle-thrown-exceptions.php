<?php

    ini_set('display_errors', false);

    set_error_handler(function (int $level, string $message, string $file, int $line) {
        if (error_reporting() === 0) {
            return;
        }

        throw new ErrorException($message, 0, $level, $file, $line);
    });

    set_exception_handler(function (Throwable $e) {
        var_dump($e->getMessage());
        var_dump($e->getTraceAsString());
    });

    var_dump($array); // not existing variable
