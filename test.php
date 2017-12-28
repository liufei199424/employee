<?php

$url = "/hello/hello?patientid=1000&userid=10002";

preg_match('/^\/(.*)\/(.*)/', explode('?', $url)[0], $list);

print_r($list);
