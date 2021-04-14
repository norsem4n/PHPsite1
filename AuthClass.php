<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthClass
 *
 * @author fresquez
 */
class AuthClass {
     static function isAuthenticated(string $aRedirect) : void
    {
        if (!isset($_SESSION['userinfo']))
        {
            header('location: SignIn.php?redirect=' . $aRedirect);
            die();
        }
    }
}
