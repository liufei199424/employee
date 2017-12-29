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

        $list = $this->peopledao->getListByLevel($level);

        $this->assign('list', $list);

        $this->display("tpl/people/list.tpl.php");
    }

    public function doOne () {
        $level = XRequest::get('level');

        $list = $this->peopledao->getListByLevel($level);

        $this->assign('list', $list);

        $this->display('tpl/people/one.tpl.php');
    }
}