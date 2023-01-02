<?php

try {
	$baglanti=new PDO('mysql:host=localhost; dbname=sinehaber; charset=utf8',  'root' , '1234');
	#echo "bağlantı başarılı";
} catch (Exception $e) {
	echo "Hata yaptın :".$e->getMessage();

}


?>