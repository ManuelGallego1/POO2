<?php
$mysqli = new mysqli("localhost", "root", "control22", "db_jardin");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

