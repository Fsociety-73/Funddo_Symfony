<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
#[Route('/client/dashboard', name: 'client_dashboard')]
public function dashboard(): Response
{
// Render the client dashboard template
return $this->render('client/dashboard.html.twig');
}
}