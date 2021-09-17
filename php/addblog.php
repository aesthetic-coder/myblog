<?php
    $connection = mysqli_connect("localhost", "root", "","myblog");
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $input = mysqli_query($connection, "INSERT INTO blogdata(id, title, description) VALUES ('$id', '$title', '$description')");
    if($input){
        header('Location:http://localhost/myblogApp/blog.html');
    }
    else{
        header('Location:http://localhost/myblogApp/signin.html');
    }
?>