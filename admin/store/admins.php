<?php


function getAllSubAdmins($conn) {
    $query = "SELECT * FROM `admin` WHERE `type` = 'LOW'";
    $result = mysqli_query($conn, $query);

    $ALL_ADMINS = [];

    while($rowAdmin = mysqli_fetch_assoc($result)) {
        array_push($ALL_ADMINS, $rowAdmin);
    };

    return $ALL_ADMINS;
}