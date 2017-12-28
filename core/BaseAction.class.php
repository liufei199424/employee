<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/27
 * Time: 14:45
 */

class BaseAction {
    protected $context = [];    // 容器，类似java的值栈

    public function __construct() {
        // 获取系统配置文件sys.json
        $sys_json = file_get_contents("/employee/configure/sys.json");
        $sys_arr = json_decode($sys_json, true);
        foreach ($sys_arr as $name => $value) {
            $this->context["$name"] = $value;
        }
    }

    protected function assign($name, $value) {
        $this->context["$name"] = $value;
    }

    protected function display ($tplpath) {
        extract($this->context);

        include "/employee/$tplpath";
    }
}