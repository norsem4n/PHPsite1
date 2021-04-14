<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
    require_once ('CCDisplay.php');

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

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <div class="container" id="table-details">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <?php
                    require_once ("ProjectMethods.php");

                    $aModel = new ProjectMethods();

                    $productList = $aModel->getProductList();  

                    // call the displayActorList method
                    $aModel->viewAllProducts($productList);
                    ?>
                </table>
            </div>
        </div>
    </div>
</html>

<?php
    //display footer
    $aDisplay->displayFooter();
?>