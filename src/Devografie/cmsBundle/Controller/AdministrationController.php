<?php

namespace Devografie\cmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrationController extends Controller
{
    public function indexadminAction()
    {
        return $this->render('DevografiecmsBundle:Administration:indexAdmin.html.twig', array(
                // ...
            ));    }

}
