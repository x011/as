<?php

var_dump($_FILES);

$gs_name = $_FILES['uploaded_files']['tmp_name'];
move_uploaded_file($gs_name, 'gs://aspy/new_file.txt');

echo "me";
?>
