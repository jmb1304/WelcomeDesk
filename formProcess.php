<?php
$date = date_create();
if(isset($_POST['field1']) && isset($_POST['field2'])) {
    $data = $_POST['field1'] . ',' . $_POST['field2'] . "," . date("Y/m/d");
    $ret = file_put_contents('mydata.txt', $data.PHP_EOL, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        header("Location: index.php"); /* Redirect browser */
        exit();
    }
}
else {
	die('no post data to process');
}