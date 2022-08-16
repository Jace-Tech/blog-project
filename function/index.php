<?php 

function cleanInput($conn, $input){
    return mysqli_real_escape_string($conn, trim($input));
}

function uploadFile ($file, $destination) {
    // image.png
    $filenameArray = explode(".", $file["name"]);
    $filename = $filenameArray[0];
    $extension = end($filenameArray);
    // image/jpg
    // audio/mp3
    // video/mp3
    $type = explode("/", $file['type'])[0];

    $filename .= time() . ".$extension";
    $DB_filename = "$filename|$type";

    $tempLocation = $file['tmp_name'];

    // Move to the uploads folder
    $uploaded = move_uploaded_file($tempLocation, $destination.$filename);

    return [
        "uploaded" => $uploaded,
        "filename" => $DB_filename
    ];
}

function setAdminAlert ($message, $type) {
    $_SESSION["ADMIN_ALERT"] = json_encode([
        "message" => $message,
        "type" => $type
    ]);
}

function getDaysAgo ($date) {
    $today = time();
    $otherDay = strtotime($date);

    $actualSeconds = $today - $otherDay;
    $actualDay = $actualSeconds / (60 * 60) % 24;
    $suffix = $actualDay > 1 ? "DAYS" : "DAY";
    return "$actualDay $suffix AGO";
}