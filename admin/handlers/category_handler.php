<?php 
session_start();

// IMPORT DB CONNECTION
require_once("../../db/config.php");
// IMPORT THE FUNCTION
require_once("../../function/index.php");

// HANDLE CREATE CATEGORY
if(isset($_POST['add'])) {
    $category = cleanInput($conn, $_POST['category']);
    $id = uniqid("cat_", true);

    try {
        // category -> (category_id, category_name)
        $query = "INSERT INTO `category` (`category_name`, `category_id`) VALUES ('$category', '$id')";
        $result = mysqli_query($conn, $query);

        // JSON.stringify() -> json_encode()
        // JSON.parse() -> json_decode()

        if($result) {
            setAdminAlert("Category added successfully", "success");
            header("Location: ../demo4/pages/general/manage_category.php");
        }
    } catch(Exception $e) {
        // $e->getMessage()
        setAdminAlert("Something went wrong","error");
        header("Location: ../demo4/pages/general/manage_category.php");
    }
    
}

//  HANDLE FOR UPDATE
if(isset($_POST['update'])) {
    $id = $_POST["id"];
    $category = $_POST["category"];

    $query = "UPDATE `category` SET `category_name` = '$category' WHERE `category_id` = '$id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        // TODO: Create Admin Alert FUNCTION [setAdminAlert(message, type)]
        setAdminAlert("Category updated successfully", "success");
        header("Location: ../demo4/pages/general/manage_category.php");
    }
    else {
        setAdminAlert("Failed to update category", "error");
        header("Location: ../demo4/pages/general/manage_category.php");
    }
}

// HANDLE DELETE 

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM category WHERE category_id = '$id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        setAdminAlert("Category deleted successfully", "success");
        header("Location: ../demo4/pages/general/manage_category.php");
    }
    else {
        setAdminAlert("Category failed to deleted", "error");
        header("Location: ../demo4/pages/general/manage_category.php");
    }
}