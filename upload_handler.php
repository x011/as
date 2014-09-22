<?php

//var_dump($_FILES);
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

$gs_name = $_FILES['uploaded_files']['tmp_name'];
move_uploaded_file($gs_name, 'gs://android-spy11.appspot.com/new_file33.txt');


	
$storage = new Google_Service_Storage();
    /*$storage = new Google_Service_Storage_StorageObject();
    $storage->setName('gs://android-spy11.appspot.com/new_file33.txt');
    $storage->setAcl('public-read');*/
           
    $acl = new Google_Service_Storage_ObjectAccessControl();
    $acl->setEntity('allUsers');
    $acl->setRole('READER');
    $acl->setBucket('gs://android-spy11.appspot.com');
    $acl->setObject('new_file55.txt');
     
    // $storage being a valid Google_Service_Storage instance
    $response = $storage->objectAccessControls->insert('gs://android-spy11.appspot.com', 'new_file55.txt' $acl);



$object_public_url = CloudStorageTools::getPublicUrl('gs://android-spy11.appspot.com/new_file55.txt', true);
//$options = stream_context_create(['gs'=>['acl'=>'public-read']]);
//$object_public_url = CloudStorageTools::getPublicUrl($public_url, false);

header('Location:' .$object_public_url);

//echo $public_url;
?>
