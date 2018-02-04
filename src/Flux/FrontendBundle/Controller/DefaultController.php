<?php

namespace Flux\FrontendBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 */
class DefaultController extends Controller
{
    /**
     * @Route(path="/")
     *
     * @return Response
     */
    public function homepageAction()
    {
        return $this->render('::homepage.html.twig');
    }
}
