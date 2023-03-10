<?php

namespace App\Exception;

use Symfony\Component\HttpFoundation\Response;

class BookCategoryNotFoundException extends \RuntimeException
{
    public function __construct(string $message = '', int $code = 0)
    {
        parent::__construct('book category not found');
    }
}
