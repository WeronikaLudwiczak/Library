<?php

declare(strict_types = 1);

namespace Author\Domain\Exception;


class AuthorNotFoundException extends \Exception {
    
    public static function byName($firstName, $lastName): AuthorNotFoundException
    {
        return new AuthorNotFoundException('Author' . $firstName.' '.$lastName . ' does not exist.');
        
    }
}
