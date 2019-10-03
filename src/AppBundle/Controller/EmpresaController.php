<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Empresa;
use AppBundle\Entity\FormularioA;
use AppBundle\Form\EmpresaType;
use AppBundle\Form\ActividadEmpresaType;
use AppBundle\Form\SetPeritoEmpresaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Actividad;

// Include JSON Response
use Symfony\Component\HttpFoundation\JsonResponse;


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
    
     /**
     * @Route("/empresa/actividad/modificar/{id}_{formulario_id}", name="empresa_setActividad")
     */
    public function ActividadEmpresaNuevoAction(Request $request, $id, $formulario_id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $empresa = $entityManager
            ->getRepository(Empresa::class)
            ->find($id);
        
        $formulario = $entityManager
            ->getRepository(FormularioA::class)
            ->find($formulario_id);
        
        $form = $this->createForm(ActividadEmpresaType::class, $empresa);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $empresa = $form->getData();
//            $entityManager->persist($empresa);
            $entityManager->flush();
            
            return $this->redirectToRoute('formulario_ver', array('id' => $formulario_id));

        }
        return $this->render('FormularioA/setActividad.html.twig',[
            'form' => $form->createView(),
            'formulario' => $formulario
        ]);
    }


    /**
     * Returns a JSON string with the neighborhoods of the City with the providen id.
     * @Route("/empresa/dependent", name="empresa_list_actividades", defaults={"_controller": "AppBundle:Controller:EmpresaController:listActividadesOfGrupoActividadAction"}, methods="GET")
     * @param Request $request
     * @return JsonResponse
     */
    public function listActividadesOfGrupoActividadAction(Request $request)
    {
        // Get Entity manager and repository
        $em = $this->getDoctrine()->getManager();
        $actividadesRepository = $em->getRepository("AppBundle:Actividad");
        
        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $actividades = $actividadesRepository->createQueryBuilder("q")
            ->where("q.idgrupo = :grupoid")
            ->setParameter("grupoid", $request->query->get("grupoid"))
            ->getQuery()
            ->getResult();
        
        // Serialize into an array the data that we need, in this case only name and id
        // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
        $responseArray = array();
        foreach($actividades as $actividad){
            $responseArray[] = array(
                "id" => $actividad->getId(),
                "name" => $actividad->getNombreactividad()
            );
        }
        
        // Return array with structure of the neighborhoods of the providen city id
        return new JsonResponse($responseArray);

        // e.g
        // [{"id":"3","name":"Treasure Island"},{"id":"4","name":"Presidio of San Francisco"}]
    }
    
    /**
     * @Route("/empresa/actividad/eliminar/{id}_{formulario_id}", name="actividad_eliminar")
     */
    public function empresaEliminarActividadAction(Request $request, $id, $formulario_id)
    {
            
        $entityManager = $this->getDoctrine()->getManager();
        
        $formulario = $entityManager
            ->getRepository(FormularioA::class)
            ->find($formulario_id);

        $empresa = $formulario->getEmpresa();

        $actividad = $entityManager
            ->getRepository(Actividad::class)
            ->find($id);

        $empresa->removeIdactividad($actividad);

        $entityManager->flush();

//        $this->addFlash(
//            'notice',
//            'La actividad se borró exitosamente.'
//       );

       return $this->redirectToRoute('formulario_ver', array('id' => $formulario_id));
    } 
}


