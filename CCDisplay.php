<?php declare(strict_types=1);
/**
 * Description of CCDisplay
 *
 * @author ckarnas
 * T:\public_html\Project\CCDisplay.php
 */
class CCDisplay {
    
    //put your code here
    function displayNavHeader(string $pageTitle)
    {
        $output = <<<HTML
                <html>
                    <head>
                        <meta charset="utf-8" />
                        <title>$pageTitle</title>

                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
                              integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

                        <link href="StyleSheetNew.css" rel="stylesheet" />
                    </head>
                    <body>
                    <nav class="navbar navbar-dark bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="Home.php">
                                <img src="Nav5.png" alt="" width="30" height="30" class="d-inline-block align-top"> SNOW SPORTS
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="SearchDisplayForm.php" target="_self">Search</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ViewCart.php" target="_self">View Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ViewAll.php" target="_self">View Products</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="SignIn.html" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sign In
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="SignIn.php">Existing Member</a></li>
                                            <li><a class="dropdown-item" href="RegisterDisplayForm.php">New Member</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </body>
                    </html>
                HTML;
          echo $output;
    }
    
    function displayNavHeaderLoggedIn(string $pageTitle)
    {
        $output = <<<HTML
                <html>
                    <head>
                        <meta charset="utf-8" />
                        <title>$pageTitle</title>

                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
                              integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

                        <link href="StyleSheetNew.css" rel="stylesheet" />
                    </head>
                    <body>
                    <nav class="navbar navbar-dark bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="Home.php">
                                <img src="Nav5.png" alt="" width="30" height="30" class="d-inline-block align-top"> SNOW SPORTS
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="SearchDisplayForm.php" target="_self">Search</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ViewCart.php" target="_self">View Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ViewAll.php" target="_self">View Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="EditDisplayForm.php" target="_self">Update Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="SignOut.php" target="_self">Sign Out</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </body>
                    </html>
                HTML;
            
        echo $output;
    }
    
    function displayFooter()
    {
        $year = date('Y');
        $output = <<<HTML
            <footer class="bg-light text-center text-lg-start">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h6 class="text-uppercase">Privacy Policy</h6>

                            <p>
                                If you want to update or access your personal information, or if you have any questions, 
                                comments or concerns about this Privacy Policy or our privacy practices, please contact 
                                our privacy officer at <a href="mailto: privacy@C&CSnowSports.com">privacy@C&CSnowSports.com</a>
                            </p>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h6 class="text-uppercase">Contact Us</h6>

                            <p>
                                If you have any questions, comments or concerns about orders or shipment, please contact us at
                                the following:
                                <br /><br />
                                US/Canada: 1.970.407.1073<br />
                                International: 1.970.632.8017<br />
                                Email: <a href="mailto: sales@C&CSnowSports.com">sales@C&CSnowSports.com</a>
                            </p>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © $year Copyright:
                    <a class="text-dark" href="#">C&CDevelopment.com</a>
                </div>
            </footer>
                
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

            HTML;
        
        echo $output;
    }
    
    function displayProductDetails(array $aList) : void
    {
        // extract the elements of the array
        extract($aList[0]);

        // format the price field
        $formattedPrice = number_format((float)$unitprice, 2,'.',',');

        $output = <<<HTML
                    <div>
                        <a href="ViewCart.php">View Cart</a>
                    </div>
                    <h2 style="text-align: center">$productname</h2>
                    <form action="CartUpdate.php" method = "post">
                    <input type="hidden" name="productid" id="productid" value =$productid />
                 HTML;

        // include img tag if an image exists for the film

        if ($image !='')
        {
            $output .= <<<HTML
                        <div style="text-align:center">
                            <img src = "images/$image" />
                        </div>
                    HTML;
        }

        $output .= <<<HTML
                        <dl>
                            <dt>Brand:</dt>
                                <dd>$brand</dd>
                            <dt>Model:</dt>
                                <dd>$model</dd>
                            <dt>Price:</dt>
                                <dd>\$$formattedPrice</dd>
                             <br />
                            <dt><input name = "submit" type="submit" value="Add to Cart" /></dt>
                        </dl>

                        <p>
                            <a href="ViewAll.php">[Back to Product Page]</a>
                        </p>
                        </form>
               HTML;

        echo $output;
    }
    
