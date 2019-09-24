<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of RepresentanteController
 *
 * 
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Representante;
use AppBundle\Entity\FormularioA;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\RepresentanteType;

class RepresentanteController extends Controller
{
    
    /**
     * @Route("/representante/nuevo/{formulario_id}", name="representante_nuevo")
     */
    public function representanteNuevoAction(Request $request, $formulario_id)
    {
        $representante = new Representante();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(RepresentanteType::class, $representante);

        $form->handleRequest($request);
        
        $formulario = $entityManager
                        ->getRepository(FormularioA::class)
                        ->find($formulario_id);
        
        if($form->isSubmitted() && $form->isValid()){

            $representante = $form->getData();
            
            
            $representante->setIdEmpresa($formulario->getEmpresa());
            $entityManager->persist($representante);
            $entityManager->flush();
            
            return $this->redirectToRoute('formulario_ver', array('id' => $formulario_id));

        }
        
        return $this->render('news/representante_new.html.twig',[
            'form' => $form->createView(),
            'formulario' => $formulario,
        ]);
    }
    
}
