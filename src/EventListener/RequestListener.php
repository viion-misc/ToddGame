<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class RequestListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        
        $isRouteLogin = $event->getRequest()->getPathInfo() === '/login';
        $isLoggedIn = $event->getRequest()->getSession()->get('session');
        
        // redirect if this is not the login route and they're not logged in
        if (!$isRouteLogin && !$isLoggedIn) {
            $event->setResponse(
                new RedirectResponse('/login')
            );
        }
    }
}
