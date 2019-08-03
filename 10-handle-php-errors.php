<?php
    /** @noinspection PhpHierarchyChecksInspection */

    ini_set('display_errors', false);

    set_error_handler(function (int $level, string $message, string $file, int $line) {
        if (error_reporting() === 0) {
            return;
        }

        throw new ErrorException($message, 0, $level, $file, $line);
    });

    register_shutdown_function(function () {
        $lastError = error_get_last();
        if ($lastError !== NULL) {
            throw new ErrorException($lastError['message'], 0, $lastError['type'], $lastError['file'],
                $lastError['line']);
        }
    });

    interface foo
    {
        public function bar();
    }

    class baz implements foo
    {
    }

