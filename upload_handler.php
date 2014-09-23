<?php

//var_dump($_FILES);
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

//$gs_name = $_FILES['userfile']['tmp_name'];

//$file = $_FILES['userfile'];
$fileName = 'gs://android-spy11.appspot.com/'.$_FILES['userfile']['name'];
echo $fileName."<br>";


/*$gs_name = $_FILES['userfile']['tmp_name'];
move_uploaded_file($gs_name, 'gs://my_bucket/new_file.txt');*/


$options = array('gs'=>array('acl'=>'public-read','Content-Type' => $_FILES['userfile']['type']));
$ctx = stream_context_create($options);
//$saved = file_put_contents($fileName, $_FILES['userfile']['tmp_name'], 0, $ctx);
//echo $saved."<br>";

if (false == rename($_FILES['userfile']['tmp_name'], $fileName, $ctx)) {
  die('Could not rename.');
}


//if(is_file($_FILES['userfile']['tmp_name']))

$object_public_url = CloudStorageTools::getPublicUrl($fileName, true);
echo $object_public_url."<br>";
//header('Location:' .$object_public_url);

//echo $public_url;
?>
