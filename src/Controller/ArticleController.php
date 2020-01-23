<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(): Response
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public function show(string $slug): Response
    {
        return $this->render('article/show.html.twig', [
            'slug' => $slug,
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => [
                'Comentario 1',
                'Comentario 2',
                'Comentario 3',
            ],
        ]);

    }

    /**
     * @Route(
     *     "/news/{slug}/heart",
     *     name="article_toggle_heart",
     *     methods={"POST"}
     * )
     */
    public function toggleArticleHeart(string $slug): Response
    {
        return $this->json(['hearts' => rand(5, 100)]);
    }
}
