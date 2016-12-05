<?php

namespace nacholibre\AdminBundle\EventListener;

use Gedmo\Sluggable\SluggableListener as GedmoSluggableListener;
use Gedmo\Sluggable\Util\Urlizer;

class SluggableListener extends GedmoSluggableListener {
    public function __construct() {
        $this->setTransliterator(array('\nacholibre\AdminBundle\EventListener\SluggableListener', 'transliterate'));
    }

    /**
     * Since transliterate will convert "ä" to an "a", I added this hack to call
     * unaccent first so it is converted to "ae" first.
     *
     * @param string $text
     * @param string $separator
     * @return string $text
     */
    public static function transliterate($text, $separator = '-', $objectBeingSlugged) {
        $slugger = new \nacholibre\AdminBundle\Utils\Slugger;
        $text = $slugger->slugify($text, $separator);

        //$text = Urlizer::transliterate($text, $separator);
        return $text;
    }
}
