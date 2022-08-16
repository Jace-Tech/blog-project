<?php 

function getOneCatgory ($conn, $id) {
    $query = "SELECT * FROM category WHERE category_id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    // ["category_id" => "hdhdhd", "category_name" => "tech"]
    return $row;
}

function getAllCategories ($conn) {
    $query = "SELECT * FROM category";
    $result = mysqli_query($conn, $query);

    $categories = [];

    while($row = mysqli_fetch_assoc($result)) {
        array_push($categories, $row);
    }
    
    return $categories;
}

/**
 * [
 *      [
 *          "category_name" => "Technology",
 *          "category_id" => "cat_8785787487497493749",
 *      ],
 *      [
 *          "category_name" => "Technology",
 *          "category_id" => "cat_8785787487497493749",
 *      ],
 * ]
 */
