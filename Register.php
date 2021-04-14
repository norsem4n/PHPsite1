<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        session_start();
        require_once ("ProjectMethods.php");
        
//        $aModel = new ProjectMethods();

        $newMember = array();

        $newMember['userlogin'] = (isset($_POST['userlogin'])) ? trim($_POST['userlogin']) : '';
        $newMember['userpassword'] = (isset($_POST['userpassword'])) ? trim($_POST['userpassword']) : '';
        $newMember['firstname'] = (isset($_POST['firstname'])) ? trim($_POST['firstname']) : '';
        $newMember['lastname'] = (isset($_POST['lastname'])) ? trim($_POST['lastname']) : '';
        $newMember['streetaddress'] = (isset($_POST['address'])) ? trim($_POST['address']) : '';
        $newMember['city'] = (isset($_POST['city'])) ? trim($_POST['city']) : '';
        $newMember['state'] = (isset($_POST['state'])) ? trim($_POST['state']) : '';
        $newMember['zip'] = (isset($_POST['zip'])) ? trim($_POST['zip']) : '';
        $newMember['email'] = (isset($_POST['email'])) ? trim($_POST['email']) : '';
      
        
        if (isset($_POST['register']))
        {
    // instantiate a d8RWSModel object

        $aModel = new ProjectMethods();

    // call checkUserName method

        $result = $aModel->checkUserName($newMember['userlogin']);
    
        if (count($result) > 0)
        {
            $error = 'Please choose a different Username';
        }
        else
        {
        // call addNewContact method

            $aModel->addUser($newMember);
        
        //redirect user to Sign In page

                header('Refresh: 2; URL=SignIn.php');
                echo '<h2>Thank you for registering.  Redirecting to Sign In Page...<h2>';
                die();
            }
        }
        
        
//        $aModel->addUser($_POST['firstname'], $_POST['lastname'], $_POST['streetaddress'],
//        $_POST['city'], $_POST['state'], (int) $_POST['zip']);
//        
//        $output = "Success! Thank you for registering.";
//                echo $output;
        
        ?>
   
