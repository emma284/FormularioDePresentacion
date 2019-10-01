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

// Include JSON Response
use Symfony\Component\HttpFoundation\JsonResponse;

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
    
    /**
     * Returns a JSON string with the neighborhoods of the City with the providen id.
     * @Route("/domicilio/dependent", name="domicilio_list_localidades", defaults={"_controller": "AppBundle:Controller:DomicilioController:listLocalidadesOfDepartamentoAction"}, methods="GET")
     * @param Request $request
     * @return JsonResponse
     */
    public function listLocalidadesOfDepartamentoAction(Request $request)
    {
        // Get Entity manager and repository
        $em = $this->getDoctrine()->getManager();
        $localidadesRepository = $em->getRepository("AppBundle:Localidad");
        
        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $localidades = $localidadesRepository->createQueryBuilder("q")
            ->where("q.idDepartamento = :idDto")
            ->setParameter("idDto", $request->query->get("idDto"))
            ->getQuery()
            ->getResult();
        
        // Serialize into an array the data that we need, in this case only name and id
        // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
        $responseArray = array();
        foreach($localidades as $localidad){
            $responseArray[] = array(
                "id" => $localidad->getId(),
                "name" => $localidad->getNombreLocalidad()
            );
        }
        
        // Return array with structure of the neighborhoods of the providen city id
        return new JsonResponse($responseArray);

        // e.g
        // [{"id":"3","name":"Treasure Island"},{"id":"4","name":"Presidio of San Francisco"}]
    }
    
}
