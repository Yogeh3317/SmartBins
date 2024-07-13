<?php
session_start();
include 'common/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $obj->real_escape_string($_POST['name']);
    $mobile = $obj->real_escape_string($_POST['mobile']);
    $email = $obj->real_escape_string($_POST['email']);
    $wastetype = implode(', ', $_POST['wastetype']);
    $location = $obj->real_escape_string($_POST['location']);
    $locationdescription = $obj->real_escape_string($_POST['locationdescription']);
    
    // Handle file upload
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"] > 500000) { // 500KB limit
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // File uploaded successfully, insert data into database
            $sql = "INSERT INTO complaints (name, mobile, email, wastetype, location, locationdescription, image) VALUES ('$name', '$mobile', '$email', '$wastetype', '$location', '$locationdescription', '$target_file')";

            if ($obj->query($sql) === TRUE) {
                echo "Complaint registered successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $obj->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
