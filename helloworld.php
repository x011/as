<?php
  //echo 'Hello, World!';
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

$options = [ 'gs_bucket_name' => 'android-spy11.appspot.com' ];
$upload_url = CloudStorageTools::createUploadUrl('/upload_handler.php', $options);
//$upload_url = CloudStorageTools::createUploadUrl('/upload_handler.php');
//$upload_url = "http://android-spy11.appspot.com/upload_handler.php";

//file_put_contents('gs://android-spy11.appspot.com/hello2.txt', 'Hello');

?>
<form action="<?php echo $upload_url?>" enctype="multipart/form-data" method="post">
    Files to upload: <br>
   <input type="file" name="userfile" size="40">
   <input type="text" name="user">
   <input type="submit" value="Send">
</form>
