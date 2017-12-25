<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 14:56
 */

class Dao {

    public static function query ($sql) {
        $mysql_conf = array(
            'host'    => '127.0.0.1:3306',
            'db'      => 'demo',
            'db_user' => 'root',
            'db_pwd'  => 'root',
        );

        $mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);
        if ($mysqli->connect_errno) {
            die("could not connect to the database:\n" . $mysqli->connect_error);//诊断连接错误
        }
        $mysqli->query("set names 'utf8';");//编码转化
        $select_db = $mysqli->select_db($mysql_conf['db']);
        if (!$select_db) {
            die("could not connect to the db:\n" .  $mysqli->error);
        }

//        $sql = "select * from people limit 10 ";

        $res = $mysqli->query($sql);
        if (!$res) {
            die("sql error:\n" . $mysqli->error);
        }

        $list = [];
        while ($row = $res->fetch_assoc()) {
//            var_dump($row);
            $list[] = $row;
//            print_r($row);
        }

        $res->free();
        $mysqli->close();

        return $list;
    }
}