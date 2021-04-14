<?php declare(strict_types=1);
/*
 * Display form for Registering Uswer
 * Last Modified March 2021
 * @author ckarnas, fresquez
*/
require_once ('CCDisplay.php');

   session_start();

   $userFName = (isset($_SESSION['userinfo']))? $_SESSION['userinfo']['firstname'] : "";   

   if (!empty($userFName))
    {
        //echo "<p>Welcome back to C&C Sports, $userFName!</p>";
        $aDisplay = new CCDisplay();
        //display header
        $aDisplay->displayNavHeaderLoggedIn('C&CSports');
    }
    else
    {
        //echo "<p>Hello, and welcome to C&C Sports!</p>";
        $aDisplay = new CCDisplay();
        //display header
        $aDisplay->displayNavHeader('C&CSports');
    } 
//display header
//    $aDisplay = new CCDisplay();       
//    $aDisplay->displayNavHeader('C&CSports');

//Header
//require_once 'CCDisplay.php';
//$aDisplay = new CCDisplay();           
//$aDisplay->displayNavHeader('C&CSports');

//Display Form
$aDisplay->displayRegistrationForm();

//Footer
$aDisplay->displayFooter();
?>
        



