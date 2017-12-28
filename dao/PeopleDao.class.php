<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/28
 * Time: 19:19
 */

class PeopleDao extends Dao {

    public function getList ($sql) {
        $list = $this->query($sql);

        $entitys = [];

        foreach ($list as $a) {
            $entitys[] = new People($a);
        }

        return $entitys;
    }
}