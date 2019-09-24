<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Empresa;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class SetPeritoEmpresaType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idperito', EntityType::class, [
                'label' => false,
                'placeholder' => 'Elija una opción',
                'class' => 'AppBundle:Perito',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.apellido', 'ASC');
                    },
                'choice_label' => function ($perito) {
                      $str = ", ";
                      return "{$perito->getApellido()}{$str}{$perito->getNombre()}";
                }
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

