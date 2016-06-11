<?php
/* upload small logo */
$target_dir_small = "../../uploads/small/";
$target_file_small = $target_dir_small . basename($_FILES["smallLogo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file_small,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["smallLogo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file_small)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["smallLogo"]["size"] > 5120000) {
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
    echo "<script> alert('Sorry, your file was not uploaded.')</script>";
    header('Location: ../upload.php');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["smallLogo"]["tmp_name"], $target_file_small)) {
        echo "The file ". basename( $_FILES["smallLogo"]["name"]). " has been uploaded.";
    } else {
        echo "<script> alert('Sorry, there was an error uploading your file.')</script>";
        header('Location: ../upload.php');
    }
}

/* upload full logo */
$target_dir_full = "../../uploads/full/";
$target_file_full = $target_dir_full . basename($_FILES["fullLogo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file_full,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fullLogo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file_full)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fullLogo"]["size"] > 5120000) {
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
    echo "<script> alert('Sorry, your file was not uploaded.')</script>";
    header('Location: ../upload.php');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fullLogo"]["tmp_name"], $target_file_full)) {
        echo "The file ". basename( $_FILES["fullLogo"]["name"]). " has been uploaded.";
    } else {
        echo "<script> alert('Sorry, there was an error uploading your file.')</script>";
        header('Location: ../upload.php');
    }
}

    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "logo_quiz";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $type = $_POST['round1'].$_POST['round2'].$_POST['round3'];
    $logoName = $_POST['logoName'];
    $logoDescription = $_POST['logoDescription'];
    $logoQuestion = $_POST['logoQuestion'];
    $sql = "INSERT INTO logo(logo_name,type,status,logo_description,logo_question)VALUES('$logoName','$type','1','$logoDescription', '$logoQuestion')";
    if ($conn->query($sql) === FALSE) {
        echo "Error insert table: " . $conn->error."<br>";
        $err=FALSE;
    }

    $sql = "select logo_id from logo where logo_name = '$logoName'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //echo $row2["logo_id"]."<br>";
            $logoId = $row["logo_id"];
        }
    }else{
        echo "error in faching id";
        $err=FALSE;
    }

    $loc = substr($target_file_small,3);
    $sql = "INSERT INTO small(logo_id,location)VALUES('$logoId','$loc')";
    if ($conn->query($sql) === FALSE) {
        echo "Error insert small table: " . $conn->error."<br>";
        $err=FALSE;
    }

    $loc = substr($target_file_full,3);
    $sql = "INSERT INTO full(logo_id,location)VALUES('$logoId','$loc')";
    if ($conn->query($sql) === FALSE) {
        echo "Error insert full table: " . $conn->error."<br>";
        $err=FALSE;
    }
    if($err !== FALSE)
    {
        header('Location: ../upload.php');
    }
?>
