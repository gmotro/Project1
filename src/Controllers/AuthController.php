<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

/**
 * Class AuthController
 */
namespace Controllers;

class AuthController extends Controller
{
    /**
     * Function execute
     *
     * @access public
     */
    public function action()
    {
            $postData = $this->request->getPost();
        
            echo 'Authenticate the above two different ways' . var_dump($postData);       

            //$auth = new \Common\Authentication\Authentication($postData['username'], $postData['password']);        

            $auth = new \Common\Authentication\Authentication($postData->username, $postData->password);  // check later how to pass $postData['username'], $postData['password']
        
            $selected_val = $postData->LoginType;
            
            if($selected_val==='FromFile')	
                {
                    $fileName='Credentials1.txt';
                    $curUser = new \Common\Authentication\FileBased($fileName, $auth->getUsername() );               
                } 
            else if ($selected_val==='FromMemery')
                {        
                    $curUser= new \Common\Authentication\InMemory( ); // add multiple credentials to the static array and retrive proper value based on provided $auth->getUsername(), $auth->getPassword() 
                } 
            else 
                {      
                
                    if ($selected_val==='FromDBMySQL')
                    {
                        $curUser= new \Common\Authentication\FromDB( $auth->getUsername(),"MySQL" );
                    }
                    else
                    {
                        $curUser= new \Common\Authentication\FromDB( $auth->getUsername(),"SQLite" );
                    }
                    
                }        
             $auth->Authenticate($curUser);                                  
    }
}
