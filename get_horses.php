<!--?php echo 'Привет, мир!'; ?-->
<!--'{"id":1;"last_update":1;"name":"name"}';-->
<?php
include '_db.php';
include 'config.php';
//$str = '{"id":1;"last_update":1;"name":"horseName"}';

$sql = SELECT_COMMON_PART . 'name, birth from horse ';
if ($_GET['name']) {
    $sql .= " where name like '%".$_GET['name']."%' ";
}
echo $sql;
 $res = $DB -> QUR_SEL($sql);
 if ($res) {
    $str = json_encode($res);
     echo " data ";
    echo $str;
 } else {
     echo "no data";
 }

?>
