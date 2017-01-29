<?php

namespace Aistk\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AistkBlogBundle:Default:index.html.twig');
    }
}
