<?php 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db_sikaryawan','root','');
echo "Connection Successfull";
} catch (PDOException $f) {
    echo $f->getmessage();
}



?>