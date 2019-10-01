<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Empresa;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Grupoactividad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Doctrine\ORM\EntityManagerInterface;


class ActividadEmpresaType extends AbstractType
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
            ->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'))
            ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'))
            ;
    }
    
    protected function addElements(FormInterface $form, Grupoactividad $grupoActividad = null) {
        // 4. Add the province element
        $form->add('grupoActividad', EntityType::class, array(
            'label' => 'Grupo de Actividad',
            'required' => true,
            'data' => $grupoActividad,
            'placeholder' => 'Seleccione un Grupo de Actividad...',
            'class' => 'AppBundle:Grupoactividad',
            'choice_label' => function ($grupoActividad) {
                      return $grupoActividad->getNombreGrupo();
                },
        ));

        if($grupoActividad)
            {$idgrupo = $grupoActividad->getId();}
        else{$idgrupo = 0;}
        
        $form->add('idactividad', EntityType::class, array(
          'label' => 'Actividad',
//          'mapped' => false,
          'required' => true,
          'placeholder' => 'Seleccione un Grupo de Actividad primero ...',
          'class' => 'AppBundle:Actividad',
          'query_builder' => function (EntityRepository $er) use ($idgrupo) {
              return $er->createQueryBuilder('q')
                  ->where("q.idgrupo = :grupoid")
                  ->setParameter("grupoid", $idgrupo);
            }
//            'choices' => $actividades            
            ));
            

        
        
    }
        
    function onPreSubmit(FormEvent $event) {
        $form = $event->getForm();
        $data = $event->getData();

        // Search for selected City and convert it into an Entity
        $grupoActividad = $this->em->getRepository('AppBundle:Grupoactividad')->find($data['grupoActividad']);
        $this->addElements($form, $grupoActividad);
//        if ($grupoActividad) {
////            // Fetch Neighborhoods of the City if there's a selected city
//////            $repoNeighborhood = $this->em->getRepository('AppBundle:Neighborhood');
//////            $entityManager = $this->getDoctrine()->getManager();
//            $repoActividades = $this->em->getRepository('AppBundle:Actividad');
//
//
//            $actividades = $repoActividades->createQueryBuilder("q")
//              ->where("q.idgrupo = :grupoid")
//              ->setParameter("grupoid", $grupoActividad->getId())
//              ->getQuery()
//              ->getResult();
//        }
//        // Add the Neighborhoods field with the properly data
//        $form->add('idactividad', EntityType::class, array(
//            'required' => true,
//            'placeholder' => 'Select a City first ...',
//            'class' => 'AppBundle:Actividad',
//            'query_builder' => function (EntityRepository $er) use ($grupoActividad){
//              return $er->createQueryBuilder('q')
//                  ->where("q.idgrupo = :grupoid")
//                  ->setParameter("grupoid", $grupoActividad->getId());
//            }           
//            ));
    }

    function onPreSetData(FormEvent $event) {
        if (null != $event->getData()) {
    
            $empresa = $event->getData();
            $form = $event->getForm();

            // When you create a new person, the City is always empty
            $grupoActividad = $empresa->getGrupoActividad() ? $empresa->getGrupoActividad() : null;

            $this->addElements($form, $grupoActividad);
        }
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

