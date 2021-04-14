<?php declare(strict_types=1);

/* Search page
 * Last Modified March 2021
 * @author ckarnas, fresquez
 */
    session_start();
    require_once 'CCDisplay.php';
    require_once 'ProjectMethods.php';
    require_once 'CartClass.php';
    
    
//    $userFName = (isset($_SESSION['userinfo']))? $_SESSION['userinfo']['firstname'] : "";   
//
//    if (!empty($userFName))
//    {
//        //echo "<p>Welcome back to C&C Sports, $userFName!</p>";
//        $aDisplay = new CCDisplay();
//        //display header
//        $aDisplay->displayNavHeaderLoggedIn('C&CSports');
//    }
//    else
//    {
//        //echo "<p>Hello, and welcome to C&C Sports!</p>";
//        $aDisplay = new CCDisplay();
//        //display header
//        $aDisplay->displayNavHeader('C&CSports');
//    } 
//    
    
    //display header
    $aDisplay = new CCDisplay();      
    $aDisplay->displayNavHeader('C&CSports');
    
//        $brand = $_POST['brand'];
//        $model = $_POST['model'];
//        $gender = $_POST['gender'];
//        $sport = $_POST['sport'];
    
    $unitprice = $_POST['unitprice'];
    $search = $_POST['search'];
    $productid = $_POST['productid'];
    
    $url = '<a href="ProductDetail.php?productid=$productid">Product Details</a>';
    $aModel = new ProjectMethods();

    $Searchresults = $aModel->search($search, $unitprice);
//        $count = "SELECT * FROM product where brand, model, sport like '%keyword%'";

    echo 
    "<table><tr>"
        . "<th>Brand</th>"
        . "<th>Model</th>"
//          . "<th>Gender</th>"
        . "<th>Sport</th>"
        . "<th>Conditions</th>"
        . "<th>Price</th>"."</tr>";
    foreach($Searchresults as $Results)
    {
        extract($Results);
        $productid = urlencode(trim($productid));
        echo "<tr><td>".$Results['brand']
                ." </td><td>" .$Results['model']
//                  ." </td><td>".$Results['gender']
                ." </td><td>".$Results['sport']
                ." </td><td>".$Results['conditions']
                ." </td><td>".$Results['unitprice']
                ." </td><td>".$url
             ."</td></tr>";

    }
    echo"</table>";
       
    //display footer
    $aDisplay->displayFooter();
?>