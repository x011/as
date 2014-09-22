<?php

var_dump($_FILES);

$gs_name = $_FILES['uploaded_files']['tmp_name'];
move_uploaded_file($gs_name, 'gs://android-spy11.appspot.com/new_file.txt');

echo "me";
?>
