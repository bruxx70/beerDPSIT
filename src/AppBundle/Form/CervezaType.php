<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CervezaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('nombre', null, [
               'constraints' => [
                   new NotBlank(["message" => "Campo Obligatorio!"]),
                   new Length(['min' => 3]),
               ],
           ])

          ->add('descripcion', TextareaType::class, array(
              'label' => 'Descripción',
              'attr' => array(
                  'class' => 'form-control',
                  'cols' => 90,
                  'rows' => 4,
                  'placeholder' => 'Descripción'
              )))

          ->add('alcohol')
          ->add('precio')
          ->add('foto', FileType::class, array('label' => 'Imágen (JPG/PNG)',
                                          "data_class" => null,
                                          "required" => true))
          ->add('destacada')
          ->add('origen')
          ->add('estilo')
          ->add('presentacion')
          ->add('color')
          ->add('promo');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cerveza'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cerveza';
    }


}
