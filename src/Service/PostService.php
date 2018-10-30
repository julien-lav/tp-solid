
<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\post as PostEntity;
use App\Repository\post;
use App\Validator\Validator;

final class PostService
{
    private $validator;
    private $repository;

    public function __construct(Validator $validator, Post $postRepository)
    {
        $this->validator = $validator;
        $this->repository = $postRepository;
    }

    public function find(string $value): PostEntity
    {
        $this->validator->validate($value);
        // if ($this->cache->has($value)) {
        //     return $this->cache->get($value);
        // }
        $post = $this->repository->find($value);
        // $this->cache->set($value, $post);

        return $post;
    }
}