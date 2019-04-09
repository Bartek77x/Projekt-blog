<?php
    
class wpisyModel extends model{
   public function allRecords(){
        $result=$this->mysqli->query('SELECT * FROM wpisy');
        $dataTable = Array();
        while($row = $result->fetch_assoc()){
            array_push($dataTable, $row);
        }
        return $dataTable;
    }

    public function komentarze($komID){
        $result=$this->mysqli->query("SELECT * FROM komentarze WHERE wpisyID = $komID ORDER BY data ASC");
        $komTable = Array();
        while($row = $result->fetch_assoc()){
            array_push($komTable, $row);
        }
        return $komTable;
    }
    
    public function page($numerStrony, $wpisow){
        $limit = $wpisow;
        $offset = ($numerStrony-1)*$wpisow;
        $result=$this->mysqli->query("SELECT * FROM wpisy ORDER BY data,wpisyID DESC LIMIT $wpisow OFFSET $offset ");
        $dataTable = Array();
        while($row = $result->fetch_assoc()){
            $row['koment']=$this->komentarze($row['wpisyID']);
            array_push($dataTable, $row);
        }
        return $dataTable;
    }
    public function delWpisy($contr) {
        if($_SESSION['login'] == "admin"){
            $result=$this->mysqli->query("DELETE FROM wpisy WHERE wpisyID =". $contr['wpisyID']);
            $result=$this->mysqli->query("DELETE FROM komentarze WHERE wpisyID =". $contr['wpisyID']);    
        } 
        header("Location: index.php?c=main&m=index&numerStrony=".$contr['numerStrony']."&wpisow=".$contr['wpisow']);   
    }
    public function delKom($contr) {
        if($_SESSION['login'] == "admin"){
            $result=$this->mysqli->query("DELETE FROM komentarze WHERE komentarzeID =". $contr['komentarzeID']);    
        } 
        header("Location: index.php?c=main&m=index&numerStrony=".$contr['numerStrony']."&wpisow=".$contr['wpisow']);   
    }
    public function addKom($contr) {
            extract($contr);
            $result=$this->mysqli->query("INSERT INTO komentarze (wpisyID,tresc,uzytkownik,data) VALUES ('$wpisyID','$tresc','$uzytkownik','$data')");    
 
        header("Location: index.php?c=main&m=index&numerStrony=".$contr['numerStrony']."&wpisow=".$contr['wpisow']);   
    }

    public function addWpis($contr) {
            extract($contr);
            if($_SESSION['login'] == "admin")
                $result=$this->mysqli->query("INSERT INTO `blog`.`wpisy` (`wpisyID`, `data`, `tytul`, `tresc`) VALUES (NULL, '$data', '$tytul', '$tresc');");   
 
        header("Location: index.php");   
    }
}
