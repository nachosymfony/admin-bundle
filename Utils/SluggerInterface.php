<?php

namespace nacholibre\AdminBundle\Utils;

interface SluggerInterface {
    public function slugify($string, $separator = '-');
}
