<?php

namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog")
     */

    public function list()
     {
     // ...
     }
     /**
     * Matches /blog/
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
      {
      // $slug will equal the dynamic part of the URL
      // e.g. at /blog/yay-routing, then $slug='yay-routing'
      // ...
      }

    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
