<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

require_once 'ProjectMethods.php';
require_once 'CartClass.php';
require_once 'CCDisplay.php';
require_once 'AuthClass.php';
session_start();


if (!isset($_SESSION['aCart']) || count($_SESSION['aCart']->getCartItems()) === 0)
{
    header('Refresh: 5; URL=ViewAll.php');
    echo '<h2>You shopping cart is empty <br /> You will be redirected to our store in 5 seconds.</h2>';
    echo '<h2>If you are not redirected, please <a href="ViewAll.php">Click here to visit our Store</a>.</h2>';
    die();
}
AuthClass::isAuthenticated($_SERVER['PHP_SELF']);

$aModel = new ProjectMethods();

$orderIDResult = $aModel->insertOrder((int)$_SESSION['userinfo']['userid']);

$neworderid = $orderIDResult[0]['neworderid'];


foreach($_SESSION['aCart']->getCartItems() as $aKey => $aValue)
{
    $aModel->insertOrderItem((int)$neworderid, $aKey, $aValue);

// delete the item from the cart

    $_SESSION['aCart']->deleteCartItem($aKey);
}

$aDisplay = new CCDisplay();

// call the displayNavHeader method
$aDisplay->displayNavHeader("Order Confirmation");

$output = <<<ABC
            <h2 style="text-align: center">Thank you for your order</h2>
            <p style="text-align: center">
                <a href="Search.php">[Back to our store]</a>
            </p>
        ABC;

// display the output
echo $output;

// call the displayPageFooter method 
$aDisplay->displayFooter();

?>