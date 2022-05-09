<?php 
namespace Dev\Movie\controllers;

/*************
 * Nombre : UserController
 * Objetivo : Clase para gestionar la informacion de usuario
 */

use Dev\Movie\models\User;
use Dev\Movie\configs\Validations;

class UserController {

    private $user;
    private $validation;

    public $idUser;


    public function __construct(){
        $this->user = new User();
        $this->validation = new Validations();
     }

    
    public function createUserAccount($objUserData){
        

        $name_user = $objUserData["user_name"];
        $email_user = $objUserData["email"];
        $phone_number = $objUserData["phone_number"];
        $password = $objUserData["password"];

        $validationName = $this->validation->stringValidation($name_user);
        $validationEmail = $this->validation->emailValidation($email_user);
        $validationPhone = $this->validation->phoneValidation($phone_number);
        $validationPass = $this->validation->passwordValidation($password);

        
        if($validationName['code'] == 404){
            return $validationName['response'];

        }else if($validationEmail['code'] == 404){
            return $validationEmail['response'];

        }else  if($validationPhone['code'] == 404){
            return $validationPhone['response'];

        }else if($validationPass['code'] == 404){
            return $validationPass['response'];
        }else{
            $userDataJson = json_encode($objUserData);
            $newData = $this->user->saveUserData($userDataJson);            
            return 'success';
        }        
    }


    public function loginUser($objUserData){

        
        $email_user = $objUserData["email"];
        $password = $objUserData["password"];

        $validationEmail = $this->validation->emailValidation($email_user);
        $validationPass = $this->validation->passwordValidation($password);

       if($validationEmail['code'] == 404){
            return $validationEmail['response'];

        }else if($validationPass['code'] == 404){
            return $validationPass['response'];
        }else{

            $fileData = $this->user->getUserData();//Se tiene la informacion del archivo JSON           

            foreach($fileData as $index => $values) {
                if($fileData->email == $email_user ){
                     if($fileData->password == $password ){
                         $this->idUser = $fileData->id;
                        return 'success';
                        break;
                     }else{
                        return "Error, password is not correct";
                     }

                }else{
                    return "Error, email is not correct";
                }               
            }
        }       

    }



} 