<?php
declare(strict_types = 1);

namespace Book\Application\Query\Author;

use Book\Application\Query\Author\AuthorView;

interface AuthorQuery
{
    
    /**
     * Finds Author by Id
     * @param integer $id
     * @return AuthorView
     */
    public function getById(int $id): AuthorView;
    
    /**
     * Finds all Authors
     * @return AuthorView[]
     */
    public function getAll(): array;
    
    
    /**
     * Gives number of Authors
     * @return int
     */
    public function count(): int;
    
    /**
     * Finds Authors by last name 
     * @param string $lastName
     * @return AuthorView[] 
     */
    public function getByLastName(string $lastName): array;
        
   
    
}

