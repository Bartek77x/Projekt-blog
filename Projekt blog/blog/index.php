<head>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
//$(document).ready(function(){
    //$("#ComentButton").click(function(){
        //$("#Coments").toggle(500);
   // });
//});

//Rozwijanie komentarzy
    $(document).ready(function(){
        $(".halo").click(function(){
            $(this).children().next().slideToggle();
        }); 
    });
    
        $(document).ready(function(){
            $(".zwin").click(function() {
                $(this).siblings().slideToggle();
            });       
        });
</script>
<body class="background">
<?php
    session_start();
    if(!isset($_SESSION['login']))
        $_SESSION['login']="";

    define('ROOT_DIR', 'c:/xampp/htdocs/blog/');
    include ROOT_DIR . 'core/controller.php';
    //include ROOT_DIR . 'controllers/main.php';

    if(!isset($_GET['c'])&&!isset($_GET['m'])){
        $_GET['c']="main";//strona
        $_GET['m']="index";//display
        $_GET['numerStrony']=1;
        $_GET['wpisow']=2;
    }

    
    
    $controllerName = $_GET['c'];
    $methodName = $_GET['m'];
   
    include ROOT_DIR . 'controllers/'. $controllerName . '.php';
    
    unset($_GET['c']);
    unset($_GET['m']);
    
    $c = new $controllerName();
    $c->$methodName($_GET);
    
    
    //localhost/blog/index.php?c=strona&m=display&numerStrony=2&wpisow=2

?>

</body>