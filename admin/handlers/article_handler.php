<?php 
// header('Content-Type: application/json');
session_start();

// IMPORT DB CONNECTION
require_once("../../db/config.php");
// IMPORT THE FUNCTION
require_once("../../function/index.php");


// echo json_encode($_POST);

if(isset($_POST['add'])) {
    $title = cleanInput($conn, $_POST['title']);
    $content = cleanInput($conn, $_POST['content']);
    $time = cleanInput($conn, $_POST['time']);
    $flag = cleanInput($conn, $_POST['flag']);
    $category = cleanInput($conn, $_POST['category']);
    $blogId = uniqid("blg_", true);

    // CHECK FILES 
    $file = $_FILES['image'];

    // Handle File Upload
    extract(uploadFile($file, "../../uploads/"));
    $DB_filename = $filename;

    // 
    if($uploaded) {
        $query = "INSERT INTO `blog`(`blog_id`, `title`, `content`, `image`, `category`, `time`, `flag`) VALUES ('$blogId','$title','$content','$DB_filename','$category','$time','$flag')";
        $result = mysqli_query($conn, $query);

        if($result) {
            setAdminAlert("Article created successfully", "success");
            header("Location: ../demo4/pages/general/manage_article.php");
        }
        else {
            setAdminAlert("Error adding article", "error");
            header("Location: ../demo4/pages/general/manage_article.php");
        }
    }
    else {
        setAdminAlert("Error uploading file", "error");
        header("Location: ../demo4/pages/general/manage_article.php");
    }
}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "SELECT `image` FROM `blog` WHERE `blog_id` = '$id'";
    $resultSql = mysqli_query($conn, $sql);

    $fileColumn = mysqli_fetch_assoc($resultSql)['image'];
    $file = explode("|", $fileColumn)[0];

    // Delete the image 
    $destination = "../../uploads/$file";

    if(unlink($destination)) {
        try {
            $query = "DELETE FROM `blog` WHERE `blog_id` = '$id'";
            $result = mysqli_query($conn, $query);

            if($result) {
                setAdminAlert("Article Deleted successfully", "success");
                header("Location: ../demo4/pages/general/manage_article.php");
            }
            else {
                setAdminAlert("Article failed to delete", "error");
                header("Location: ../demo4/pages/general/manage_article.php");
            }
        }
        catch (Exception $e) {
            setAdminAlert("Article failed to delete", "error");
            header("Location: ../demo4/pages/general/manage_article.php");
        }
    }
    else {  
        echo "Something went wrong";
    }
}

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = cleanInput($conn, $_POST['title']);
    $category = cleanInput($conn, $_POST['category']);
    $content = cleanInput($conn, $_POST['content']);
    $time = cleanInput($conn, $_POST['time']);
    $flag = cleanInput($conn, $_POST['flag']);

    // IF THERE'S A FILE UPLOADED

    // IF THERE'S ERROR UPLOADING THE FILE
    if($_FILES['image']["error"]) {
        $query = "UPDATE blog SET title = '$title', category = '$category', content = '$content', `time` = '$time', flag = '$flag' WHERE blog_id = '$id'";
        $result = mysqli_query($conn, $query);

        if($result) {
            setAdminAlert("Article update successfully", "success");
            header("Location: ../demo4/pages/general/manage_article.php");
        }
        else {
            setAdminAlert("Article failed to update", "error");
            header("Location: ../demo4/pages/general/manage_article.php");
        }
    }

    // IF THERE'S A FILE UPLOADED
    else {

        // delete the old file
        $oldFile = $_POST['filename'];
        $deleted = unlink("../../uploads/$oldFile");

        // upload the new file
        if($deleted) {
            $file = $_FILES['image'];
            extract(uploadFile($file, "../../uploads/"));
            // $uploaded, $filename

            if($uploaded) {
                $query = "UPDATE blog SET title = '$title', category = '$category', content = '$content', `time` = '$time', flag = '$flag', `image` = '$filename' WHERE blog_id = '$id'";
                $result = mysqli_query($conn, $query);

                if($result) {
                    setAdminAlert("Article update successfully", "success");
                    header("Location: ../demo4/pages/general/manage_article.php");
                }
                else {
                    setAdminAlert("Article failed to update", "error");
                    header("Location: ../demo4/pages/general/manage_article.php");
                }
            }
        }
        else {
            setAdminAlert("File failed to delete", "error");
            header("Location: ../demo4/pages/general/manage_article.php");
        }

    }
}
?>