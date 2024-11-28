<?php

// Time
// UNIX Timestamp /  EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
//echo time();

echo date("l", time()+172800);
echo date("l", time()+60*60*24*100);
echo date("l", time()-60*60*24*100);
echo date("d M Y", time()-60*60*24*100);

?>