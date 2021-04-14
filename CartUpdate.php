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
session_start();

// if the form element merchandisepk is set

if (isset($_POST['productid']))
{
    if (!isset($_SESSION['aCart']))
    {        
        $_SESSION['aCart'] = new CartClass();
    }
    
    if (isset($_POST['productqty']))
    {
       $_SESSION['aCart']->updateCartItem((int)$_POST['productid'],(int)$_POST['productqty']);
    }
    else
    {        
        $_SESSION['aCart']->addCartItem((int)$_POST['productid']);
    }
}
header('location:ViewCart.php');
exit();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
