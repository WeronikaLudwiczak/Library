<?php
declare(strict_types = 1);

namespace Book\Application\Query\Author;

class AuthorView {
    
    /*
     * @var string
     */
    private $firstName;
    
    /**
     *
     * @var string
     */
    private $lastName;
    
    /**
     *
     * @var string
     */
    private $description;
    
    
    public function __construct(string $firstName, string $lastName, string $description)
    {
       $this->firstName=$firstName;
       $this->lastName=$lastName;
       $this->description=$description;
    }
    
    function getFirstName(): string
    {
        return $this->firstName;
    }

    function getLastName():string
    {
        return $this->lastName;
    }

    function getDescription():string
    {
        return $this->description;
    }


    
    
    
    
}
