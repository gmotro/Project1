<?php

/**
 * IConnection short summary.
 *
 * IConnection description.
 *
 * @version 1.0
 * @author GennadiyM
 */
namespace Common\Authentication;

interface IConnection
{
    public function Connect();		
    public function RetriveCredentialsFromDB($userID);
    
}

