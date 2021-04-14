<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
//        session_start();
        require_once 'ProjectMethods.php';
        require_once 'CCDisplay.php';
        
        $productPage = 'ViewAll.php';

// if a numeric userpk is not passed through the URL

//        if (!isset($_GET['userid']) || !is_numeric($_GET['userid']))
//        {
//            header('Location:' . $productPage);
//            exit();
//        }


        $aModel = new ProjectMethods();

        $userData = $aModel->getUserByUserID((int)$_GET['userid']);  //get film data 

// if user data is not returned for the userid

        if (count($userData) != 1)
        {
            header('Location:' . $productPage);
            exit();
        }
        
        $aDisplay = new CCDisplay();
        $aDisplay->displayDeleteUserForm($userData);
//        
//        $productList = $aModel->getProductList();
//        $aModel->viewAllProducts($productList);
        ?>
  
