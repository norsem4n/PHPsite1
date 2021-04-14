<!DOCTYPE html>
<!--
Edit Display Form - C&C Sports
Function: Edit user info
-->


<?php

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
?>

<?php
//display header
//require_once 'CCDisplay.php';
//$aDisplay= new CCDisplay();
//$aDisplay->displayNavHeader('C&CSports');

//session_start();
$userID = (int)$_SESSION['userinfo']['userid'];

require_once ("ProjectMethods.php");
$aModel = new ProjectMethods();
//        
//        $userDetail = $aModel->getUserByUserID($userID);
//        
//        $aModel->editUser($userDetail);


$aList = $aModel->getUserByUserID($userID);

$aDisplay->displayEditUserForm($aList);

//display footer
$aDisplay->displayFooter();
?>
   
