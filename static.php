<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/24
 * Time: 20:27
 * 处理静态资源
 */

// 获取查询字符串
$queryStr = $_SERVER['REQUEST_URI'];

// 正则匹配static后面部分（真实的资源）
preg_match('/(.*)\/static\/(.*)/', $queryStr, $results);

$file = 'static/' . $results[2];
if (false != strpos($file, '?')) {
    $arr = explode('?', $file);
    $file = $arr[0];
}

if (false != strpos($file, '.css')) {
    $content_type = 'text/css';
} else {
    $content_type = 'application/x-javascript';
}

header('Content-Type: ' . $content_type);
header('Content-Length: '. filesize($file));
readfile($file);    // 把文件直接输出