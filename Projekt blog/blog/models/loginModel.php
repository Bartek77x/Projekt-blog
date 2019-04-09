<?php

include_once ROOT_DIR . 'core/model.php';

class loginModel extends model {
    public function logowanie($login, $haslo){
        $result = $this->mysqli->query("SELECT *  FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'");
    
        if($result->num_rows == 1)
            return TRUE;
        else
            return FALSE;
    }
}