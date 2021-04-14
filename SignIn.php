<!DOCTYPE html>
<!--
Function: Sign-In form for new users
@author cfresquez, ckarnas
-->

<?php
    session_start();
    require_once 'CCDisplay.php';
    require_once 'ProjectMethods.php';
     
    //display header
    $aDisplay = new CCDisplay();     
    $aDisplay->displayNavHeader('C&CSports');
    
    //start session
    
    

    $userLogin = (isset($_POST['userlogin'])) ? trim($_POST['userlogin']) : '';
    $userPassword = (isset($_POST['userpassword'])) ? trim($_POST['userpassword']) : '';        
    $redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'Home.php';

        
        
        if (isset($_POST['signin']))
        {
    // instantiate a ProjectMethods object
            $aModel = new ProjectMethods();

    // call getUserData method
            $userList = $aModel->getUserData($userLogin, $userPassword);

            if (count($userList)==1) //If credentials check out
            {
            extract($userList[0]);

        // assign user info to an array
            $userInfo = array('userid'=>$userid, 'firstname'=>$firstname);
            
        // assign the array to a session array element
            $_SESSION['userinfo'] = $userInfo;
            session_write_close(); //typically not required; ensures that the session data is stored

        // redirect the user
            header('location:' . $redirect);
            die();
            }

            else // Otherwise, assign error message to $error
            {
                $error = 'Invalid credentials<br />Please try again';
            }
        }
        
        if (isset($error))
        {
            echo '<div id="error">' . $error . '</div>';
        }
        $aModel = new ProjectMethods();
        $aDisplay->displaySignInForm($userLogin, $userPassword, $redirect);
?>
<br />
<?php
    //display footer
    $aDisplay->displayFooter();
?>