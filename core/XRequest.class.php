<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/26
 * Time: 15:43
 */
class XRequest {
    private static function getParams () {
        return array_merge($_GET, $_POST);
    }

    public static function get($name) {
        $params = self::getParams();

        return $params[$name];
    }
}