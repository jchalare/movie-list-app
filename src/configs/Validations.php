<?php
namespace Dev\Movie\configs;


class Validations {

    public function stringValidation( string $string){

        $regex = "/^[a-z]+$/i";
        $respCode = 200;
        $response = 'success';

        if(is_null($string) || $string == ''){
            $response = "No empty or null values allowed";
            $respCode = 404;
           
        }else{
            if (!preg_match($regex, $string)) {
                $response = "Error, only letters are allowed";
                $respCode = 404;              
            }
        }

        $return = ['response'=>$response,'code'=>$respCode];

        return $return;
    }

    public function emailValidation(string $email){

        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
        $respCode = 200;
        $response = 'success';

        if(is_null($email) || $email == ''){
            $response = "No empty or null values allowed";
            $respCode = 404;
           
        }else{
            if (!preg_match($regex, $email)) {
                $response = "The email is not valid";
                $respCode = 404;              
            }
        }

        $return = ['response'=>$response,'code'=>$respCode];

        return $return;
    }


    public function phoneValidation(string $phoneNumber){

        $regex = "/^[0-9]+$/";       
        $respCode = 200;
        $response = 'success';

        if (!is_null($phoneNumber)){
            
            $phoneNumber = trim($phoneNumber); //Quitamos el posible espacio en blanco
            $firstCharacter = substr($phoneNumber,0,1); // extraermos el primer caracter
            $otherCharacters = str_replace(' ','',substr($phoneNumber,2));// extraermos el resto de caracteres despues del primer caracter
            
            if($firstCharacter == "+"){ // si el primer carater es +
                if(strlen($otherCharacters) > 9){ // solo deben haber 9 caracteres despues del +
                    $response = "Phone number $phoneNumber is too large, it must be of 9 numbers after '+'";
                    $respCode = 404;
                }else{
                    if (!preg_match($regex,$otherCharacters)) {                        
                        $response = "Wrong phone number : $phoneNumber ";
                        $respCode = 404;
                     }
                }
                 
            }else{
                $response = "Wrong format of phone number, it must start with '+'";
                $respCode = 404;
            }
        }
        
        $return = ['response'=>$response,'code'=>$respCode];

        return $return;
    }


    public function passwordValidation(string $password){

        $regexUpperLetter = "/(?=(.*[A-Z]))/";
        $regex = "/(?=(.*[*.-]))/";
        $respCode = 200;
        $response = 'success';

        if(is_null($password) || $password == ''){
            $response = "No empty or null values allowed";
            $respCode = 404;
           
        }else if(strlen($password)<>6){
            $response = "Password has to be of 6 characters";
            $respCode = 404;

        }else if(!preg_match($regexUpperLetter, $password)){
            $response = "Password must contain almost one UPPER letter";
            $respCode = 404; 

        }else if(!preg_match($regex, $password)){ //preg_match_all($patron, $cadena, $coincidencias, PREG_OFFSET_CAPTURE)
            $response = "Password must contain one of the followin special characters * or - or . ";
            $respCode = 404; 
        }      
        
        $return = ['response'=>$response,'code'=>$respCode];

        return $return;
    }


}