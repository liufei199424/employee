<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 14:56
 */

class Dao extends DaoBase {

    public function __construct(){

    }

    public function getList ($entityName, $cond) {
        $sql = $this->getSql($entityName, $cond);

        $rows = $this->queryRows($sql);

        $entitys = [];

        foreach ($rows as $row) {
            $entitys[] = new $entityName($row);
        }

        return $entitys;
    }

    public function getOne ($entityName, $cond) {
        $sql = $this->getSql($entityName, $cond);

        $row = $this->queryRow($sql);

        $entity = new $entityName($row);

        return $entity;
    }

    private function getSql ($entityName, $cond) {
        $table = $entityName::getTableName();

        $sql = " select * from {$table} where 1 = 1 {$cond} ";

        return $sql;
    }
}