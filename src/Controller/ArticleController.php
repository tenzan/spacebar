<?php
/**
 * Created by IntelliJ IDEA.
 * User: askar
 * Date: 2019/09/11
 * Time: 21:39
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello World!');
    }
}