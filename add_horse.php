<?php
class horse {
    public $name;
}
$str = 'ADD';
//echo $str;
echo ' get ';
echo $_GET['name'];
echo ' request ';
echo $_REQUEST['name'];
echo ' post ';
echo $_POST['name'];
echo $_SERVER["CONTENT_TYPE"];
if ($_SERVER["CONTENT_TYPE"] == 'application/json') {
    echo ' post json ';
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    echo $data['name'];
    echo ' post object ';
    $horse = (object) $data;
    echo $horse -> name;


}
?>