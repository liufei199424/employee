<?php

class HelloAction extends BaseAction {
    public function doHello() {
        $name = XRequest::get('name');
        $age = XRequest::get('age');

        $this->assign('nameone', $name);
        $this->assign('ageone', $age);

        $this->display("tpl/hello/hello.tpl.php");
    }
}