<?php

/**
 * FromDB short summary.
 *
 * FromDB description.
 *
 * @version 1.0
 * @author GennadiyM
 */

namespace Common\Authentication;

class FromDB extends AbstractAuthUser
{
    private $anyDBConnection;
        
    public function __construct( $providedUserID, $connectionType )
    {
        
        if ($connectionType==='MySQL')
        {
            $this->anyDBConnection= new MySQLConnection();
        }
        else
        {
            $this->anyDBConnection= new SQLiteConnection();
        }
              
        $this->anyDBConnection->Connect();
        
        $credArr=$this->anyDBConnection->RetriveCredentialsFromDB($providedUserID);
        
        $this->username = $credArr[0] ;
        $this->password = $credArr[1];
    }    

}
