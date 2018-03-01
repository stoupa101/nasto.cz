<?php
/**
 * Created by PhpStorm.
 * User: stoupa101
 * Date: 01.03.2018
 * Time: 21:17
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NatyController extends AbstractController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage() {
        return $this->render('naty/homepage.html.twig');
    }

}