<?php

/**
 * AbstractAuthUser short summary.
 *
 * AbstractAuthUser description.
 *
 * @version 1.0
 * @author GennadiyM
 */

namespace Common\Authentication;

class AbstractAuthUser implements IGeneralUser
{
    private $username;
    private $password;
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
}