    function displayShopCart(array $aList) : void
    {
        // get a count of the number of items in the cart
        $cartItems = count($aList);

        // prepare the output using heredoc syntax
        $output = <<<HTML
                    <h2 style="text-align: center">You are ready to check out</h2>
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Model</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Extended price</th>
                        </tr>
                HTML;

        foreach ($aList as $aItem)
        {
            extract($aItem);
            $productQty = $_SESSION['aCart']->getQtyByProductID((int)$productid);
            $extendedPrice = $productQty * $unitprice;
            $totalPrice += $extendedPrice;
            $formattedExtendedPrice = number_format($extendedPrice, 2);
            $formattedPrice = number_format((float)$unitprice, 2);
            $output .= <<<HTML
                        <tr>
                            <td>
                                $brand
                            </td>
                            <td>
                                $model
                            </td>
                            <td>
                                <form action="CartUpdate.php" method="post">
                                    <input type="hidden" name="productid" value="$productid" />
                                    
                                    <input type="number" name="productqty" 
                                        value="$productQty" size="2" maxlength="2" 
                                        required="required" min="0" max="20" />
                                    <input type="submit" name=submit" value="Update Quantity" />
                                </form>
                            </td>
                            <td style="text-align: right">
                                $$formattedPrice
                            </td>
                            <td style="text-align: right">
                                $$formattedExtendedPrice
                            </td>
                        </tr>
                    HTML;
        }
        $formattedTotalPrice = number_format($totalPrice,2);
        $output .= <<<HTML
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <b>Your order total is: $$formattedTotalPrice</b>
                            </td>
                            <td colspan="2" style="text-align: center">
                                <form action="CartCheckOut.php" method="post">
                                    <input type="submit" name="submit" id="proceed" value = "Proceed to Checkout" />
                                   
                                </form>
                            </td>
                        </tr>
                    </table>
                    <p style="text-align: center">
                        <a href="ViewAll.php">[Continue shopping]</a>
                    </p>
                HTML;

        // display the output

        echo $output;
    }
    
    function displayCheckOut(array $aList) : void
    {
        // get a count of the number of items in the cart

        $cartItems = count($aList);

        $contactName = $_SESSION['userinfo']['firstname'];

        $output = <<<HTML
                    <h2 style="text-align: center">Hi $contactName, click "Place Order" to complete your transaction</h2>
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Model</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Extended price</th>
                        </tr>
                HTML;

        foreach ($aList as $aItem)
        {
            extract($aItem);
            $productQty = $_SESSION['aCart']->getQtyByProductID((int)$productid);
            $extendedPrice = $productQty * $unitprice;
            $totalPrice += $extendedPrice;
            $formattedExtendedPrice = number_format($extendedPrice, 2);
            $formattedPrice = number_format((float)$unitprice, 2);
            $output .= <<<HTML
                            <tr>
                                <td>
                                    $brand
                                </td>
                                <td>
                                    $model
                                </td>
                                <td style="text-align: right; font-style: normal">
                                    $productQty
                                </td>
                                <td style="text-align: right">
                                    $$formattedPrice
                                </td>
                                <td style="text-align: right">
                                    $$formattedExtendedPrice
                                </td>
                            </tr>
                        HTML;
        }
        $formattedTotalPrice = number_format($totalPrice,2);
        $output .= <<<HTML
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <b>Your order total is: $$formattedTotalPrice</b>
                            </td>
                            <td colspan="2" style="text-align: center">
                            <form action="CartPlaceOrder.php" method="post">
                                <input type="submit" name="submit" value = "Place Order" />
                            </form>
                            </td>
                        </tr>
                    </table>
                    <p style="text-align: center">
                        <a href="ViewAll.php">[Continue shopping]</a>
                    </p>
                HTML;

        // display the output

        echo $output;
    }
    
