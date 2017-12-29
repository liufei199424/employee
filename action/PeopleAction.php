<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 14:42
 */

class PeopleAction extends BaseAction {

    private $peopledao = null;

    public function __construct(){
        parent::__construct();

        $this->peopledao = new PeopleDao();
    }

    public function doList () {
        $level = XRequest::get('level');

        if ($level > 0) {
            $list = $this->peopledao->getListByLevel($level);
        } else {
            $list = $this->peopledao->getList('People', "");
        }


        $this->assign('list', $list);

        $this->display("tpl/people/list.tpl.php");
    }

    public function doOne () {
        $level = XRequest::get('level');

        $list = $this->peopledao->getListByLevel($level);

        $one = $this->peopledao->getOneByName('素还真');

        $this->assign('list', $list);
        $this->assign('one', $one);

        $this->display('tpl/people/one.tpl.php');
    }

    public function doAddOrModifyJson () {
        $id = XRequest::get('id');
        $name = XRequest::get('name');
        $type = XRequest::get('type');

        if ($type == 'add') {
            $row = [];
            $row['id'] = $id;
            $row['name'] = $name;
            $people = People::create($row);

            echo "add-success";
        } elseif ($type == 'modify') {
            $people = $this->peopledao->getOneById($id);

            $people->id = $id;
            $people->name = $name;

            echo "modify-success";
        }
    }
}