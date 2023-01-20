<?php

namespace App\Exception;

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

class BookCategoryNotFoundException extends RuntimeException
{
    public function __construct(string $message = "", int $code = 0)
    {
        parent::__construct('book category not found', Response::HTTP_NOT_FOUND);
    }
}
