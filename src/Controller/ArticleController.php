<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('OMFG! My first page!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show(string $slug): Response
    {
        return new Response("Future page for $slug");

    }
}
