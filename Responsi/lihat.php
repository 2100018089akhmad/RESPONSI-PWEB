<?php  
 $file = fopen("hasil.txt","r");  
 while(! feof($file))  
  {  
  echo fgets($file). "<br />";  
  }
  echo '<a href="Index.html">Kembali</a></br></br>';
 fclose($file);  
 ?>