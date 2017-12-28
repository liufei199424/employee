<?php
   function autoloader($class) {
       $classpaths = [
           'HelloAction' => 'action/HelloAction.php',
           'PeopleAction' => 'action/PeopleAction.php',
           'Dao' => 'dao/Dao.class.php',
           'PeopleDao' => 'dao/PeopleDao.class.php',
           'People' => 'Entity/People.class.php',
           'BaseAction' => 'core/BaseAction.class.php',
           'Entity' => 'core/Entity.class.php',
           'XContext' => 'core/XContext.class.php',
           'XRequest' => 'core/XRequest.class.php',
       ];
       if (!empty($classpaths[$class])) {
           include_once $classpaths[$class];
       }
   }
   spl_autoload_register('autoloader');
