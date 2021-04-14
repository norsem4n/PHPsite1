<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        session_start();
        $userID = (int)$_SESSION['userinfo']['userid'];
        
        require_once ("ProjectMethods.php");
        
        $newMember = array();
        
        $newMember['userid'] = (int)$userID;        
        $newMember['userpassword'] = (isset($_POST['userpassword'])) ? trim($_POST['userpassword']) : '';
        $newMember['firstname'] = (isset($_POST['firstname'])) ? trim($_POST['firstname']) : '';
        $newMember['lastname'] = (isset($_POST['lastname'])) ? trim($_POST['lastname']) : '';
        $newMember['streetaddress'] = (isset($_POST['streetaddress'])) ? trim($_POST['streetaddress']) : '';
        $newMember['city'] = (isset($_POST['city'])) ? trim($_POST['city']) : '';
        $newMember['state'] = (isset($_POST['state'])) ? trim($_POST['state']) : '';
        $newMember['zip'] = (isset($_POST['zip'])) ? trim($_POST['zip']) : '';
        $newMember['email'] = (isset($_POST['email'])) ? trim($_POST['email']) : '';
		
	
        $aModel = new ProjectMethods();
        
//        $userDetail = $aModel->getUserByUserID($userID);
//        
        $aModel->editUser($newMember);
        
        $output = "Great Success! Update confirmed.";
                echo $output;
                
        
        ?>
        

