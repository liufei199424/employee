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
        'id' => 0,
        'createtime' => '',
        'updatetime' => '',
        'name' => ''
    ];

    public function __construct($row){
        $this->col = $row;
    }

    public static function getTableName () {
        return 'people';
    }

    public static function create ($row) {
        $default = [
            'id' => 0,
            'createtime' => date('Y-m-d H:i:s'),
            'updatetime' => date('Y-m-d H:i:s'),
            'name' => ''
        ];

        $row += $default;

        $people = new People($row);

        $people->insert();

        return $people;
    }
}