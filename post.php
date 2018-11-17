<?php
/**
 * Created by PhpStorm.
 * User: 13248
 * Date: 2018/11/17
 * Time: 23:26
 */
require_once __DIR__."/../inc/global.php";

$id = $_POST['input'];
$sql = "select * from `user` where `id`={$id}";
$db = Db::init('injection');
$result = $db->fetchRows($sql);
ajaxCallback(1,'test',$result);