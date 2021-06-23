<?php
session_start();
$target_dir = "../assets/images/Avatars/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    unlink('$target_file');
  //echo "Sorry, file already exists.";
  $uploadOk = 1;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    
    if(isset($_POST['Upload'])){
        $temp = $_SESSION['Use_Name'];
        require_once('connect.php');
        $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE Use_Name = '$temp'"));
        $User_img = basename( $_FILES["fileToUpload"]["name"]);
        $query = "UPDATE user 
                    SET 
                        User_img='$User_img'
                    WHERE 
                        Use_Name = '$temp'";
        unlink($target_dir.$row['User_img']);
        $result = mysqli_query($conn, $query);
        if($result == true){
            echo "<script>window.location.href='../information.php';</script>";
        }else {
            //show lỗi 
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            } 
    }
  } else {
    echo "<script>window.location.href='../information.php';</script>";
  }
}
