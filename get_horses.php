<!--?php echo 'Привет, мир!'; ?-->
<!--'{"id":1;"last_update":1;"name":"name"}';-->
<?php
include '_db.php';
include 'config.php';
//$str = '{"id":1;"last_update":1;"name":"horseName"}';

echo 'hello!';
echo $DB -> printMe();
?>
