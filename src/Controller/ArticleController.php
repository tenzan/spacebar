<?php
/**
 * Created by IntelliJ IDEA.
 * User: askar
 * Date: 2019/09/11
 * Time: 21:39
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello World!');
    }

    /**
	 * @Route("/news/{slug}")
	 */

    public function show($slug)
	{
		$comments = [
			'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ',
			'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.',
			'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.'
		];
		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments,
			]);
	}
}
