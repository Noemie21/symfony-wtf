<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        var_dump($this->getKanyeQuote());
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
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
}