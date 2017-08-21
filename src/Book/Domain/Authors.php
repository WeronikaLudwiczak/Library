<?php
declare(strict_types = 1);

namespace Book\Domain;


interface Authors
{
   /**
    * Finds Author by Id
    * @param integer $id
    * @return Author
    * @throws AuthorNotFoundException
    */ 
   public function getAuthorById($id);
   
   /**
    * add Author to repository
    * @param Author $author
    */
   public function add(Author $author);
   
   /**
    * Cheks if Author exitsts 
    * @param Author $author
    * @return bool
    */
   public function exist (Author $author): bool;
   
}
