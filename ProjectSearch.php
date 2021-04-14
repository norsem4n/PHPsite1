<?php 

    require_once 'CCDisplay.php';
    require_once 'ProjectMethods.php';
    
    //display header
    $aDisplay = new CCDisplay();      
    $aDisplay->displayNavHeader('C&CSports');

    $aModel = new ProjectMethods(); 
    $aModel->getProduct();
       
    //display footer
    $aDisplay->displayFooter();
?>
