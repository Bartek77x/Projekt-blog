Zalogowano jako: <?php echo $_SESSION['login'] ?><br>
<div id="AddPost"><a class="zwin">Dodaj wpis</a><div id="AddPostForm">
<div id='aaa'><form action='index.php' method='GET'>
<input type='hidden' name='c' value='main' /><input type='hidden' name='m' value='addWpis' />
<input type='hidden' name='data' value='<?php echo date('Y-m-d')?>' />
Tytul <input type="text" name="tytul"><br>
Treść <textarea id="tresc" name="tresc" rows="10"></textarea><br> <input type="submit" name="submit" value="Dodaj wpis">
</form></div></div></div>
<a style="margin-left: 200px" href="index.php?c=login&amp;m=logout&amp;numerStrony=<?php echo $_GET['numerStrony']?>&amp;wpisow=<?php echo $_GET['wpisow']?>">Wyloguj</a>