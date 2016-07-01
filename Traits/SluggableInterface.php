<?php

namespace nacholibre\AdminBundle\Traits;

interface SluggableInterface {
    public function getName();

    public function setName($name);

    public function getSlug();

    public function setSlug($slug);
}
