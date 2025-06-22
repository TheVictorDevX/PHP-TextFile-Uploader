<?php

$requestUri=$_SERVER["REQUEST_URI"];
$newRequestUri = str_replace("/website", "", $requestUri);

switch ($newRequestUri) {
    case '/':
        header("Location: http://localhost/website/upload");
        break;
    case '/upload':
        include"upload.php";
        break;
    default:
        include"not_found.php";
        break;
}