<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="http://localhost/website/upload" method="post" enctype="multipart/form-data">
        <h1>Upload Text File</h1>
        <input type="file" accept=".txt" name="file">
        <br>
        <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>

<?php
    require_once("database.php");
        
    if(isset($_POST["upload"])){
        $orginal_file_name=$_FILES["file"]["name"];
        
        $file_extension=pathinfo($orginal_file_name)["extension"];

        $server_file_name=uniqid().".$file_extension";
        $server_folder="text-files";
        $server_path="$server_folder/$server_file_name";

        $server_file=$_FILES["file"]["tmp_name"];
        
        $sql="INSERT INTO text_files (original_name, server_path) VALUES (:original_name, :server_path)";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam("original_name",$orginal_file_name);
        $stmt->bindParam("server_path",$server_path);
        $stmt->execute();
        
        move_uploaded_file($server_file,$server_path);
    }
?>