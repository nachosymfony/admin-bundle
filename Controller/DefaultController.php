<?php

namespace nacholibre\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('nacholibreAdminBundle::index.html.twig');
    }
}