    function displayRegistrationForm() : void
    {
        $output = <<<HTML
                <form name="registrationform" class="row g-3" id="registrationform" action="Register.php" method="post" onsubmit="return checkForm(this)">
                    <h2><legend>Enter your information below:</legend></h2> 
                    <br />

                    <div class="col-md-6">
                        <label for="userlogin" class"form-label">Username:</label>
                        <input type="text" class="form-control ten" name="userlogin" id ="userlogin" value="$userlogin" 
                            maxlength="10" autofocus="true" required="true" pattern="^[\w@\.]+$" title="Valid characters are a-z 0-9 _ . @" />
                    </div>
                    <div class="col-md-6"> 
                        <label for="userpassword" class"form-label">Password:</label> 
                        <input type="password" class="form-control ten" name="userpassword" id="userpassword" value="$userpassword" 
                            maxlength="10" required="true" pattern="^[\w@\.]+$" title="Valid characters are a-z 0-9 _ . @" />
                    </div>
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" value="$firstname" placeholder="Darth" 
                            required="true" maxlength="30" pattern="^[a-zA-Z\-]+$" title="First Name has invalid characters" />
                    </div>
                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Last Name:</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" value="$lastname" placeholder="Vader"
                            maxlength="30" required="true" pattern="^[a-zA-Z\-]+$" title="Last Name has invalid characters"  />
                    </div>
                    <div class="col-12">   
                        <label for="streetaddress" class="form-label">Street Address:</label>
                        <input type="text" name="streetaddress" class="form-control" id="streetaddress" value="$streetaddress" 
                            maxlength="100" required="true" pattern="^[a-zA-Z0-9][\w\s\.]*[a-zA-Z0-9\.]$" 
                            title="Street Address has invalid characters"  />
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City:</label>
                        <input type="text" name="city" class="form-control" id="city" value="$city" maxlength="50" 
                            required="true" pattern="^[a-zA-Z][a-zA-Z\s]*[a-zA-Z]$" title="City has invalid characters"  />
                    </div>
                    <div class="col-md-3">
                        <label for="state" class="form-label">State:</label>
                        <select class="form-select" name="state" id="state" value="$state" maxlength="2" required
                            required="true" pattern="^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]
                                |O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$" 
                            title="State has invalid characters" />
                                <option selected disabled value="">Choose...</option>
                                <option>AK</option>
                                <option>AL</option>
                                <option>AR</option>
                                <option>AZ</option>
                                <option>CA</option>
                                <option>CO</option>
                                <option>CT</option>
                                <option>DC</option>
                                <option>DE</option>
                                <option>FL</option>
                                <option>GA</option>
                                <option>HI</option>
                                <option>IA</option>
                                <option>ID</option>
                                <option>IL</option>
                                <option>IN</option>
                                <option>KS</option>
                                <option>KY</option>
                                <option>LA</option>
                                <option>MA</option>
                                <option>MD</option>
                                <option>ME</option>
                                <option>MI</option>
                                <option>MN</option>
                                <option>MO</option>
                                <option>MS</option>
                                <option>MT</option>
                                <option>NC</option>
                                <option>ND</option>
                                <option>NE</option>
                                <option>NH</option>
                                <option>NJ</option>
                                <option>NM</option>
                                <option>NV</option>
                                <option>NY</option>
                                <option>OH</option>
                                <option>OK</option>
                                <option>OR</option>
                                <option>PA</option>
                                <option>PR</option>
                                <option>RI</option>
                                <option>SC</option>   
                                <option>SD</option>
                                <option>TN</option>
                                <option>TX</option>
                                <option>UT</option>
                                <option>VA</option>
                                <option>VI</option>
                                <option>VT</option>
                                <option>WA</option>
                                <option>WI</option>
                                <option>WV</option>
                                <option>WY</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip:</label>
                        <input type="text" name="zip" class="form-control" id="zip" value="$zip" maxlength="10"
                           pattern="^\d{5}(-\d{4})?$" title="ZIP Code has invalid characters"  required="true" />  
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control twenty" id="email" value="$email"
                            placeholder="iamyourfather@example.com" maxlength="50" 
                            required="true" pattern="^[\w\-\.]+@[\w]+\.[a-zA-Z]{2,4}$" 
                            title="Enter a valid email" /> 
                    </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" id="buttons" type="submit" name="register">Submit form</button>
                </div>
                HTML;
        echo $output;
    }
        
