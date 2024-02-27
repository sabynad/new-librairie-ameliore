<?php

namespace App\Form;

use App\Entity\Commander;
use App\Entity\Fournisseurs;
use App\Entity\Livres;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
          
            ->add('Id_Livre', EntityType::class, [
                'class' => Livres::class,
        'choice_label' => 'titrelivre',
            ])
            ->add('Id_fournisseur', EntityType::class, [
                'class' => Fournisseurs::class,
        'choice_label' => 'raisonsociale',
            ])
            ->add('Date_achat')
            ->add('Prix_achat')
            ->add('Nbr_exemplaires')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commander::class,
        ]);
    }
}
