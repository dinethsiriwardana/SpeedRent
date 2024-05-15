<?php
// Check if the file was uploaded without errors
if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {

  // Specify the destination directory to store the uploaded file
  $uploadDir = '/cars';

  // Generate a unique filename for the uploaded file
  $filename = uniqid() . '_' . $_FILES['photo']['name'];

  // Move the temporary file to the destination directory
  if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $filename)) {
    echo 'File uploaded successfully.';
  } else {
    echo 'Failed to move the uploaded file.';
  }
} else {
  echo 'Error uploading file. Error code: ' . $_FILES['photo']['error'];
}
