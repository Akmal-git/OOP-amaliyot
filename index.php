<?php

require_once './bootstrap.php';
$posts = Post::getAll();
// var_dump($posts);

?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Amaliyot</title>
</head>

<body>
    <h1>OOP Amaliyot</h1>
    <ol>
        <?php foreach ($posts as $post): ?>
            <li>
                <h3><?= $post->id ?>.</h3>
                <h3><?= $post->title ?></h3>
                <a href="post.php?id=<?= $post->id ?>">
                    <h3>Yaratilgan vaqti: <?= $post->create_at ?></h3>
                </a>
                <h4><?= $post->body ?></h4>
            </li>
        <?php endforeach ?>
    </ol>
</body>

</html>