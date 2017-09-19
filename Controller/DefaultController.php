<?php

namespace EVO\TelegramBotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EVOTelegramBotBundle:Default:index.html.twig');
    }
}
