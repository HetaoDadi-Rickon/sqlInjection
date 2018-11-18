<?php
/**
 * Created by PhpStorm.
 * User: 13248
 * Date: 2018/11/17
 * Time: 23:26
 */
require_once __DIR__."/../inc/global.php";

$bh = $_POST['input'];
$sql = "select * from `tab_user` where `bh`={$bh}";
$db = Db::init('injection');
$result = $db->fetchRows($sql);

ajaxCallback(1,'test',$result);
