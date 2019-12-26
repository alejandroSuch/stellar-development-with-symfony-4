<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => [
                'Comentario 1',
                'Comentario 2',
                'Comentario 3'
            ]
        ]);

    }
}
