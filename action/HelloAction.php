<?php

class HelloAction {
    public function __construct() {
    }

    public function doHello() {
        echo "Hello PHP!!! Fhw<br>";

        header("Location: " . "../tpl/hello/hello.php");
    }
}