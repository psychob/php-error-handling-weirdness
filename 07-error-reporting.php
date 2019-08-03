<?php
    /** @noinspection PhpUndefinedVariableInspection */

    error_reporting(0);

    $array = [
        // this array doesn't have any key
    ];

    // this line will emit warning
    var_dump($array['missing-key']);

    // this line will also emit warning
    var_dump($non_existing_var);
