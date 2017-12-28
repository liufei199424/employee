<?php

    /*
     * url: http://localhost/hello/hello?patientid=1000&userid=10002
     * DOCUMENT_ROOT: E:/employee
     * REQUEST_URI: /hello/hello?patientid=1000&userid=10002
     * QUERY_STRING: patientid=1000&userid=10002
     * */

    date_default_timezone_set("Asia/Shanghai");

    $request_url = $_SERVER['REQUEST_URI'];

    // 设置Action目录
    $actionRoot = "action/";

    // 获取action和method
    preg_match('/^\/(.*)\/(.*)/', explode('?', $request_url)[0], $list);
    $action = $list[1] . "Action";
    $method = "do" . $list[2];
    $action_file = $actionRoot . $action . ".php";
    include_once '/employee/Assembly.php';

    // process
    if (file_exists($action_file)) {
        include $action_file;

        $obj_action = new $action();
        if (!method_exists($obj_action, $method)) {
            die("要调用的方法不存在");
        } else {
            if (is_callable(array($obj_action, $method))) {
                // 调用action的method
                $obj_action->$method();
            }
        }
    } else {
        die("{$action}不存在");
    }