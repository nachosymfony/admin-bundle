<?php

namespace nacholibre\AdminBundle\Utils;

class Slugger implements SluggerInterface {
    public function slugify($string, $separator = '-') {
        $name = mb_strtolower($string, 'utf8');

        $name = preg_replace('/[\p{P}]+/u', ' ', $name);

        $name = preg_replace('/\s+/', ' ', $name);

        $name = trim($name);
        $name = str_replace(' ', $separator, $name);

        $slug = $name;
        //$slug = trim(strip_tags($string));
        //$slug = \transliterator_transliterate(
        //    "NFD; [:Nonspacing Mark:] Remove; NFC; Any-Latin; Latin-ASCII; Lower();",
        //    $slug
        //);
        //$slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
        //$slug = preg_replace("/[\/_|+ -]+/", $separator, $slug);
        //$slug = trim($slug, $separator);

        return $slug;
    }
}
