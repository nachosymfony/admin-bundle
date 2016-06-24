<?php

namespace nacholibre\AdminBundle\Utils;

use Vich\UploaderBundle\Naming\NamerInterface;
use Vich\UploaderBundle\Mapping\PropertyMapping;

/**
 * Namer class.
 */
class VichNamer implements NamerInterface {
    /**
     * Creates a name for the file being uploaded.
     *
     * @param object $obj The object the upload is attached to.
     * @param string $field The name of the uploadable field to generate a name for.
     * @return string The file name.
     */
    function name($obj, PropertyMapping  $field)
    {
        $file = $obj->getImageFile();
        $extension = $file->guessExtension();

        return uniqid('', true).'.'.$extension;
    }
}
