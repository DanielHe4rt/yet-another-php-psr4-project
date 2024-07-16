<?php

use App\Repositories\PostRepository;

if (count($_SESSION['arguments']) !== 2) {
    header('Location: /');
    die;
}

[$category, $postSlug] = $_SESSION['arguments'];

$postRepository = new PostRepository();
$post = $postRepository->getPostBySlug($postSlug);

?>

<h1><?= $post->title ?></h1>
<p><?= $post->content ?></p>
<p><?= $post->publishedAt->format('d/m/Y H:i:s') ?></p>
<p><a href="/">Voltar</a></p>
