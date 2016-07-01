<?php
namespace nacholibre\AdminBundle\EventListener;

use nacholibre\AdminBundle\Utils\Slugger;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use nacholibre\AdminBundle\Traits\SluggableInterface;

class SluggableSubscriber implements EventSubscriber {
    function __construct($container) {
        $this->container = $container;
        //$this->postClass = $container->getParameter('nacholibre_news')['entity_class'];
        $this->slugger = new Slugger();
    }

    public function getSubscribedEvents()
    {
        return array(
            'preUpdate',
            'prePersist',
        );
    }

    public function preUpdate(LifecycleEventArgs $args) {
        $this->index($args);
    }

    public function prePersist(LifecycleEventArgs $args) {
        $this->index($args);
    }

    public function index(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof SluggableInterface) {
            $slug = $this->slugger->slugify($entity->getName());
            $entity->setSlug($slug);

            //$entityManager = $args->getEntityManager();
            // ... do something with the Product
        }
    }
}
