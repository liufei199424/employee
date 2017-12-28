<?php
/**
 * Created by PhpStorm.
 * User: fanghanwen
 * Date: 2017/12/25
 * Time: 14:42
 */

class PeopleAction extends BaseAction {

    public function doList () {
        $sql = "select * from people limit 10 ";

//        $list = Dao::query($sql);

        $peopledao = new PeopleDao();
        $list = $peopledao->getList($sql);

        $this->assign('list', $list);

        $this->display("tpl/people/list.tpl.php");
    }

    public function doOne () {
        $sql = "select * from people limit 10 ";

//        $list = Dao::query($sql);

        $peopledao = new PeopleDao();
        $list = $peopledao->getList($sql);

        $this->assign('list', $list);

        $this->display('tpl/people/one.tpl.php');
    }
}