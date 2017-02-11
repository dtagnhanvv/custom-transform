<?php

namespace Tagcade\URCustomTransformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('URCustomTransformBundle:Default:index.html.twig');
    }
}
