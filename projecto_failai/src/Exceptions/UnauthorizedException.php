<?php

namespace Simas\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    public function __construct($message = "Neteisingi prisijungimo duomenys", $code = 401)
    {
        parent::__construct($message, $code);
    }
}