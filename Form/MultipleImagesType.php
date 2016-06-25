<?php

namespace nacholibre\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;

#use AppBundle\Form\ProjectImageType;
use nacholibre\AdminBundle\Form\ImageType;

class MultipleImagesType extends AbstractType {
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'type' => ImageType::class,
            //'data_class' => 'nacholibre\AdminBundle\Model\VichImageModel',
            'allow_add' => true,
            'allow_delete' => true,
            'required' => false,
            'label' => 'Images',
            'entry_options' => [
                'data_class' => 'nacholibre\AdminBundle\Model\VichImageModel'
            ],
            'by_reference'  => false,
            'prototype_name' => '__images__',
            'attr' => ['class' => 'images'],
        ));
    }

    public function getParent() {
        return CollectionType::class;
    }

    //public function getName()
    //{
    //    return 'multiple_images';
    //}
}
