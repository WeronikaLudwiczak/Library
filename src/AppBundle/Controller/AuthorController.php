<?php
declare(strict_types = 1);

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use League\Tactician\CommandBus;
use Book\Application\Command\AddNewAuthor;



class AuthorController extends Controller 
{
      
    /**
     * @Route("/add_author", name="add_author")
     */
    public function addNewAuthorAction()
    {
        //to do
        dump();
        
    }
}
