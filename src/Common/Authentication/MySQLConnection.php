<?php

/**
 * MySQLConnection short summary.
 *
 * MySQLConnection description.
 *
 * @version 1.0
 * @author GennadiyM
 */
namespace Common\Authentication;

class MySQLConnection implements IConnection
{
           public function Connect()
           {
           
           }
        
           
           // Method return array with credentials
           public function RetriveCredentialsFromDB($providedUserID) // add more records to the file, improve retrive of users
           {
               // dredentials should be moved to the separate file
               $db_hostname = 'localhost';
               $db_database = 'publications';
               $db_username = 'genna';
               $db_password = 'popovka';
               
               $db_server = mysqli_connect($db_hostname, $db_username, $db_password);
               
               if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
               
               mysqli_select_db($db_server,$db_database) or die("unable to select database: " . mysql_error());
               
               $query ="select * from Users where UserName ='$providedUserID' ";
               $result = mysqli_query($db_server, $query);
               
               if (!$result) die ("Database access failed: " . mysql_error());               
               
               $arrWithCred = $this->UserCredentialsFromDB($result);      
               
               mysqli_close($db_server);

               return $arrWithCred;
           }
           
           private function UserCredentialsFromDB($resultFromSelect) 
           {
               $localArr=[];
               
               if ( mysqli_num_rows($resultFromSelect) > 0 )
               {
                   $resultFromSelect->data_seek(0);  
                   $localArr[0] = $resultFromSelect->fetch_assoc()['UserName'];
                   
                   $resultFromSelect->data_seek(0); 
                   $localArr[1] =  $resultFromSelect->fetch_assoc()['Password'];
               }
               else 
               {
                   $localArr[0] = '';
                   $localArr[1] = '';        
               }
               return $localArr;
           }
}
