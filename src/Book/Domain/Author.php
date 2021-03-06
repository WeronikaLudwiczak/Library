<?php
declare(strict_types = 1);

namespace Book\Domain;


class Author {
    
    /**
     *
     * @var integer
     */
    private $id;
    
    /**
     *
     * @var string
     */
    private $firstname;
    
    /**
     *
     * @var string
     */
    private $lastname;
    
    /**
     *
     * @var string
     */
    private $description;
    
    
    public function __construct(string $firstname, string $lastname, string $description){
   
        $this->id=-1;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->description =$description;
        
    }
   
}
