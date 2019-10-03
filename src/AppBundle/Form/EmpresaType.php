<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Empresa;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;


class EmpresaType extends AbstractType
{
    private $em;
    
    /**
     * The Type requires the EntityManager as argument in the constructor. It is autowired
     * in Symfony 3.
     * 
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
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
                    'placeholder' => 'Elija una opción',
                    'choices'  => [
                    'Persona Física' => 1,
                    'Sociedad de Hecho' => 2,
                    'Persona Jurídica' => 3,
                ],
            ]);
    }
    
      
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Empresa::class,
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_empresa';
    }

}

