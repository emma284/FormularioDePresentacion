<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\EmpresaType;
use AppBundle\Entity\FormularioA;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FormularioAType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('resumenEjecutivo', TextareaType::class, ['label' => 'Resumen ejecutivo: '])
            ->add('empresa', EmpresaType::class, ['label' => false])
//            ->add('save', SubmitType::class, ['label' => 'Guardar'])
                
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormularioA::class,
        ]);
    }

}