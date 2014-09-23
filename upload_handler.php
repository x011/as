<?php

//var_dump($_FILES);
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

//$gs_name = $_FILES['uploaded_files']['tmp_name'];

$file = $_FILES['myfile'];
$storeAt = 'gs://android-spy11.appspot.com/new_file55.txt;

$options = array('gs'=>array('acl'=>'public-read','Content-Type' => $file['type']));
$ctx = stream_context_create($options);
$saved = file_put_contents($storeAt, $_FILES['uploaded_files']['tmp_name'], 0, $ctx);

//if(is_file($_FILES['uploaded_files']['tmp_name']))


$object_public_url = CloudStorageTools::getPublicUrl('gs://android-spy11.appspot.com/new_file55.txt', true);

header('Location:' .$object_public_url);

//echo $public_url;
?>
