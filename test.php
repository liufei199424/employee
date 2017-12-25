<?php
   function autoloader($class) {
       $classpaths = [
           'HelloAction' => 'action/HelloAction.php',
           'MysqlTestAction' => 'action/MysqlTestAction.php',
           'PeopleAction' => 'action/PeopleAction.php',
           'Dao' => 'dao/Dao.class.php',
       ];
       if (!empty($classpaths[$class])) {
           include_once $classpaths[$class];
       }
   }
   spl_autoload_register('autoloader');
