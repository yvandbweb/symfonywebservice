<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Graphics;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
USE Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
USE Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class WebserviceController extends AbstractController
{
    
    public function root(): Response
    {


        return new Response("root of app");
    }

    
    public function retrieveParamsAndData($id): Response
    {
        $repository = $this->getDoctrine()->getRepository(Graphics::class);    
        
        $Graphics = $repository->findOneBy(['id' => $id]); 
        
 
        $encoder = new JsonEncoder();
        $defaultContext = [
            AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object, $format, $context) {
                return $object->getId();
            },
        ];
        $normalizer = new ObjectNormalizer(null, null, null, null, null, null, $defaultContext);

        $serializer = new Serializer([$normalizer], [$encoder]);
        $Graphics=$serializer->serialize($Graphics, 'json');
        
        $response=new Response();
        
        $response->setContent($Graphics);        
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Content-Type', 'application/json');


        return $response;
    }
}
?>
