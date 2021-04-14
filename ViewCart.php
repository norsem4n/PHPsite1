<?php
/* View Cart - Shopping Cart
 * Last Modified: March 2021
 * @author ckarnas, fresquez
 * uses CCDisplay.php, ProjectMethods.php, CartClass.php
 */


require_once 'ProjectMethods.php';
require_once 'CartClass.php';
require_once 'CCDisplay.php';
session_start();
//instaintiate a display object
    
if (!isset($_SESSION['aCart']) || count($_SESSION['aCart']->getCartItems()) === 0)
{
    header('Refresh: 5; URL=ViewAll.php');
    echo '<h2>You shopping cart is empty <br /> You will be redirected to our products page in 5 seconds.</h2>';
    echo '<h2>If you are not redirected, please <a href="ViewAll.php">Click here to view our products</a>.</h2>';
    die();
}    

$productids = implode(',', array_keys($_SESSION['aCart']->getCartItems()));

$aModel = new ProjectMethods();

$cartList = $aModel->getProductInCart($productids);
$aDisplay = new CCDisplay(); 
//display header
//
//displayNavHeaderLoggedIn (only)?
//$aDisplay->displayNavHeader("Shopping Cart");

//CK Trial & Error
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
    
    
//display cart
$aDisplay->displayShopCart($cartList);

//display footer
$aDisplay->displayFooter();
