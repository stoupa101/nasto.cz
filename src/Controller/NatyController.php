<?php
/**
 * Created by PhpStorm.
 * User: stoupa101
 * Date: 01.03.2018
 * Time: 21:17
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class NatyController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage() {
        return new Response('start');
    }

}