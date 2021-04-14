<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   
    require_once 'ProjectMethods.php';
    require_once 'CartClass.php';
    require_once 'AuthClass.php';
    require_once 'CCDisplay.php';
     session_start();
    
    
if (!isset($_SESSION['aCart']) || count($_SESSION['aCart']->getCartItems()) === 0)
    {
        header('Refresh: 5; URL=ViewAll.php');
        echo '<h2>You shopping cart is empty <br /> You will be redirected to our store in 5 seconds.</h2>';
        echo '<h2>If you are not redirected, please <a href="ViewAll.php">Click here to visit our Store</a>.</h2>';
        die();
    }

    AuthClass::isAuthenticated($_SERVER['PHP_SELF']);

    $productids = implode(',', array_keys($_SESSION['aCart']->getCartItems()));

    $aModel = new ProjectMethods();

    $cartList = $aModel->getProductInCart($productids);
    
    $aDisplay = new CCDisplay();
    
    $aDisplay->displayNavHeader("Place Order");
    
    $aDisplay->displayCheckOut($cartList);

    // call footer 
    $aDisplay->displayFooter();

       
?>
