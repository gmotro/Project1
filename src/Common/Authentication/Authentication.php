<?php

/**
 * Authentication short summary.
 *
 * Authentication description.
 *
 * @version 1.0
 * @author GennadiyM
 */
namespace Common\Authentication;

use Common\Authentication\IAuthentication;

class Authentication implements IAuthentication
{
    private $localUserName;
    private $localPassword;
    
    function __construct($username, $password)
    {
         
        if(!isset($username)) {
            throw new InvalidArgumentException(__METHOD__.'('.__LINE__.'): ERROR: no username dependency');
        }
        
        if(!isset($password)) {
            throw new InvalidArgumentException(__METHOD__.'('.__LINE__.'): ERROR: no password dependency');
        }
        
        // Validate data type
        // Validate password requirements
        // Check html entities
        // Check html special entities
        
        $this->localUserName=$username;
        $this->localPassword=$password;
            
    }
      
    public function getUsername()
    {
        return $this->localUserName;
    }
    
    public function getPassword()
    {
        return $this->localPassword;
    }
    
    public function Authenticate( $anyUserType )
	{
		if ( ($anyUserType->username===$this->localUserName) && strcmp( $anyUserType->password, $this->localPassword ) === 0  ) // why function 	$anyUserType->username() return NULL? how to make it work?	 
        {			 
                 echo '<br>'."You have been authenticated !";		
		} else {
                 echo '<br>'."Login or password is incorrect !";		
		}		
	}
    
}


    

    

    

