<?php
try{
  $name='groups';

  $db = new PDO("mysql:host=localhost;dbname=$name", 'root','');
  $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}


?>
