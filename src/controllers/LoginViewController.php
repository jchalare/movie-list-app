<?php
require '../../vendor/autoload.php';

use Dev\Movie\controllers\UserController;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class LoginViewController {
    
    public function doView($userDataArray){

      
        if(isset($userDataArray)){           
            
            $arrayData = [
                "email"=>$userDataArray['email'],
                "password"=>$userDataArray['password'],
            ];

            $userController = new UserController();
            $userData = $userController->loginUser($arrayData);// Aqui recorremos el archivo JSON buscando email y password correctos

            if( $userData == 'success'){
                header ('location: ../views/MovieList.php');
                die();
            }else{
                echo '<script type="text/javascript"> alert("'.$userData.'"); window.location.href="../views/Login.php";</script>';
                die();
            }
        }
    }
}


$loginViewController = new LoginViewController();
$loginViewController->doView($_POST);
