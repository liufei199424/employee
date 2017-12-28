<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 14:56
 */

class Dao {

    public $mysqli = null;

    public function __construct(){
        $mysql_json = file_get_contents("/employee/configure/mysql.json");
        $mysql_conf = json_decode($mysql_json, true);

        $mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);
        $this->mysqli = $mysqli;
        if ($mysqli->connect_errno) {
            die("could not connect to the database:\n" . $mysqli->connect_error);//诊断连接错误
        }
        $mysqli->query("set names 'utf8';");//编码转化
        $select_db = $mysqli->select_db($mysql_conf['db']);
        if (!$select_db) {
            die("could not connect to the db:\n" .  $mysqli->error);
        }
    }

    public function query ($sql) {
        $res = $this->mysqli->query($sql);
        if (!$res) {
            die("sql error:\n" . $this->mysqli->error);
        }

        $list = [];
        while ($row = $res->fetch_assoc()) {
            $list[] = $row;
        }

        $res->free();
        $this->mysqli->close();

        return $list;
    }

    public function execute ($sql) {
        $res = $this->mysqli->query($sql);
        if (!$res) {
            die("sql error:\n" . $this->mysqli->error);
        }

        $this->mysqli->close();
    }

    public function getList ($entityName, $sql) {
        $list = $this->query($sql);

        $entitys = [];

        foreach ($list as $a) {
            $entitys[] = new $entityName($a);
        }

        return $entitys;
    }
}