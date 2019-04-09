<?php

class controller {
    
    public function __construct() {
        include_once ROOT_DIR . 'core/model.php';
    }
    public function loadModel($modelName){
        include_once ROOT_DIR . 'models/' . $modelName . '.php';
        $m = new $modelName();
        return $m;
    }
    public  function loadView($viewName, $dataTable, $returnHTML = false){
        if($returnHTML){
            ob_start();
            include_once ROOT_DIR . '/Views/' . $viewName . '.php';
            $html = ob_get_contents();
            ob_end_clean();
            return $html;
        }

        include_once ROOT_DIR . '/Views/' . $viewName . '.php'; 
    }
}