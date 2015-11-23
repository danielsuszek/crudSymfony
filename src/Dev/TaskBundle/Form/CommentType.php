<?php

namespace Dev\TaskBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentContent', 'text', array(
                'label' => 'Komentarz: ',
                'required' => true, // client side only
                'attr' => array(
                    'size' => '32',
                    'placeholder' => 'Dodaj komentarz...',
                )
            ))
            ->add('commentDate', 'date', array(
                'label' => 'Data',
                'required' => true,
            ))
            ->add('save', 'submit')
        ;
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dev\TaskBundle\Entity\Comment'
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'dev_taskbundle_comment';
    }
}