<?php
include_once ROOT_DIR . "core/controller.php";

class main extends controller{
    public function index($controls) {
        $dataTable['naglowek']= $this->loadView('headerView', array(), TRUE);

        if($_SESSION['login'] != ""){
            $dataTable['header'] = $this->loadView ('zalogowanyView', $dataTable, TRUE);
        }else{
            $dataTable['header'] = $this->loadView('loginView', $dataTable, TRUE);
        } 
            
        
  
        $m=$this->loadModel('wpisyModel');
        $data=$m->page($controls['numerStrony'], $controls['wpisow']);
        $dataTable['zawartosc'] = $this->loadView('wpisyView', $data, TRUE);


        $numerek=$m->allRecords();
        $dataTable['stronicowanie']= $this->loadView('stronicowanieView', $numerek, TRUE);
       
        $dataTable['stopka'] = "<h1>Mikołaj Filipiak</h1>";

        $this->loadView('mainView', $dataTable);
    }
    public function delWpisy($contr){
        $m=$this->loadModel('wpisyModel');
        $m->delWpisy($contr);
    }
    public function delKom($contr){
        $m=$this->loadModel('wpisyModel');
        $m->delKom($contr);
    }
    public function addKom($contr){
        $m=$this->loadModel('wpisyModel');
        $m->addKom($contr);
    }
    public function addWpis($contr){
        $m=$this->loadModel('wpisyModel');
        $m->addWpis($contr);
    }
}