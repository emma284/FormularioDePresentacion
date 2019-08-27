<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Domicilio;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Form\EmpresaType;

class DomicilioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('calle', TextType::class, ['label' => 'Calle: '])
            ->add('numero', IntegerType::class, ['label' => 'Número: '])
            ->add('piso', IntegerType::class, ['label' => 'Piso: '])
            ->add('depto', TextType::class, ['label' => 'Depto: '])
            ->add('telefono', TextType::class, ['label' => 'Teléfono: '])
            
//            ->add('zonificacion', ChoiceType::class, [
//                        'choices'  => [
//                        'Parque Industrial' => "Parque Industrial",
//                        'Industrial/Rural' => "Industrial/Rural",
//                        'Urbana' => "Urbana",
//                        'Otras Zonas' => "Otras Zonas",
//                    ],
//                ])    
            
//            ->add('tipo', ChoiceType::class, [
//                    'choices'  => [
//                        'Real' => "Real",
//                        'Legal' => "Legal",
//                        'Constituido' => "Constituido",
//                    ],
//                ])
                
            ->add('email', EmailType::class, ['label' => 'Email: '])
            
            ->add('empresa', EmpresaType::class, ['label' => false])
                

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Domicilio::class,
        ]);
    }

}