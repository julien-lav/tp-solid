<?php declare(strict_types=1);

namespace App\Controller;

use App\Service\PostService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Expressive\Template\TemplateRendererInterface;

final class PostController 
{
    private $renderer;
    private $postService;

    public function __construct(TemplateRendererInterface $renderer, PostService $postService)
    {
        $this->renderer = $renderer;
        $this->postService = $postService;
    }

    public function handle(Request $request): Response
    {
        $value = $request->query->get('param1');
        $this->postService->find($value);

        return new Response($this->renderer->render('index.html.twig'));
    }
}
