<?php

namespace App\Repositories;

use App\Model\Post;
use PDO;

class PostRepository
{
    public PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=dev_aulinhas',
            'danielhe4rt',
            ''
        );
    }

    public function getPostBySlug(string $postSlug): ?Post
    {
        $query = $this->pdo->prepare('SELECT * FROM posts WHERE slug = :slug');
        $query->bindParam(':slug', $postSlug, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() == 0) {
            return null;
        }

        $data = $query->fetch(PDO::FETCH_ASSOC);
        return Post::fromArray($data);
    }
}