<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$soundFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// in bytes
if ($_FILES["fileToUpload"]["size"] > 100000000) {
  echo "< 100MB";
  $uploadOk = 0;
} else if($imageFileType != "wav" && $imageFileType != "mp3") {
  echo ".mp3 or .wav";
  $uploadOk = 0;
} else {
  $uploadOk = 1;
}
?>
