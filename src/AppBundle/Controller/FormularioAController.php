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
use AppBundle\Form\FormularioAType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of FormularioAController
 *
 * @author Emma
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

        }
        return $this->render('formularioA/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}