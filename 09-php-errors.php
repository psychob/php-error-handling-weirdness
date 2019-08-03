<?php
    /** @noinspection PhpHierarchyChecksInspection */

    set_error_handler(function (int $level, string $message, string $file, int $line) {
        if (error_reporting() === 0) {
            return;
        }

        throw new ErrorException($message, 0, $level, $file, $line);
    });

    interface foo
    {
        public function bar();
    }

    class baz implements foo
    {
    }
