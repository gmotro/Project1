<?php

/**
 * SQLiteConnection short summary.
 *
 * SQLiteConnection description.
 *
 * @version 1.0
 * @author GennadiyM
 */
namespace Common\Authentication;

use PDO;

class SQLiteConnection implements IConnection
{
    
    
    public function Connect()
    {

       
    }
    
    public function RetriveCredentialsFromDB($providedUserID)
    {
        
        $db = new PDO("sqlite:../src/Common/Authentication/SQLiteDB"); 
        
        $result = $db->query("select * from Users where loginid = '$providedUserID' ");
        
        
        $localArr=['',''];              
        
        foreach($result as $row)
        {
            $localArr[0] = $row['loginid'];
            $localArr[1] =  $row['Password'];
            
        }
        
        return $localArr;
    }
    
}