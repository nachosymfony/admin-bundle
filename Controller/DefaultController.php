<?php

namespace nacholibre\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use nacholibre\AdminBundle\Utils\Slugger;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {
    /**
    * @Route("/generate_slug/{query}", name="nacholibre.admin_bundle.generate_slug", options={"expose": true})
    */
    public function generateSlugAction($query) {
        $slugger = new Slugger;
        $slug = $slugger->slugify($query);

        return new JsonResponse([
            'slug' => $slug
        ]);
    }
}
