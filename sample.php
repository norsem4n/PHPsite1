<?php declare(strict_types=1);
/*
    Purpose: Demo3 - Accessing and displaying data from a DB
    Author: LV
    Date: February 2021
    Uses: RWSDisplay, RWSModel
*/
    // required Class files

    require_once ("Display.php");
    //require_once ("ProjectMethods.php");

    // instantiate a RWSDisplay object

    $aDisplay = new Display();
    
    // display header
    
    $aDisplay->displayNavHeader('C&CSports');