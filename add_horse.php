<?php
$str = 'ADD';
//echo $str;
echo ' get ';
echo $_GET['name'];
echo ' request ';
echo $_REQUEST['name'];
echo ' post ';
echo $_POST['name'];
if ($_SERVER["CONTENT_TYPE"] == 'application/json') {
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    echo ' post json ';
    echo $data['name'];
}
?>