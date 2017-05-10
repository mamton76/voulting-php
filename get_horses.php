<?php
include '_db.php';
include 'config.php';

$sql = SELECT_COMMON_PART . 'name, birth from horse ';
if ($_GET['name']) {
    $sql .= " where name like '%" . $_GET['name'] . "%' ";
}
if ($debug) {
    echo $sql;
}
$res = $DB->QUR_SEL($sql);
if ($res) {
    $str = json_encode($res);
    if ($debug) {
        echo " data ";
    }
    echo $str;
} else {
    if ($debug) {
        echo "no data";
    }
}

?>
