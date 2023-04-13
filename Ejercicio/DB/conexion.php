<?php
$mysqli = new mysqli("localhost", "root", "root", "db_eje1");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "Se conecto a la db";
