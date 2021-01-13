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

    private function getImage(): String
    {
        
        $accessKey = $this->getParameter('accesskey');
        $apiUrl = "https://api.unsplash.com/photos/random";
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', $apiUrl, [
            'headers' => [
                'Authorization' => "Client-ID " . $accessKey
            ]
        ]);
        $content = $response->toArray();
        return $content['urls']['full'];
    }
}