<?php 
session_start();

// IMPORT DB CONNECTION
require_once("../../db/config.php");
// IMPORT THE FUNCTION
require_once("../../function/index.php");

// HANDLE FOR REGISTRATION
if(isset($_POST['add'])) {
    $username = cleanInput($conn, $_POST['username']);
    $password = cleanInput($conn, $_POST['password']);
    $email = cleanInput($conn, $_POST['email']);

    // TODO: HASH PASSWORD
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // BCRYPT
    $type = "LOW";
    $id = uniqid("adm_", true);

    $sqlCheck = "SELECT * FROM `admin` WHERE `email` = '$email'";
    $resultSql = mysqli_query($conn, $sqlCheck);

    // CHECK IF EMAIL EXISTS
    if (mysqli_num_rows($resultSql) > 0) {
        setAdminAlert("Email already exists", "error");
        header("Location: ../demo4/pages/general/manage_admins.php");
        exit();
    }

 
    // QUERY THE DB 
    try {
        $query = "INSERT INTO `admin`(`id`, `username`, `email`, `password`, `type`) VALUES ('$id', '$username', '$email', '$hashedPassword', '$type')";
        $result = mysqli_query($conn, $query);

        // IF REGISTRATION IS SUCCESSFUL
        if($result) {
            // TODO: Show alert
            setAdminAlert("Registration successful", "success");
            // Redirect to the login page
            header("Location: ../demo4/pages/general/manage_admins.php");
        }
        else {
            // TODO: Show alert
            setAdminAlert("Registration failed", "error");
            // Redirect to the login page
            header("Location: ../demo4/pages/general/manage_admins.php");
        }
    } catch (Exception $e) {
         // TODO: Show alert
         setAdminAlert("Registration failed", "error");
        // Redirect to the login page
        header("Location: ../demo4/pages/general/manage_admins.php");
    }
}

// HANDLE FOR LOGIN 
if(isset($_POST['login'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $remember = $_POST['remember_me'];

    // CHECK IF THE USER EXISTS IN THE DB
    try {
        $query = "SELECT * FROM `admin` WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) < 1) {
            setAdminAlert("Invalid email address", "error");
            header("Location: ../demo4/pages/auth/login.php");
        }

        $rowUser = mysqli_fetch_assoc($result); 
        $hashedPassword = $rowUser['password'];

        // VERIFY PASSWORD
        if(password_verify($password, $hashedPassword)) {

            if($remember) {
                $time = time() + (7 * 24 * 60 * 60);
                setcookie("REMEMBER_ME", $rowUser['id'], $time, '/');
            }

            setAdminAlert("Log in successful", "success");

            // TODO: Create a session for the admin that logged in
            $_SESSION['LOGGED_ADMIN'] = json_encode([
                "email" => $rowUser['email'],
                "id" => $rowUser['id'],
                "username" => $rowUser['username'],
                "type" => $rowUser['type']
            ]);

            header("Location: ../demo4/dashboard.php");
        }
        else {
            setAdminAlert("Invalid password", "error");
            header("Location: ../demo4/pages/auth/login.php");
        }

    } catch (Exception $err) {
        
    }
}

// HANDLE FOR DELETE
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    try {
        $query = "DELETE FROM `admin` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            setAdminAlert("Admin Deleted Successfully", "success");
            header("Location: ../demo4/pages/general/manage_admins.php");
        } else {
            setAdminAlert("Something went wrong", "error");
            header("Location: ../demo4/pages/general/manage_admins.php");
        }
    } catch (Exception $th) {
        // $th->getMessage()
        setAdminAlert("Something went wrong", "error");
        header("Location: ../demo4/pages/general/manage_admins.php");
    }
}

// HANDLE FOR UPDATE
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    // $password = $_POST['password'];

    // HASH THE PASSWORD
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $query = "UPDATE `admin` 
            SET `username` = '$username', `email` = '$email'
            WHERE `id` = '$id'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            setAdminAlert("Admin updated successfully","success");
            header("Location: ../demo4/pages/general/manage_admins.php");
        } else {
            setAdminAlert("Something went wrong", "error");
            header("Location: ../demo4/pages/general/manage_admins.php");
        }
    } catch (Exception $e) {
        setAdminAlert("Something went wrong", "error");
        header("Location: ../demo4/pages/general/manage_admins.php");
    }
}