<?php

namespace Devografie\cmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParametresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'text', array(
                'label' => 'Libelle'
            ))
            ->add('actif', 'checkbox', array(
                'label' => 'Actif'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Devografie\cmsBundle\Entity\Parametres'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'devografie_cmsbundle_parametres';
    }
}
