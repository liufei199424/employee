    <?php
    date_default_timezone_set("Asia/Shanghai");

    /*
     * url: http://localhost/hello/hello?patientid=1000&userid=10002
     * DOCUMENT_ROOT: E:/employee
     * REQUEST_URI: /hello/hello?patientid=1000&userid=10002
     * QUERY_STRING: patientid=1000&userid=10002
     * */

    echo "POST:<br>";
    foreach ($_POST as $key => $value) {
        echo "{$key} : {$value}<br>";
    }

    echo "GET:<br>";
    foreach ($_GET as $key => $value) {
        echo "{$key} : {$value}<br>";
    }
    exit;

    define("MODULE_DIR", "action/");

    $_FilePath = __FILE__;
    $_RequestUri = $_SERVER['REQUEST_URI'];

    $_AppPath = str_replace($_DocumentPath, '', $_FilePath);    //==>\router\index.php
    $_UrlPath = $_RequestUri;    //==>/router/hello/router/a/b/c/d/abc/index.html?id=3&url=http

    $_AppPathArr = explode(DIRECTORY_SEPARATOR, $_AppPath);

    /**
     * http//192.168.0.33/router/hello/router/a/b/c/d/abc/index.html?id=3&url=http
     *
     * /hello/router/a/b/c/d/abc/index.html?id=3&url=http
     */

    for ($i = 0; $i < count($_AppPathArr); $i++) {
        $p = $_AppPathArr[$i];
        if ($p) {
            $_UrlPath = preg_replace('/^\/' . $p . '\//', '/', $_UrlPath, 1);
        }
    }

    $_UrlPath = preg_replace('/^\//', '', $_UrlPath, 1);

    $_AppPathArr = explode("/", $_UrlPath);
    $_AppPathArr_Count = count($_AppPathArr);

    $arr_url = array(
        'controller' => 'index',
        'method' => 'index',
        'parms' => []
    );

    $arr_url['controller'] = $_AppPathArr[0];
    $arr_url['method'] = $_AppPathArr[1];

    if ($_AppPathArr_Count > 2 and $_AppPathArr_Count % 2 != 0) {
        die('参数错误');
    } else {
        for ($i = 2; $i < $_AppPathArr_Count; $i += 2) {
            $arr_temp_hash = array(strtolower($_AppPathArr[$i]) => $_AppPathArr[$i + 1]);
            $arr_url['parms'] = array_merge($arr_url['parms'], $arr_temp_hash);
        }
    }

    $module_name = $arr_url['controller'] . "Action";
    $module_file = MODULE_DIR . $module_name . '.php';
    $method_name = "do" . $arr_url['method'];

    if (file_exists($module_file)) {
        include $module_file;

        $obj_module = new $module_name();

        if (!method_exists($obj_module, $method_name)) {
            die("要调用的方法不存在");
        } else {
            if (is_callable(array($obj_module, $method_name))) {
                $obj_module->$method_name();
            }
        }
    } else {
        die("定义的模块不存在");
    }