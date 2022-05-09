<?php
require '../../vendor/autoload.php';

use Dev\Movie\models\MovieList;



class MovieListViewController {

    private $movieListModel;

    public function __construct(){
        $this->movieListModel = new MovieList();

    }
    

     /* Nombre : doView
    *  Objetivo: Ejecutar en el servidor la informacion que llega de la vista
    *  Parametros:  dataArray es la info que llega desde el formulario
    */

    public function doView($dataArray){

      
        if(isset($dataArray)){           
            
            $arrayData = [
                "title"=>$dataArray['title'],
                "date_begin"=>$dataArray['date_begin'],
                "date_end"=>$dataArray['date_end'],
                "sort"=>$dataArray['sort'],
            ];


            $fileJSONData = $this->movieListModel->saveMovieData($arrayData['title']);
            $useFoundLocalData = $this->movieListModel->getMovieData();
            if($fileJSONData){
                echo $fileJSONData;
            }
            
        }
    }
}



$loginViewController = new MovieListViewController();
$loginViewController->doView($_POST['movieData']);
