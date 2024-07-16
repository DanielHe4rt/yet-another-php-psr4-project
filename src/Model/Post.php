<?php

namespace App\Model;

use DateTimeImmutable;

class Post
{
    public function __construct(
        public int $id,
        public string $title,
        public string $slug,
        public string $content,
        public \DateTimeInterface $publishedAt,
    )
    {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            title: $data['title'],
            slug: $data['slug'],
            content: $data['content'],
            publishedAt: new DateTimeImmutable($data['published_at']),
        );
    }
}