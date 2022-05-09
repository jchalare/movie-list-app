<?php 

namespace Dev\Movie\configs;


class JsonConfig { 

    // Constante con la parte estatica 
    private const SRC = "/var/www/html/movie-list-app/src/data";
    private const URL_FILE = "https://www.omdbapi.com/?apiKey=fc59da33&s=";

    
   /* Nombre : getJsonData
    * Objetivo: Leer la informacion de un archivo JSON
    * Parametros:  nombre JSON
    */
    public function getJsonData(string $jsonName){

        $dataJSON = json_decode(file_get_contents(self::SRC."/$jsonName.json"));
        return $dataJSON;
        
    }

    /* Nombre : saveJsonData
    *  Objetivo: Guardar informacion en un archivo JSON
    *  Parametros:  objeto Json, nombre Json
    */
    public function saveJsonData($jsonName,$objJsonData){
        if(file_put_contents(self::SRC."/$jsonName.json", $objJsonData)) {
            return 'success';
        }                
        else {
            return 'There is some error';                
        }

    }

     /* Nombre : getJSONURL
    * Objetivo: Leer la informacion de un archivo JSON en una URL
    * Parametros:  nombre de la pelicula a buscar
    */
    public function getJSONURL(string $movie){
        $dataJSON = file_get_contents(self::URL_FILE.$movie);
        return $dataJSON;
        
    }

}



