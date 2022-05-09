<?php 

namespace Dev\Movie\models;

/*************
 * Nombre : MovieList
 * Objetivo : Clase para gestionar la informacion de las peliculas
 */

 use Dev\Movie\configs\JsonConfig;

class MovieList {

    // objeto para la clase JsonConfig, configuracion para el archivo json
    private $movieJsonFile;

    // Constante con el nombre del archivo json de usuario
    private const URL_FILE = "https://www.omdbapi.com/?apiKey=fc59da33&s=";
    private const FILE_JSON_NAME = "movie_list_data";


    public function __construct(){
       $this->movieJsonFile = new JsonConfig();
    }

     /* Nombre : getMovieData
    *  Objetivo: Extraer la informacion del JSON
    *  Parametros: 
    */
    public function getMovieData(){        
                
        $movieData = $this->movieJsonFile->getJsonData(self::FILE_JSON_NAME);
        return $movieData;
      
    }
 
    /* Nombre : saveMovieData
    *  Objetivo: guardar informacion en un archivo JSON
    *  Parametros: nombre de una pelicula a buscar
    */
    public function saveMovieData($movie){
       
        $foundData = $this->movieJsonFile->getJSONURL($movie);
        if($foundData){            
            $this->movieJsonFile->saveJsonData(self::FILE_JSON_NAME,$foundData);
            return $foundData;
        }
       
              
    }

}