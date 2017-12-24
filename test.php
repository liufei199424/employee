<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/24
 * Time: 20:39
 */

$queryStr = "/ddd/ddd/static/js/oneui/css/oneui.css";
preg_match('/(.*)\/static\/(.*)/', $queryStr, $results);
print_r($results);


// 从URL中获取主机名称
preg_match('@^(?:http://)?([^/]+)@i', "http://www.runoob.com/index.html", $matches);
print_r($matches);

//// 获取主机名称的后面两部分
//preg_match('/[^.]+\.[^.]+$/', $host, $matches);
//echo "domain name is: {$matches[0]}\n";