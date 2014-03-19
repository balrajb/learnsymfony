<?php

namespace DCM\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutUsController extends Controller
{
    public function aboutUsTextAction($content)
    {
        return $this->render('DCMDemoBundle:AboutUs:aboutUs.html.twig', array('content' => $content));
    }
}
