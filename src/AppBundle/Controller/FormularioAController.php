<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\FormularioA;
use AppBundle\Entity\Domicilio;
use AppBundle\Entity\Representante;
use AppBundle\Form\FormularioAType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of FormularioAController
 *
 *
 */

 class FormularioAController extends Controller
 {
    /**
     * @Route("/formulario/nuevo/", name="formulario_nuevo")
     */
    public function formularioANuevoAction(Request $request)
    {
        $formularioA = new FormularioA();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(FormularioAType::class, $formularioA);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $formularioA = $form->getData();
            $entityManager->persist($formularioA);
            $entityManager->flush();
            
            return $this->redirectToRoute('listar_formularios');

        }
        return $this->render('formularioA/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/formulario/listado/", name="listar_formularios")
     */
    public function formularioAListarAction(Request $request){
        $entityManager = $this->getDoctrine()->getManager();

        $formularios = $entityManager
                    ->getRepository(FormularioA::class)
                    ->findBy([
                        'fechaBaja' => NULL
                    ]);
        
        return $this->render('formularioA/listar.html.twig', array(
            'formularios' => $formularios));
    }

    /**
     * @Route("/formulario/ver/{id}", name="formulario_ver")
     */
    public function formularioAVerAction(Request $request, $id){
        $entityManager = $this->getDoctrine()->getManager();

        $formulario = $entityManager
                    ->getRepository(FormularioA::class)
                    ->find($id);
        
        $domicilios = $entityManager
                    ->getRepository(Domicilio::class)
                    ->findBy([
                        'empresa' => $formulario->getEmpresa()->getId()
                    ]);
        
        $representantes = $entityManager
                    ->getRepository(Representante::class)
                    ->findBy([
                        'idEmpresa' => $formulario->getEmpresa()->getId()
                    ]);
        
        
        return $this->render('formularioA/formularioA.html.twig', array(
            'formulario' => $formulario,
            'domicilios' => $domicilios,
            'representantes' => $representantes));
    }



    /**
     * @Route("/formulario/modificar/{id}", name="formulario_modificar")
     */
    public function formularioAModificarAction(Request $request, $id)
    {
            
        $entityManager = $this->getDoctrine()->getManager();

        $formulario = $entityManager
            ->getRepository(FormularioA::class)
            ->find($id);

        $form = $this->createForm(FormularioAType::class, $formulario);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $formulario = $form->getData();

//            $entityManager->persist($formulario);
            $entityManager->flush();
            
            return $this->redirectToRoute('listar_formularios');

        }
        return $this->render('formularioA/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/formulario/eliminar/{id}", name="formulario_eliminar")
     */
    public function formularioAEliminarAction(Request $request, $id)
    {
            
        $entityManager = $this->getDoctrine()->getManager();

        $formulario = $entityManager
            ->getRepository(FormularioA::class)
            ->find($id);

       $formulario->setFechaBaja(new \DateTime());

       $entityManager->flush();

       $this->addFlash(
           'notice',
           'El formulario se borró exitosamente.'
       );

       return $this->redirectToRoute('listar_formularios');
    }
}