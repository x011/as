<?php
  //echo 'Hello, World!';
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

#$options = [ 'gs_bucket_name' => 'aspy' ];
#$upload_url = CloudStorageTools::createUploadUrl('http://android-spy11.appspot.com/upload_handler.php', $options);
$upload_url = CloudStorageTools::createUploadUrl('http://android-spy11.appspot.com/upload_handler.php');


?>
<form action="<?php echo $upload_url?>" enctype="multipart/form-data" method="post">
    Files to upload: <br>
   <input type="file" name="uploaded_files" size="40">
   <input type="submit" value="Send">
</form>
