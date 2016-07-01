<?php

namespace nacholibre\AdminBundle\Traits;

interface EntityInterface {
    public function getCreatedAt();

    public function setCreatedAt($date);

    public function getUpdatedAt();

    public function setUpdatedAt($date);

    public function setUser($user);

    public function getUser();
}
