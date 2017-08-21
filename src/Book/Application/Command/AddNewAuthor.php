<?php
declare(strict_types = 1);

namespace Book\Application\Command;


class AddNewAuthor 
{
    /**
     *
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

    public function __construct($firstName, $lastName, $description) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->description = $description;
    }

    /**
     * 
     * @return string
     */
    public function getFirstName(): string {
        return $this->firstName;
    }

    /**
     * 
     * @return string
     */
    public function getLastName(): string {
        return $this->lastName;
    }

    /**
     * 
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

}

