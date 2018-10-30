<?php declare(strict_types=1);

namespace App\Service;

use App\Entity\Post as PostEntity;
use App\Repository\PostRepository;
// use App\Validator\Validator;

final class PostService
{
  //  private $validator;
    private $repository;
    private $posts;

    public function __construct(PostRepository $postRepository)
    {
        $uuid = '16934b41-63c0-46e6-8a7c-dbe3a007672d';
        //$this->validator = $validator;
        $this->repository = $postRepository;
		$this->posts[$uuid] = new PostEntity($uuid, 'Title lorem', 'Content ipsum');
    }

    public function find(string $value): PostEntity
    {
        //$this->validator->validate($value);
        // if ($this->cache->has($value)) {
        //     return $this->cache->get($value);
        // }
        $post = $this->repository->find($value);
        // $this->cache->set($value, $post);

        return $post;
    }
}


