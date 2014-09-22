<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
var_dump($_FILES);

$gs_name = $_FILES['uploaded_files']['tmp_name'];
move_uploaded_file($gs_name, 'gs://aspy/new_file.txt');
/*
if (false == rename('gs://aspy/new_file.txt', 'gs://aspy/newname.txt', $ctx)) {
  die('Could not rename.');
}*/

?>
