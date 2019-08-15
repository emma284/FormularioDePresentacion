<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of DomicilioController
 *
 * @author Emma
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Domicilio;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\DomicilioType;

class DomicilioController extends Controller{
    
    /**
     * @Route("/domicilio/nuevo/")
     */
    public function createAction()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $domicilio = new Domicilio();
        $domicilio->setCalle('San Lorenzo');
        $domicilio->setNumero(16);
        $domicilio->setPiso(0);
        $domicilio->setDpto('b');
        $domicilio->setTelefono('98765432124');
        $domicilio->setEmail('mail@algo.com');
     

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($domicilio);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$domicilio->getId());
    }

    // if you have multiple entity managers, use the registry to fetch them
//    public function editAction()
//    {
//        $doctrine = $this->getDoctrine();
//        $entityManager = $doctrine->getManager();
//        $otherEntityManager = $doctrine->getManager('other_connection');
//    }
    /**
     * @Route("/domicilio/mostrar/{id}/")
     */
    public function showAction($id)
    {
        $domicilio = $this->getDoctrine()->getRepository(Domicilio::class)->find($id);
        
        if (!$domicilio) {
            throw $this->createNotFoundException('No se encontró domicilio que tiene este id '.$id);
        }
        else{
            return new Response('Se encontró el domicilio con id: '.$domicilio->getId().'. Está ubicado en calle: '.$domicilio->getCalle().' al '.$domicilio->getNumero());
        }
    }

    /**
     * @Route("/domicilio/form/", name="laRutaVieja")
     */
    //Formularios con seteo de datos por defecto
    public function new2(Request $request)
    {

        // creates a domicilio and gives it some dummy data for this example
        $domicilio = new Domicilio();
        $form = $this->createForm(DomicilioType::class, $domicilio);

        // catch all data
        $form->handleRequest($request);

        
        // validate all data and if it success save them
        if ($form->isSubmitted() && $form->isValid()) {
            
            $task = $form->getData();


            return $this->redirectToRoute('laRuta');
        }
        
        return $this->render('domicilio/new.html.twig', [
            'form' => $form->createView(),
        ]);

    }



    /**
     * @Route("/domicilio/nuevoDomicilio/" ,name="laRuta")
     */
    //Formularios con petición de datos por pantalla
    public function new(Request $request)
    {
        // creates a domicilio and gives it some dummy data for this example
        $domicilio = new Domicilio();

        // creates the form 
        $form = $this->createFormBuilder($domicilio)
            ->add('calle', TextType::class, ['label' => 'Calle: '])
            ->add('numero', IntegerType::class, ['label' => 'Número: '])
            ->add('piso', IntegerType::class, ['label' => 'Piso: '])
            ->add('dpto', TextType::class, ['label' => 'Departamento: '])
            ->add('telefono', TextType::class, ['label' => 'Teléfono: '])
            ->add('email', EmailType::class, ['label' => 'Email: '])
            ->add('save', SubmitType::class, ['label' => 'Create Domicilio'])
            ->getForm();


        // catch all data
        $form->handleRequest($request);

        
        // validate all data and if it success save them
        if ($form->isSubmitted() && $form->isValid()) {
            
            $task = $form->getData();


            return $this->redirectToRoute('laRutaVieja');
        }
        
        return $this->render('domicilio/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
