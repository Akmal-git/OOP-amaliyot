<?php
require_once './bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
   $resault= Post::create($title, $body);
   var_dump($resault);
}
?>

<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="title" />
        <br />
        <textarea rows="10" cols="30" name="body"></textarea>
        <br />
        <button type="submit">Create new post</button>
    </form>
</body>

</html>