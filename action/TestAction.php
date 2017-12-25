<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 17:11
 */

class TestAction {
    public function __construct(){
        include_once '/employee/Assembly.php';
    }

    public function doTest () {
        echo "Hello PHP!!<br>";

        $sql = "select * from people limit 10 ";

        $list = DaoTest::query($sql);

        print_r($list);
    }
}