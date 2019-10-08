<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Empresa;
use AppBundle\Entity\FormularioA;
use AppBundle\Form\EmpresaType;
use AppBundle\Form\SetPeritoEmpresaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class EmpresaController extends Controller
{
 
    /**
     * @Route("/empresa/nuevo/", name="empresa_nuevo")
     */
    public function EmpresaNuevoAction(Request $request)
    {
        $empresa = new Empresa();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(EmpresaType::class, $empresa);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $empresa = $form->getData();
            $entityManager->persist($empresa);
            $entityManager->flush();
            
            return $this->redirectToRoute('listar_formularios');

        }
        return $this->render('default/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/empresa/perito/modificar/{id}_{formulario_id}", name="empresa_setPerito")
     */
    public function EmpresaNuevoPeritoAction(Request $request, $id, $formulario_id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $empresa = $entityManager
            ->getRepository(Empresa::class)
            ->find($id);
        
        $formulario = $entityManager
                        ->getRepository(FormularioA::class)
                        ->find($formulario_id);
        
        $form = $this->createForm(SetPeritoEmpresaType::class, $empresa);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $empresa = $form->getData();
//            $entityManager->persist($empresa);
            $entityManager->flush();
            
            return $this->redirectToRoute('formulario_ver', array('id' => $formulario_id));

        }
        return $this->render('FormularioA/setPerito.html.twig',[
            'form' => $form->createView(),
            'formulario' => $formulario
        ]);
    }
    
}


