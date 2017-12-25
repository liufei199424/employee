<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 14:42
 */

class PeopleAction {
    public function __construct(){
        include_once '/employee/Assembly.php';
    }

    public function doList () {
        $sql = "select * from people limit 10 ";

        $list = Dao::query($sql);

        print_r($list);
    }
}