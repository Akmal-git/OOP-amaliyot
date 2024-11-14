<?php
require './bootstrap.php';
$post_id = $_GET;
$post = Post::getBayId($post_id);

var_dump($post)

?>

<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post <?= $post_id ?></title>
</head>

<body>

</body>

</html>>