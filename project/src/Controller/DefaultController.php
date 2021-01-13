<?php

namespace App\Controller;

 use Symfony\Component\Dotenv\Dotenv;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\HeaderUtils;

class DefaultController extends AbstractController
{
    
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
<<<<<<< HEAD
        var_dump($this->getKanyeQuote());
        var_dump($this->getImage());
=======

>>>>>>> 7e6ed3563b9fb27491e390ee3f4467de30acf59b
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'KanyeQuote' => $this->getKanyeQuote(),
            'TrumpQuote' => $this->getTrumpQuote()
        ]);
    } 
    
    private function getKanyeQuote(): String
    {

        $apiUrl = "https://api.kanye.rest/";
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', $apiUrl);
        $content = $response->toArray();
        return $content['quote'];
    }

    private function getTrumpQuote(): String
    {

        $apiUrl = "https://api.tronalddump.io/random/quote";
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', $apiUrl);
        $content = $response->toArray();
        return $content['value'];
    }

    /**
     * @Route("/Kanye", name="Kanye")
     */
    public function k(): Response
    {

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'KanyeQuote' => $this->getKanyeQuote(),
            'TrumpQuote' => $this->getTrumpQuote()
        ]);
    } 

      /**
     * @Route("/Trump", name="Trump")
     */
    public function t(): Response
    {

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'KanyeQuote' => $this->getKanyeQuote(),
            'TrumpQuote' => $this->getTrumpQuote()
        ]);
    } 
}