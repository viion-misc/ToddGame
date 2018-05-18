<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;

trait ControllerHelper
{
    public function user(Request $request)
    {
        $id = $request->getSession()->get('session');
        
        return $this->em->getRepository(User::class)->findOneBy([
            'id' => $id
        ]);
    }
}
