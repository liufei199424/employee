<?php

include "dao/DaoBase.class.php";

$sql = "select count(*) from people ";
$cnt = DaoBase::queryValue($sql);
//print_r($cnt);

$sql = "select id from people";
$cnt = DaoBase::queryValues($sql);
//print_r($cnt);

$sql = "select id,name from people";
$rows = DaoBase::queryRows($sql);
//print_r($rows);

$sql = "select id,name from people where id = 0";
$row = DaoBase::queryRow($sql);
print_r($row);