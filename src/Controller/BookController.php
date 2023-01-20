<?php

namespace App\Controller;

use App\Service\BookService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    public function __construct(private BookService $bookService)
    {
    }

    #[Route(path: '/api/v1/category/{id}/books')]
    public function booksByCategory(): Response
    {

    }
}
