<?php

namespace App\Exceptions;

use Exception;

class ResponseClientException extends Exception
{
    public function __construct($message = null, $code = 1, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
