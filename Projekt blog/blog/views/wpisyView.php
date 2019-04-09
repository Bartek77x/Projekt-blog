<?php
foreach ($dataTable as $row){
	echo '<div class="WpisyBlock">';
    echo '<h1>' . $row['tytul'] . '</h1>';
    if($_SESSION['login'] == "admin")
    	echo "<a style='float:right;' href='index.php?c=main&amp;m=delWpisy&amp;numerStrony=".$_GET['numerStrony']."&amp;wpisow=".$_GET['wpisow']."&amp;wpisyID=".$row['wpisyID']."'>Usuń wpis</a><br>";
    echo '<p id="TrescWpisu">' . $row['tresc'] . '</p>';
    echo '<div id="AddComent"><a class="zwin">Dodaj Komentarz</a><div id="AddComentForm">';
    echo "<div id='aaa'><form action='index.php' method='GET'>";
    echo "<input type='hidden' name='c' value='main' /><input type='hidden' name='m' value='addKom' /><input type='hidden' name='numerStrony' value='".$_GET['numerStrony']."' />";
    echo "<input type='hidden' name='wpisow' value='".$_GET['wpisow']."' /><input type='hidden' name='wpisyID' value='".$row['wpisyID']."' /><input type='hidden' name='data' value='".date('Y-m-d')."' />";
    echo 'Treść <textarea id="tresc" name="tresc" rows="10"></textarea><br> Imię <input type="text" name="uzytkownik"><br><input type="submit" name="submit" value="Dodaj komentarz">';
    echo '</form></div></div></div>';
    echo '<div class="halo"><div id="ComentButton">Komentarze ('.count($row['koment']).')</div>';

	echo '<div hidden id="Coments">';
    foreach ($row['koment'] as $rowK){
	    echo '<div id="ComentContent">';
	    	echo '<p>' . $rowK['tresc'] . '</p>';
	    	echo '<p>' . $rowK['data'] . ', ' . $rowK['uzytkownik'];
	        if($_SESSION['login'] == "admin")
                echo "&nbsp;&nbsp;<a href='index.php?c=main&amp;m=delKom&amp;numerStrony=".$_GET['numerStrony']."&amp;wpisow=".$_GET['wpisow']."&amp;wpisyID=".$row['wpisyID']."&amp;komentarzeID=".$rowK['komentarzeID']."'>Usuń Komentarz</a>"; 
            echo "</p>";
        echo '</div>';
	}


    echo '</div></div>';

      echo '</div>';

}
