<?php

namespace nacholibre\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ImageType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', 'vich_image', [
                'label' => false,
                'required' => false,
                'allow_delete' => true,
                'download_link' => false,
            ])
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'nacholibre\AdminBundle\Model\VichImageModel',
        ));
    }

    public function getName()
    {
        return 'et_image';
    }
}
