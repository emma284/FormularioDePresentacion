<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Empresa;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class EmpresaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cuit', IntegerType::class, ['label' => 'CUIT: '])
            ->add('razonSocial', TextType::class, ['label' => 'Razon Social: '])
            ->add('fechaInicioActividades', DateType::class,  [
            // renders it as a single text box
            'widget' => 'single_text',
            ])
            ->add('tipoPersona', ChoiceType::class, [
                        'choices'  => [
                        'Persona Física' => 1,
                        'Sociedad de Hecho' => 2,
                        'Persona Jurídica' => 3,
                    ],
                ])
            
            
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Empresa::class,
        ]);
    }

}

