<?php
// src/Controller/LoginPageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Users; 
// use App\Entity\UsersRepository; 
// use App\Repository\Users; 
use App\Repository\UsersRepository;




class LoginPageController extends AbstractController
{


    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }



    public function showLoginPage()
    {
        $id = 1;
        $user = "John Kowalski";
        $users = $this->entityManager->getRepository(Users::class)->findBy(['id' => $id]);


        return $this->render('login.html.twig', [
            'user' => $user,
            'users' => $users,
        ]);
        
    }
}