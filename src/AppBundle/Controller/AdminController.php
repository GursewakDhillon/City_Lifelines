<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
    * @Route("/", name="home")
    **/
    public function showIndex()
    {
        
         return new Response("<html><head><title>Vancouver Life Lines</title></head><body><h1>Welcome to <br/> Vancouver!</h1></body></html>");
    
    }   
}
