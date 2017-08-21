<?php
declare(strict_types = 1);

namespace Book\Infrastructure\Application\Doctrine\Dbal;

use Doctrine\DBAL\Connection;
use Book\Application\Query\Author\AuthorQuery;
use Book\Application\Query\Author\AuthorView;

final class DbalAuthorQuery implements AuthorQuery 
{
    
    /**
     *
     * @var Connection 
     */
    private $connection;
    
    public function __construct(Connection $connection) 
    {
        $this->connection=$connection;
    }
    
    public function count(): int 
    {
        
    }

    public function getAll(): array 
    {
        
        $queryBuilder=$this->connection->createQueryBuilder();
        
        $queryBuilder
                ->select('a.firstname','a.lastname', 'a.description')
                ->from('author', 'a');
   
        $authorsData=$queryBuilder->execute()->fetchAll();

        return array_map(function(array $authorsData){
            return new AuthorView($authorsData['firstname'], $authorsData['lastname'], $authorsData['description']);
        }, $authorsData);
    }

    public function getById(int $id): AuthorView 
    {
        
    }

}
