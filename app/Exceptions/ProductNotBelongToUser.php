<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongToUser extends Exception
{
    
    public function render()
    {
      
      return ['error' => 'movie not belong to user'];
    }
}
