<?php
declare(strict_types = 1);

namespace Book\Infrastructure\Domain\Doctrine\ORM;

use Doctrine\ORM\EntityManagerInterface;
use Book\Domain\Author;



class Authors implements \Book\Domain\Authors {
    
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    
    
    public function __construct(EntityManagerInterface $entityManager) {
        
        $this->entityManager=$entityManager;
    }

    /**
     * 
     * @inheritdoc
     */
    public function add(Author $author) {
        
//        $this->entityManager->persist($author);
                $this->entityManager->transactional(function (EntityManagerInterface $entityManager) use ($author){
            $entityManager->persist($author);
        });
        
    }

    /**
     * 
     * @inheritdoc
     */
    public function exist(Author $author): bool {
        
    }

    /**
     * 
     * @inheritdoc
     */
    public function getAuthorById($id): Author 
    {
       return $this->findAuthorById($id);
    }
    
    /**
     * @param integer $id
     * @return null|Author
     */
    private function findAuthorById($id):Author
    {
       return $this->entityManager->find(Author::class,$id);
    }

}
