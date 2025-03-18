<?php

$baseDades = new SQLite3("/var/www/m09.com/basedades/prova.db");

if (!$baseDades){
    echo "La base de dades no s'ha pogut obrir";

}else{
    echo "La base de dades s'ha obert correctaent.";
}
$baseDades->close();
?>
