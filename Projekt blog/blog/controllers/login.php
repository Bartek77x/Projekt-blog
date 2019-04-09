<?php
class login extends controller {
    public function index($contr){
        $m = $this->loadModel('loginModel');
        if(isset($contr['login'])&&isset($contr['haslo'])){
	        if($m->logowanie($contr['login'], $contr['haslo'])){
	            $_SESSION['login'] = $contr['login'];
	            header("Location: index.php?c=main&m=index&numerStrony=".$contr['numerStrony']."&wpisow=".$contr['wpisow']);
	        }else{
	        	header("Location: index.php?c=main&m=index&numerStrony=".$contr['numerStrony']."&wpisow=".$contr['wpisow']);
	        }
	    }else{
	    	header("Location: index.php?c=main&m=index&numerStrony=".$contr['numerStrony']."&wpisow=".$contr['wpisow']);	    
	    }
    }
     public function logout($contr){
        $_SESSION['login']="";
		session_destroy();
	    header("Location: index.php?c=main&m=index&numerStrony=".$contr['numerStrony']."&wpisow=".$contr['wpisow']);
	   
    }
}
