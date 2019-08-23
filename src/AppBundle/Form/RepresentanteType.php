<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Representante;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RepresentanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni', IntegerType::class, ['label' => 'DNI: '])
            ->add('apellido', TextType::class, ['label' => 'Apellido: '])
            ->add('nombre', TextType::class, ['label' => 'Nombre: '])
            ->add('cargo', TextType::class, ['label' => 'Cargo: '])
            ->add('tipo', ChoiceType::class, [
                        'choices'  => [
                        'Autoridad Societaria' => 'Autoridad Societaria',
                        'Administrador' => 'Administrador',
                        'Representante Legal' => 'Representante Legal',
                    ],
                ])
            
            
                
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Representante::class,
        ]);
    }

}