    function displayEditUserForm(array $aList) : void
    {
        extract($aList[0]);
        
            $output = <<<HTML
                    
                <form name ="editform" id="editform" class="row g-3" action="Edit.php" method="post" onsubmit="return checkForm(this)">
                    <h2><legend>Enter your information below:</legend></h2> <br />

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control twenty" id="email" value="$email"
                            placeholder="email@example.com" maxlength="50" 
                            required="true" pattern="^[\w\-\.]+@[\w]+\.[a-zA-Z]{2,4}$" 
                            title="Enter a valid email" /> 
                    </div>
                    <div class="col-md-6">
                        <label for="userpassword" class="form-label">Password:</label>
                        <input type="password" name="userpassword" class="form-control" id="userpassword value="$userpassword"
                            class="ten" maxlength="10" required="true" 
                            pattern="^[\w@\.]+$" title="Valid characters are a-z 0-9 _ . @" />
                    </div>
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">First name:</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" maxlength="30" autofocus value="$firstname"
                            pattern="^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$" 
                            title="First name has invalid characters" required="true" onfocus="this.select()" />
                    </div>
                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Last name:</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" maxlength="30" value="$lastname"
                            required="true" pattern="^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$" 
                            title="Last Name has invalid characters" onfocus="this.select()" /> 
                    </div>
                    <div class="col-12">
                        <label for="streetaddress" class="form-label">Street Address:</label>
                        <input type="text" name="streetaddress" class="form-control" id="streetaddress" placeholder="1234 Main St"
                            maxlength="100" value="$streetaddress" required="true" pattern="^[a-zA-Z0-9][\w\s&,]*[a-zA-Z0-9!\?\.]$" 
                            title="Street Address has invalid characters" onfocus="this.select()" />
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City:</label>
                        <input type="text" name="city" class="form-control" id="city" maxlength="50" value="$city"
                            required="true" pattern="^[a-zA-Z0-9][\w\s&,]*[a-zA-Z0-9!\?\.]$" 
                            title="City has invalid characters" onfocus="this.select()" />
                    </div>
                    <div class="col-md-3">
                        <label for="state" class="form-label">State:</label>
                        <select class="form-select" name="state" id="state" value="$state" maxlength="2" 
                            required="true" pattern="^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]
                                |O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$" 
                            title="State has invalid characters" />
                                <option selected disabled value="">Choose...</option>
                                <option>AK</option>
                                <option>AL</option>
                                <option>AR</option>
                                <option>AZ</option>
                                <option>CA</option>
                                <option>CO</option>
                                <option>CT</option>
                                <option>DC</option>
                                <option>DE</option>
                                <option>FL</option>
                                <option>GA</option>
                                <option>HI</option>
                                <option>IA</option>
                                <option>ID</option>
                                <option>IL</option>
                                <option>IN</option>
                                <option>KS</option>
                                <option>KY</option>
                                <option>LA</option>
                                <option>MA</option>
                                <option>MD</option>
                                <option>ME</option>
                                <option>MI</option>
                                <option>MN</option>
                                <option>MO</option>
                                <option>MS</option>
                                <option>MT</option>
                                <option>NC</option>
                                <option>ND</option>
                                <option>NE</option>
                                <option>NH</option>
                                <option>NJ</option>
                                <option>NM</option>
                                <option>NV</option>
                                <option>NY</option>
                                <option>OH</option>
                                <option>OK</option>
                                <option>OR</option>
                                <option>PA</option>
                                <option>PR</option>
                                <option>RI</option>
                                <option>SC</option>   
                                <option>SD</option>
                                <option>TN</option>
                                <option>TX</option>
                                <option>UT</option>
                                <option>VA</option>
                                <option>VI</option>
                                <option>VT</option>
                                <option>WA</option>
                                <option>WI</option>
                                <option>WV</option>
                                <option>WY</option>
                            </select>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip Code:</label>
                        <input type="text" name="zip" class="form-control" id="zip" value="$zip" maxlength="10"
                           pattern="^\d{5}(-\d{4})?$" title="ZIP Code has invalid characters"  required="true" />  
                    </div> 
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" id="buttons" type="submit" name="edit">Edit User Info</button>
                    </div>
                </form>
                <br />
                <form name="deleteform" id="deleteform" action="Delete.php" method="post">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" id="buttons" type="submit">Delete User?</button>
                    </div>
                </form>
                <br />
            HTML;
         
        echo $output;
    }
     
    function displaySignInForm (string $aUserLogin, string $aUserPassword, string $aRedirect) : void
    {
        $output = <<<HTML
                <br />
                <form class="row g-3" action="SignIn.php" name="signInForm" id="signInForm" method="post">
                    <div class="col-6">
                        <input type="hidden" name="redirect" value="$aRedirect" />
                        <label for="userlogin" class="form-label">Username:</label>
                        <input type="text" name="userlogin" class="form-control" id="userlogin" placeholder="userID" 
                            value= "$aUserLogin" maxlength="10" autofocus="autofocus" required="true" 
                            pattern="^[\w@\.]+$" title="Username has invalid characters" />
                    </div>
                    <div class="col-6">
                        <label for="userpassword" class="form-label">Password:</label>
                        <input type="password" name="userpassword" class="form-control" id="userpassword" placeholder="Password" 
                            value="$aUserPassword" maxlength="10" required="true" pattern="^[\w@\.]+$" 
                            title="Password has invalid characters" />   
                    </div>
                <br />
                    <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
                    
                    <a class="dropdown-item" href="RegisterDisplayForm.php">New? Register Here</a>
                    <a class="dropdown-item" href="mailto:service@C&CSnowSports.com?subject=Forgotten Password">Forgot password?</a>
                </form>
                
                HTML;
                
        echo $output;
    }
    
    function displayDeleteUserForm(array $aList) : void
    {
        
    }
    
}
?>