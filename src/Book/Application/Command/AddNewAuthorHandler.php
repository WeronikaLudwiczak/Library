<?php

declare(strict_types = 1);

namespace Book\Application\Command;

use Book\Domain\Author;
use Book\Domain\Authors;
use Book\Application\Command\AddNewAuthor;

class AddNewAuthorHandler 
{

    /**
     *
     * @var Authors
     */
    private $authors;

    public function __construct(Authors $authors) 
    {
        $this->authors = $authors;
    }

    public function handle(AddNewAuthor $command) 
    {
        $author = new Author($command->getFirstName(), $command->getLastName(), $command->getDescription());
        dump($author);
        $this->authors->add($author);
    }

}
