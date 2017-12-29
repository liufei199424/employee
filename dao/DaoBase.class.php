<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/28
 * Time: 19:34
 */

class DaoBase {
    private function getContent () {
        $mysql_json = file_get_contents("/employee/configure/mysql.json");
        $mysql_conf = json_decode($mysql_json, true);

        $mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);
        if ($mysqli->connect_errno) {
            die("could not connect to the database:\n" . $mysqli->connect_error);//诊断连接错误
        }
        $mysqli->query("set names 'utf8';");//编码转化
        $select_db = $mysqli->select_db($mysql_conf['db']);
        if (!$select_db) {
            die("could not connect to the db:\n" .  $mysqli->error);
        }

        return $mysqli;
    }

    public function queryRow ($sql) {
        $results = $this->query($sql);

        return $results[0];
    }

    // 查询多行 例：select id,name from people;
    public function queryRows ($sql) {
        $results = $this->query($sql);

        return $results;
    }

    // 查询单个值 例：select count(*) from people;
    public function queryValue ($sql) {
        $results = $this->query($sql);

        $result = '';
        foreach ($results[0] as $key => $value) {
            $result = $value;
            break;
        }

        return $result;
    }

    // 查询单列多个值 例：select id from people;
    public function queryValues ($sql) {
        $results = $this->query($sql);

        $list = [];
        foreach ($results as $row) {
            foreach ($row as $key => $value) {
                $list[] = $value;
            }
        }
        
        return $list;
    }

    public function query ($sql) {
        $mysqli = $this->getContent();

        $res = $mysqli->query($sql);
        if (!$res) {
            die("sql error:\n" . $mysqli->error);
        }

        $list = [];
        while ($row = $res->fetch_assoc()) {
            $list[] = $row;
        }

        $res->free();
        $mysqli->close();

        return $list;
    }

    public function execute ($sql) {
        $mysqli = $this->getContent();

        $res = $mysqli->query($sql);
        if (!$res) {
            die("sql error:\n" . $mysqli->error);
        }

        $mysqli->close();
    }
}