<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/28
 * Time: 10:57
 */

class Entity
{
    protected $table = "";  //对应的表名

    protected $col = [];    //表的字段

    public function __get($name){
        return $this->col[$name];
    }

    public function __set($name, $value){
        if ($name == 'id') {
            return;
        }

        $this->col[$name] = $value;

        $sql = "update {$this->table} set {$name} = '{$value}' where id = {$this->id} ";

        $dao = new Dao;
        $dao->execute($sql);
    }

    public function insert () {
        $entity = $this;

        $table = $entity->table;
        $columns = array_keys($entity->col);
        $values = array_values($entity->col);

        $newvalues = [];
        foreach ($values as $value) {
            $newvalues[] = "'{$value}'";
        }

        $columnstr = implode(',', $columns);
        $valuestr = implode(',', $newvalues);

        $sql = " insert into {$table} ($columnstr) VALUES ($valuestr) ";

        $dao = new Dao();
        $dao->execute($sql);
    }
}