<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Empresa;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Grupoactividad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            'mapped' => false,
            'required' => true,
            'data' => $grupoActividad,
            'placeholder' => 'Select a City...',
            'class' => 'AppBundle:Grupoactividad',
            'choice_label' => function ($grupoActividad) {
                      return $grupoActividad->getNombreGrupo();
                },
        ));
                
        // Neighborhoods empty, unless there is a selected City (Edit View)
        $actividades = array();
        
        // If there is a city stored in the Person entity, load the neighborhoods of it
        if ($grupoActividad) {
            // Fetch Neighborhoods of the City if there's a selected city
//            $repoNeighborhood = $this->em->getRepository('AppBundle:Neighborhood');
//            $entityManager = $this->getDoctrine()->getManager();
              $repoActividades = $this->em->getRepository('AppBundle:Actividad');
            
            $actividades = $repoActividades->createQueryBuilder("q")
                ->where("q.idgrupo = :grupoid")
                ->setParameter("grupoid", $grupoActividad->getId())
                ->getQuery()
                ->getResult();
        }
        // Add the Neighborhoods field with the properly data
        $form->add('idactividad', EntityType::class, array(
            'label' => 'Actividad',
            'required' => true,
            'placeholder' => 'Select a City first ...',
            'class' => 'AppBundle:Actividad',
            'choices' => $actividades
        ));
        
        }
        
    function onPreSubmit(FormEvent $event) {
        $form = $event->getForm();
        $data = $event->getData();

        // Search for selected City and convert it into an Entity
        $grupoActividad = $this->em->getRepository('AppBundle:Grupoactividad')->find($data['grupoActividad']);

        $this->addElements($form, $grupoActividad);
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

