<?php

namespace nacholibre\AdminBundle\Traits;

interface SingleUploadableImageInterface  {
    public function setImage($image);

    public function getImage();
    public function getImageFile();

    public function setImageName($imageName);

    public function getImageName();

    public function setUpdatedAt($date);
}
