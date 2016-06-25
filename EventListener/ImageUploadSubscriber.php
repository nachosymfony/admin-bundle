<?php
namespace nacholibre\AdminBundle\EventListener;

//use nacholibre\NewsBundle\Entity\Post;
//use nacholibre\AdminBundle\Utils\Slugger;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use nacholibre\AdminBundle\Model\VichImageModel;

class ImageUploadSubscriber implements EventSubscriber {
    function __construct($container) {
        //$this->postClass = $container->getParameter('nacholibre_news')['entity_class'];
        //$this->slugger = new Slugger();
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
        $image = $args->getEntity();

        // perhaps you only want to act on some "Product" entity
        if ($image instanceof VichImageModel) {
            $image->setUpdatedAt(new \Datetime());
            //$entityManager = $args->getEntityManager();
            // ... do something with the Product
        }
    }
}
