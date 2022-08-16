<?php 

// CREATE A DB CONNECTION TO THAT BLOG DATABASE
$host = "localhost";
$username = "root";
$password = "";
$db_name = "blog";

$conn = mysqli_connect($host, $username, $password, $db_name);

// if($conn) echo "DB connected!!";


// STEPS
//  - AUTHENTICATION
//  - TABLES IN THE DB BLOGS
//  - CREATE FORMS FOR THE VARIOUS TABLE DATA
//  - MAKE THE CRUD OPERATIONS FOR THE VARIOUS TABLE
//  - VIEW THE DATA IN THE USER'S END [MAIN SITE] 
//  - HOST THE SITE
