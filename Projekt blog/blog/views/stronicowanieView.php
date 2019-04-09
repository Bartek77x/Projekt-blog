<?php
	
	
	$strona = $_GET['numerStrony'];
	$wpisow = $_GET['wpisow'];
	$ile = ceil(count($dataTable)/$wpisow);


	if($ile>1){
		if($strona>1){
			echo "<a id='PaggingButton' href='index.php?c=main&m=index&numerStrony=".($strona-1)."&wpisow=".$wpisow."'> &laquo; Poprzednia</a>";
		}
		for($i=1; $i<=$ile; $i++){
			if($i==$strona){
				echo "<b id='PaggingButton'><a href='index.php?c=main&m=index&numerStrony=".($i)."&wpisow=".$wpisow."'>".$i."</a></b>";
			}else{
				echo "<a id='PaggingButton' href='index.php?c=main&m=index&numerStrony=".($i)."&wpisow=".$wpisow."'>".$i."</a>";
			}
		}
		if($strona<$ile){
			echo "<a id='PaggingButton' href='index.php?c=main&m=index&numerStrony=".($strona+1)."&wpisow=".$wpisow."'> Następna &raquo;</a>";
		}
	}

?>