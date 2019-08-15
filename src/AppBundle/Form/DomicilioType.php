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

class DomicilioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('calle', TextType::class, ['label' => 'Calle: '])
            ->add('numero', IntegerType::class, ['label' => 'Número: '])
            ->add('piso', IntegerType::class, ['label' => 'Piso: '])
            ->add('dpto', TextType::class, ['label' => 'Depto: '])
            ->add('telefono', TextType::class, ['label' => 'Teléfono: '])
            ->add('email', EmailType::class, ['label' => 'Email: '])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Domicilio::class,
        ]);
    }

}