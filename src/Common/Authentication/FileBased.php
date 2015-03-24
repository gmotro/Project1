<?php

/**
 * FileBased short summary.
 *
 * FileBased description.
 *
 * @version 1.0
 * @author GennadiyM
 */

namespace Common\Authentication;

class FileBased  extends AbstractAuthUser
{
	
    public function __construct($passedFileName, $providedUserID )
    {
        $credArr=$this->RetriveCredentialsFromFile($passedFileName, $providedUserID);
        $this->username = $credArr[0] ;
        $this->password = $credArr[1];
    }
    
    // Method return array with credentials
    private function RetriveCredentialsFromFile($filename, $useid) // add more records to the file, improve retrive of users
    {
        $file = file_get_contents($filename); // Returns a string
        $result = explode(":",$file);

        return $result;
    }
        
}
