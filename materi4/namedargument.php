<?php

    function sayHello(string $first, string $middle = '', string $last): void
    {
        echo "Hello  $first $middle $last" . PHP_EOL;
    }

    sayHello("eko", "kurniawan", "kanedi");
    sayHello(first: "eko", last: "kurniawan", middle : "kanedi");