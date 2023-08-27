<?php
// src/Controller/LoginPageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginPageController extends AbstractController
{
    public function showLoginPage()
    {
        $user = "John Kowalski";

        return $this->render('login.html.twig', [
            'user' => $user,
        ]);
        
    }
}