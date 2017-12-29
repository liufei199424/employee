<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/28
 * Time: 19:19
 */

class PeopleDao extends Dao {
    public function getListByLevel ($level) {
        $cond = " and level = {$level} ";

        $list = $this->getList('People', $cond);

        return $list;
    }
}