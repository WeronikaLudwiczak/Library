<?php

namespace User\Domain;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser {

    /**
     *
     * @var int
     */
    protected $id;
    
    
    public function __construct() {
        parent::__construct();
    }

}
