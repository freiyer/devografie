<?php

namespace Devografie\cmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Devografie\cmsBundle\Form\ParametresType;
use Symfony\Component\HttpFoundation\Response;

class AdministrationController extends Controller
{
    public function indexadminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $parametres = $em->getRepository('DevografiecmsBundle:Parametres')->findAll();

        foreach($parametres as $parametre){
            $form = $this->createForm(new ParametresType($parametre), $parametre);
            $formView[] = $form->createView();
        }


        return $this->render('DevografiecmsBundle:Administration:indexAdmin.html.twig', array(
            'forms' => $formView
        ));
    }

    public function editparametresAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $parametre = $em->getRepository('DevografiecmsBundle:Parametres')->find($id);

        $form = $this->createForm(new ParametresType($parametre), $parametre);

        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $parametreform = $form->getData();
            $parametre->setActif($parametreform->getActif());

            $em->persist($parametre);
            $em->flush();
        }else{
           return new response('hors is valid');
        }

        return $this->redirect($this->generateUrl('indexadmin'));
        //return new response($parametreform);

    }

}
