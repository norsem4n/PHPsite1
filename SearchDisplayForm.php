<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
require_once 'ProjectMethods.php';
require_once ('CCDisplay.php');

       
//     require_once 'CartClass.php';
     
    $conn = new PDO("sqlsrv:Server=buscissql1901\cisweb;Database=Team114DB", "anon", "browse");
    $stmt = $conn->query("select productid, brand, model, gender, sport, conditions, unitprice from product");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        
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

     //require_once 'CCDisplay.php';
     
    
    
    //display header
    //$aDisplay = new CCDisplay();     
    //$aDisplay->displayNavHeader("C&CSports");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        

    <section>
        <br />
        <form action="Search.php" method = "post" name="searchForm" id="searchForm">
            <div class="mb-3">
                <label for="search"> Enter Search Term:</label>
                <input type="text" class="form-label" name="search" id ="search" maxlength="50" />
            </div>
            <div>
                <label for="unitprice"> Enter Max Price:</label>
                <input type="text" name="unitprice" id ="unitprice" required="true" maxlength="50" />
            </div>
            <br />
            <p>
                <input class="btn btn-primary" type="submit" value="Search" name="searchButton" />
            </p>
       </form>
        
        
    </section>
       
    </body>
</html>

<?php
    //display footer
    $aDisplay->displayFooter();
?>