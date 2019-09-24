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
 * 
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Domicilio;
use AppBundle\Entity\FormularioA;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\DomicilioType;

class DomicilioController extends Controller
{
    
    /**
     * @Route("/domicilio/nuevo/{formulario_id}", name="domicilio_nuevo")
     */
    public function domicilioANuevoAction(Request $request, $formulario_id)
    {
        $domicilio = new Domicilio();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(DomicilioType::class, $domicilio);

        $form->handleRequest($request);
        
        $formulario = $entityManager
                        ->getRepository(FormularioA::class)
                        ->find($formulario_id);
        
        if($form->isSubmitted() && $form->isValid()){

            $domicilio = $form->getData();
            
            
            $domicilio->setEmpresa($formulario->getEmpresa());
            $entityManager->persist($domicilio);
            $entityManager->flush();
            
            return $this->redirectToRoute('formulario_ver', array('id' => $formulario_id));

        }
        
        return $this->render('news/domicilio_new.html.twig',[
            'form' => $form->createView(),
            'formulario' => $formulario,
        ]);
    }
    
    /**
     * @Route("/domicilio/modificar/{id}_{formulario_id}", name="domicilio_modificar")
     */
    public function domicilioModificarAction(Request $request, $id, $formulario_id)
    {
            
        $entityManager = $this->getDoctrine()->getManager();

        $domicilio = $entityManager
            ->getRepository(Domicilio::class)
            ->find($id);

        $form = $this->createForm(DomicilioType::class, $domicilio);

        $form->handleRequest($request);
        
        $formulario = $entityManager
                        ->getRepository(FormularioA::class)
                        ->find($formulario_id);

        if($form->isSubmitted() && $form->isValid()){

            $domicilio = $form->getData();

            $entityManager->flush();
            
            return $this->redirectToRoute('formulario_ver', array('id' => $formulario_id));

        }
        return $this->render('news/domicilio_new.html.twig',[
            'form' => $form->createView(),
            'formulario' => $formulario,
        ]);
    }
    
}
