<?php

namespace App\Form;

use App\Entity\Livres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Repository\LivresRepository;
use Doctrine\ORM\EntityManagerInterface;

class LivresEditeurType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('editeur', ChoiceType::class, [
                'label' => 'Livre par editeur',
                'choices' => $this->getEditeur(),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Livres::class,
        ]);
    }

    private function getEditeur()
    {
        

        // Exemple : exécuter une requête DQL
        $query = $this->entityManager->createQuery('SELECT livres FROM App\Entity\Livres livres GROUP BY livres.editeur');
        $livres = $query->getResult();


        $editeur = [];
        foreach ($livres as $livre) {
        
         $editeur[$livre->getEditeur()] = $livre->getEditeur();
        }
        return $editeur;
    }

}
