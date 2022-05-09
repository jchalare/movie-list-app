<?php 

namespace Dev\Movie\models;

/*************
 * Nombre : User
 * Objetivo : Clase para gestionar la informacion del usuario
 */

 use Dev\Movie\configs\JsonConfig;

class User {

    // objeto para la clase JsonConfig, configuracion para el archivo json
    private $userJsonFile;

    // Constante con el nombre del archivo json de usuario
    private const FILE_JSON_NAME = "user_data";

    public function __construct(){
       $this->userJsonFile = new JsonConfig();
    }

    /* Nombre : getUserData
    *  Objetivo: Extraer la informacion del JSON
    *  Parametros: nombre Json usuario
    */
    public function getUserData(){        
        
        $userData = $this->userJsonFile->getJsonData(self::FILE_JSON_NAME);
        return $userData;
      
    }

    /* Nombre : getUserData
    *  Objetivo: Extraer la informacion del JSON
    *  Parametros: nombre Json usuario
    */
    public function saveUserData($objUserData){
       
        $this->userJsonFile->saveJsonData(self::FILE_JSON_NAME,$objUserData);
              
    }

}