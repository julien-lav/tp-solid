<?php declare(strict_types=1);

namespace App\Entity;

final class Post
{
    private $id;
    private $title;
    private $content;

    public function __construct(string $id, string $title, string $content, \Datetime $createdAt)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->createdAt =$createdAt;
    }
}
