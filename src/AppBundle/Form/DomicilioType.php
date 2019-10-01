<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Domicilio;
use AppBundle\Entity\Departamento;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;

class DomicilioType extends AbstractType
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
            
            ->add('tipo', ChoiceType::class, [
                    'choices'  => [
                        'Real' => "Real",
                        'Legal' => "Legal",
                        'Constituido' => "Constituido",
                    ],
                ])
                
            ->add('email', EmailType::class, ['label' => 'Email: '])
      
            ->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'))
            ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'))
        ;
    }
    
    protected function addElements(FormInterface $form, Departamento $departamento = null) {
        // 4. Add the province element
        $form->add('departamento', EntityType::class, array(
            'label' => 'Departamento',
            'required' => true,
            'data' => $departamento,
            'placeholder' => 'Seleccione un Departamento...',
            'class' => 'AppBundle:Departamento',
            'choice_label' => function ($departamento) {
                      return $departamento->getNombreDepartamento();
                },
        ));

        if($departamento)
            {$idDto = $departamento->getId();}
        else{$idDto = 0;}
        
        $form->add('idLocalidad', EntityType::class, array(
          'label' => 'Localidad',
//          'mapped' => false,
          'required' => true,
          'placeholder' => 'Seleccione un Departamento primero ...',
          'class' => 'AppBundle:Localidad',
          'query_builder' => function (EntityRepository $er) use ($idDto) {
              return $er->createQueryBuilder('q')
                  ->where("q.idDepartamento = :idDto")
                  ->setParameter("idDto", $idDto);
            }
//            'choices' => $actividades            
            ));
   
    }
    
    function onPreSubmit(FormEvent $event) {
        $form = $event->getForm();
        $data = $event->getData();

        // Search for selected City and convert it into an Entity
        $departamento = $this->em->getRepository('AppBundle:Departamento')->find($data['departamento']);
        $this->addElements($form, $departamento);
     }
     
     function onPreSetData(FormEvent $event) {
        if (null != $event->getData()) {
    
            $domicilio = $event->getData();
            $form = $event->getForm();

            // When you create a new person, the City is always empty
            $departamento = $domicilio->getDepartamento() ? $domicilio->getDepartamento() : null;

            $this->addElements($form, $departamento);
        }
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Domicilio::class,
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_domicilio';
    }

}