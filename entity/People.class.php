<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/28
 * Time: 18:31
 */

class People extends Entity {
    public $table = "people";

    public $col = [
        'id',
        'createtime',
        'updatetime',
        'name'
    ];

    public function __construct($row){
        $this->col += $row;
    }

    public static function getById ($id) {
        $people = new People();

        $sql = "select * from {$people->table} where id = {$id}";
        $data = Dao::query($sql);

        $people->col += $data[0];

        $people->name = "剑圣.柳生剑影";

        return $people;
    }

    public function __set($name, $value){
        if ($name == 'id') {
            return;
        }

        $this->col[$name] = $value;

        $sql = "update {$this->table} set {$name} = '{$value}' where id = {$this->id} ";
        Dao::execute($sql);
    }

    public static function getTableName () {
        return 'people';
    }
}