<?php
declare(strict_types = 1);

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use League\Tactician\CommandBus;
use Book\Application\Command\AddNewAuthor;
use Book\Application\Query\Author\AuthorQuery;



class AuthorController extends Controller 
{
    /**
     * @Route("/all_authors", name="all_authors")
     */
    public function showAllAuthorsAction()
    {
        $query=$this->get('app.book_author.query');
        $allAuthors=$query->getAll();
       
        return new Response('ok');
    }
      
//    /**
//     * @Route("/add_author", name="add_author")
//     */
//    public function addNewAuthorAction()
//    {
//        //to do
//       
//        
//    }
}
