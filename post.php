<?php
require './bootstrap.php';
$post_id = $_GET['id'];
$post = Post::getBayId($post_id);

// var_dump($post)

?>

<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post <?= $post_id ?></title>
</head>

<body>
    <div>
        <h3><?= $post->id . '-' . $post->title ?></h3>
        <p><?= $post->body ?></p>
        <small>Yaratilgan sana: <?= $post->create_at ?></small>
    </div>
</body>

</html>