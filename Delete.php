<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

require_once 'CCDisplay.php';
//display header
$aDisplay = new CCDisplay();     
$aDisplay->displayNavHeader('C&CSports');

session_start();
$userID = (int)$_SESSION['userinfo']['userid'];

require_once ("ProjectMethods.php");
$aModel = new ProjectMethods();
$aModel->deleteUser((int)$userID);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p style="text-align: center">
            <a href="ViewAll.php">Browse Products</a>
        </p>
    </body>
</html>

<?php
    //display footer
    $aDisplay->displayFooter();
?>