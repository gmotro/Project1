<?php

/**
 * InMemory short summary.
 *
 * InMemory description.
 *
 * @version 1.0
 * @author GennadiyM
 */
namespace Common\Authentication;

class InMemory  extends AbstractAuthUser
{
    public function __construct()
    {
        $this->username= "test";
        $this->password="temp123";
    }
}

