<?php 
/**
 * Description of ProjectMethods
 * PHP functions/methods to execute C&C Sports site.
 * @author fresquez, ckarnas
 */
class ProjectMethods {
    
    private static function dbConnect() : object
    {
        $serverName = 'buscissql1901\cisweb';
        $uName = 'anon';
        $pWord = 'browse';
        $db = 'Team114DB';
    
        try
        {
            //instantiate a PDO object and set connection properties
            $conn = new PDO("sqlsrv:Server=$serverName; Database=$db", $uName, $pWord, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        // if connection fails
        catch (PDOException $e)
        {
            die('Connection failed: ' . $e->getMessage());
        }
    
        //return connection object
        return $conn;
    }
    
    private static function executeQuery(string $query)
    {
        // call the dbConnect function
        $conn = self::dbConnect();

        try
        {
            // execute query and assign results to a PDOStatement object
            $stmt = $conn->query($query);
            do
            {
            if ($stmt->columnCount() > 0)  // if rows with columns are returned
            {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);  //retreive the rows as an associative array
            }
            } while ($stmt->nextRowset());
            
            //call dbDisconnect() method to close the connection
            self::dbDisconnect($conn);

            return $results;
        }
        catch (PDOException $e)
        {
            //if execution fails
            self::dbDisconnect($conn);
            die ('Query failed: ' . $e->getMessage());
        }
    }
    
    // static method to close the DB connection
    private static function dbDisconnect($conn) : void
    {
        // closes the specfied connection and releases associated resources
        $conn = null;
    }
    
    function getProduct() : void
    {       
        if (isset($_POST['shred']) &&  $_POST['shred'] == 'ski' && $_POST['conditions'] == 'powder') 
        {
        include('MomentWildcat.php');
        } 
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'ski' && $_POST['conditions'] == 'park')
        {
            include('MomentFrankenski.php');
        }
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'ski' && $_POST['conditions'] == 'groomers')
        {
            include('MomentDeathwish.php');
        }
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'snowboard' && $_POST['conditions'] == 'powder' && $_POST['gender'] == 'F') 
        {
          include('BurtonDayTrader.php');
        } 
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'snowboard' && $_POST['conditions'] == 'park' && $_POST['gender'] == 'F')
        {
            include('GNUProChoice.php');
        }
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'snowboard' && $_POST['conditions'] == 'groomers' && $_POST['gender'] == 'F')
        {
            include('GNULadiesChoice.php');
        }
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'snowboard' && $_POST['conditions'] == 'powder' && $_POST['gender'] == 'M')
        {
            include('BurtonFamilyTree.php');
        }
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'snowboard' && $_POST['conditions'] == 'park' && $_POST['gender'] == 'M')
        {
            include('GNURidersChoice.php');
        }
        elseif (isset($_POST['shred']) && $_POST['shred'] == 'snowboard' && $_POST['conditions'] == 'groomers' && $_POST['gender'] == 'M')
        {
            include('BurtonCustom.php');
        }
        else 
        {
         echo "Please select a valid option.";
        }    
    }
    
    function getProductList() : array
    {
        $query = <<<STR
                    Select productid, brand, model, sport, gender, conditions, unitprice
                    From product
                    Order by gender, brand, model
                STR;
        
        // call the executeQuery method and return results
        return self::executeQuery($query);
    }
    
    function viewAllProducts($productList) : void
    {        
        $output = <<<HTML
                    <section><table id="allProducts">
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Sport</th>
                    <th>Gender</th>
                    <th>Conditions</th>
                    <th>Price</th>
                    HTML;

        // display each item with links to edit or delete it
        foreach ($productList as $product)
        {
            extract($product);
            $productid = urlencode(trim($productid));
            $output .= <<<HTML
                    
                        <tr>
                            <td>
                                $brand &nbsp; 
                            </td>
                            <td>
                                $model &nbsp;
                            </td>
                            <td>
                                $sport &nbsp;
                            </td>
                            <td>
                                $gender &nbsp;
                            </td>
                            <td>
                                $conditions &nbsp;
                            </td>
                            <td>
                                $ $unitprice &nbsp;
                            </td>
                            <td>
                                <a href="ProductDetail.php?productid=$productid">Product Details</a>
                        </tr>
                        HTML;
        }

            $output .= <<<HTML
                        <tr>
                            <td colspan="1" align="center">
                                <a href="Home.php">[Home]</a>
                            </td>
                        </tr>
                    </table></section>
                    HTML;
       
            echo $output;
    }
    
    function deleteUser(int $userID) : void
    {
        $query = <<<STR
                    Delete
                    From [user]
                    Where userid = $userID
                STR;

    self::executeQuery($query);
    }
    
    function editUser(array $aMemberData) : void
    {
        extract($aMemberData);
//        $movieTitle = str_replace('\'', '\'\'', trim($movieTitle));
//        $pitchText = str_replace('\'', '\'\'', trim($pitchText));
//        $summary = str_replace('\'', '\'\'',trim($summary));
//        $imageName = trim($imageName);
		
        $query = <<<STR
                    Update [user]
                    Set userpassword = '$userpassword', firstname = '$firstname', lastname = '$lastname', streetaddress = '$streetaddress', city = '$city', state = '$state', zip = '$zip', email = '$email'
                    Where userid = '$userid'
                STR;

        self::executeQuery($query);
   }
   
    function getUserByUserID(int $userID) : array
    {
        $query = <<<STR
                    Select userid, userpassword, firstname, lastname, streetaddress, city, state, zip, email
                    From "user"
                    Where userid = $userID
                STR;

        // call the executeQuery method and return the result
        return self::executeQuery($query);
    }
    
    function getUserData(string $aUserName, string $aUserPassword) : array
    {
        $query = <<<STR
                    Select userid, firstname 
                    From "user"                    
                    Where userlogin = '$aUserName'
                    and userpassword = '$aUserPassword'
                STR;
        
        return self::executeQuery($query);
    }
    
    function addUser(array $aMemberData) : void
    {
//        $NameFirst = str_replace('\'', '\'\'', trim($NameFirst));
//        $NameLast = str_replace('\'', '\'\'', trim($NameLast));
//        $Agent = str_replace('\'', '\'\'',trim($Agent));
        
        extract ($aMemberData);
        $query = <<<STR
                    Insert into "user"(userlogin,userpassword,firstname,lastname,streetaddress,city,state,zip,email)
                    Values('$userlogin', '$userpassword', '$firstname','$lastname','$streetaddress','$city','$state', '$zip', '$email')
                STR;
//        $output = "Success! Thank you for registering.";
//                echo $output;
        // call the executeQuery method
        self::executeQuery($query);		
    }
    
    function checkUserName(string $aUserName) : array
    {
        $query = <<<STR
                    Select userlogin
                    From "user"
                    Where userlogin = '$aUserName'
                STR;

        return self::executeQuery($query);
    }
    
    function search(string $search, string $unitprice) : Array
    {	
       $query = <<<STR
                    Select productid, brand, model, sport, conditions, unitprice 
                    From product
                    Where 0=0
                STR;
        
        if ($search != '')
        {
            $query .= <<<STR
                        And brand like '%$search%' OR model like '%$search%' OR sport like '%$search%' OR conditions like '%$search%'
                    STR;
        }
        if ($unitprice != '')
        {
            $query .= <<<STR
                        And unitprice <= $unitprice
                    STR;
        }
		
        $query .= <<<STR
                    Order by brand, model
                STR;
        
        return self::executeQuery($query);
    }
    
    //Cart Methods
    function getProductByName(string $aProductName) : array
    {
        $query = <<<STR
                    Select productid, brand, model, unitprice
                    From product
                    Where brand like '%$aProductName%' OR model like '%$aProductName%'
                STR;

        return self::executeQuery($query);
    }

    function getProductDetailsByProductID(int $productid) : array
    {
        $query = <<<STR
                    Select productid, brand, model, gender, sport, conditions, unitprice                       
                    From product
                    Where productid = $productid
            STR;

        return self::executeQuery($query);
    }

    function getProductInCart(string $productids) : array
    {
        $query = <<<STR
                    Select productid, brand, model, unitprice
                    From product
                    Where productid in ($productids)
                STR;

        return self::executeQuery($query);
    }
    
    function insertOrder(int $userid): array
    {
        $query = <<<STR
                    Insert into order(userid)
                    Values ($userid);
                    Select SCOPE_IDENTITY() As neworderid;
                STR;

        return self::executeQuery($query);
    }

    function insertOrderItem(int $aOrderidFK, int $aProductidFK, int $aOrderQty) : void
    {
            $query = <<<STR
                        Insert into invoice(orderidfk, productidfk, orderqty)
                        Values ($aOrderidFK, $aProductidFK, $aOrderQty)
                    STR;

        self::executeQuery($query);
    }
    
//    function setSearchCookie(string $aString) : void
//    {
//        // cookies are set to expire 30 days from now (given in seconds)
//
//        $expire = time() + (60 * 60 * 24 * 30);
//        setcookie('lastsearch', $aString, $expire);
//    }

}

