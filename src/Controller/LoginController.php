<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends Controller
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    /**
     * @Route("/login", name="login", methods={"GET","POST"})
     */
    public function login(Request $request)
    {
        $error = false;
        
        if ($request->get('name')) {
            $name = strtolower(trim($request->get('name')));
            $code = $request->get('code');
            
            /** @var User $user */
            $user = $this->em->getRepository(User::class)->findOneBy([
                'name' => $name,
                'code' => $code,
            ]);
            
            if ($user) {
                $request->getSession()->set('session', $user->getId());
                return $this->redirectToRoute('home');
            } else {
                $error = "Could not find user for name: {$name}";
            }
        }
        
        return $this->render('login.html.twig', [
            'error' => $error,
        ]);
    }
}
