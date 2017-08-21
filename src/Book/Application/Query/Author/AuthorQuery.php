<?php
declare(strict_types = 1);

namespace Book\Application\Query\Author;

use Book\Application\Query\Author\AuthorView;

interface AuthorQuery
{
    
    /**
     * Find Author by Id
     * @param integer $id
     * @return AuthorView
     */
    public function getById(int $id): AuthorView;
    
    /**
     * Find all Authors
     * @return AuthorView[]
     */
    public function getAll(): array;
    
    
    /**
     * Gives number of Authors
     * @return int
     */
    public function count(): int;
        
   
    
}

