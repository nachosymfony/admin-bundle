<?php

namespace nacholibre\AdminBundle\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

trait SeoTitle {
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $seoTitle;

    public function getSeoTitle() {
        return $this->seoTitle;
    }

    public function setSeoTitle($title) {
        $this->seoTitle = $title;
    }
}
