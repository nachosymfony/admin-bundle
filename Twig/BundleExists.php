<?php

namespace nacholibre\AdminBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

class BundleExists extends \Twig_Extension {
    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'bundleExists',
                array($this, 'bundleExists')
            ),
        );
    }


    public function bundleExists($bundle){
        return array_key_exists(
            $bundle,
            $this->container->getParameter('kernel.bundles')
        );
    }

    public function getName() {
        return 'nacholibre.admin';
    }
}
