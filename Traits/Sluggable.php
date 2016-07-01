<?php

namespace nacholibre\AdminBundle\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\MappedSuperclass
 * @ORM\Table(indexes={@ORM\Index(name="slug", columns={"slug"})})
 * @UniqueEntity("name")
 */
trait Sluggable {
    /**
    * @Assert\NotBlank()
    * @ORM\Column(type="string", length=255, unique=true)
    */
    protected $name;

    /**
    * @ORM\Column(type="string", length=255, nullable=false)
    */
    protected $slug;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }
}
