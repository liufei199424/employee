<?php

class Hello {
    public function __construct()
    {
    }

    public function hello() {
        echo "Hello PHP!!! Fhw<br>";

        header("Location: " . "../tpl/hello/hello.php");
    }
}