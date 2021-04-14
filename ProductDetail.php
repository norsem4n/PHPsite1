 <?php
/*
    Purpose: C&C Sports - Shopping Cart
    Author: ckarnas, 
    Date: March 2021
    Uses: CCDisplay, ProjectMethods
 */
// automatically load required Class files

spl_autoload_register(function ($class_name){
    include $class_name . '.php';
});

$listPage = 'ViewAll.php';

// If productID is not passed with page request, redirect to Shop Search Page
// Else, assign the URL parameter to a variable

if (!isset($_GET['productid']) || !is_numeric($_GET['productid']))
{
    header('Location:' . $listPage);
    exit();
}
else
{
    $productid = (int) $_GET['productid'];
}

// instantiate a ProjectMethods object 
$aModel = new ProjectMethods();

// Call the getMerchandiseDetailsByProductID method
// check input value //
$merchList = $aModel->getProductDetailsByProductID((int)$_GET['productid']);

// If the number of records is not 1, redirect to Store Search Page

if (count($merchList) != 1)
{
   header('Location:' . $listPage);
   exit();
}

// instantiate a d9RWSDisplay object
$aDisplay = new CCDisplay();

//CK Added
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

// call the displayPageHeader method
//$aDisplay->displayNavHeader("Product Details");

// call the displayMerchandiseDetails method
$aDisplay->displayProductDetails($merchList);

// call the displayPageFooter method 
$aDisplay->displayFooter();
?>