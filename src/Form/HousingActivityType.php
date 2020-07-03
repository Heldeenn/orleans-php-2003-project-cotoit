<?php

namespace App\Form;

use App\Entity\HousingActivity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HousingActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('activities', CollectionType::class, [
            'entry_type' => UserActivityType::class,
            'entry_options' => ['label' => false],
        ]);
        $builder->add('Enregistrer', SubmitType::class, [
            'attr' => ['class' => 'btn btn-primary row ml-2 mb-3'],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HousingActivity::class,
            'label' => false,
        ]);
    }
}