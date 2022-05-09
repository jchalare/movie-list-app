<?php
require '../../vendor/autoload.php';

use Dev\Movie\controllers\UserController;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class UserViewController {
    
    public function doView($userDataArray){

      
        if(isset($userDataArray)){           
            
            $arrayData = [
                "user_name"=>$userDataArray['user_name'],
                "email"=>$userDataArray['email'],
                "phone_number"=>$userDataArray['phone_number'],
                "password"=>$userDataArray['password'],
                "id"=>rand(1,50)
            ];

            $userController = new UserController();
            $newAccountInfo = $userController->createUserAccount($arrayData);//Se crea el archivo json

            if( $newAccountInfo == 'success'){
                header ('location: ../views/Login.php');
                die();
            }else{
                echo '<script type="text/javascript"> alert("'.$newAccountInfo.'"); window.location.href="../views/CreateUser.php";</script>';
                die();
            }
        }
    }
}

$userViewController = new UserViewController();
$userViewController->doView($_POST);
