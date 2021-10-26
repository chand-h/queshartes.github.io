<?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
  $uploadOk = 1;
  $soundFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // in bytes
  if ($_FILES["fileToUpload"]["size"] > 100000000) {
    echo "< 100MB";
    $uploadOk = 0;
  } 
  if($imageFileType != "wav" && $imageFileType != "mp3") {
    echo ".mp3 or .wav";
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {
    echo "Error with file";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileupload"]["name"])). " has been uploaded.";
    } else {
      echo "Error uploading file";
    }
  }
?>
