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
        if ($name != 'id') {
            $this->col[$name] = $value;
        }
    }
}