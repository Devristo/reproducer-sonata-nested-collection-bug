<?php


namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\Form\Type\CollectionType;

final class ChapterAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form->add('pages', CollectionType::class,
            [
                'by_reference' => false,
            ],
            [
                'edit' => 'inline',
                'inline' => 'table',
            ]
        );
    }
}
