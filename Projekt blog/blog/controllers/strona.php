<?php

class strona extends controller{
    public function display($dataTable){
        $numerStrony = $dataTable['numerStrony'];
        $wpisow = $dataTable['wpisow'];
        
        $m = $this->loadModel('wpisyModel');
                
        $dataTable = $m->page($numerStrony, $wpisow);
        
        $this->loadView('wpisyView', $dataTable, FALSE);
    }
}
