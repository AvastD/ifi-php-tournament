<?php

/**
 * Created by PhpStorm.
 * User: ongenae
 * Date: 29/11/17
 * Time: 08:50
 */

namespace App\Controller;


use App\Entity\Tournament;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{

    /**
     * @return Response
     * @Route("/homepage", name="homepage")
     */
    public function index(Request $request)
    {
        $tournaments = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Tournament::class)
            ->findAll();

        return $this->render('homepage.html.twig',
            ['tournaments' => $tournaments,
            'message' => $request->query->get('message', 'Pas de message')]);
    }
}