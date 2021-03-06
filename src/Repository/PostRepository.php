<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post as PostEntity;

interface PostRepository
{
    public function findAll(): PostEntity;
    public function find(string $id): PostEntity;
    public function create(string $name): PostEntity;

}