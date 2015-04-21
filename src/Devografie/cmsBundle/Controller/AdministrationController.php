<?php

namespace Devografie\cmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Devografie\cmsBundle\Form\ParametresType;

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

}
