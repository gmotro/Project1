<?php

/**
 * IGeneralUser short summary.
 *
 * IGeneralUser description.
 *
 * @version 1.0
 * @author GennadiyM
 */

namespace Common\Authentication;


interface IGeneralUser 
{
    public function getUsername();		
    public function getPassword();
    
}
