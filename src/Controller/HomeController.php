<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    use ControllerHelper;
    
    /** @var EntityManagerInterface */
    public $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request)
    {
        return $this->render('home.html.twig', [
            'user' => $this->user($request)
        ]);
    }
    
    /**
     * @Route("/season", name="season")
     */
    public function season(Request $request)
    {
        return $this->render('season.html.twig', [
            'user' => $this->user($request)
        ]);
    }
    
    /**
     * @Route("/players", name="players")
     */
    public function players(Request $request)
    {
        return $this->render('players.html.twig', [
            'user' => $this->user($request)
        ]);
    }
}
