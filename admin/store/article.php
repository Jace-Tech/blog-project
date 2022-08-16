<?php

function getAllArticles($conn) {
    $query = "SELECT * FROM `blog` ORDER BY `date` DESC"; // ASC or DESC
    $result = mysqli_query($conn, $query);

    $allArticles = []; 

    while ($article = mysqli_fetch_assoc($result)) {
        array_push($allArticles, $article);
    }

    return $allArticles;
}


function getOneArticle($conn, $id) {
    $query = "SELECT * FROM `blog` WHERE `blog_id` = '$id'";
    $result = mysqli_query($conn, $query);

    $article = mysqli_fetch_assoc($result);
    return $article;
}
