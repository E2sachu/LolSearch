<?php

namespace Projet\LolSearchBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LieuxType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('site')
            ->add('horaire')
            ->add('numero')
            ->add('description')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\LolSearchBundle\Entity\Lieux'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_lolsearchbundle_lieux';
    }
}
