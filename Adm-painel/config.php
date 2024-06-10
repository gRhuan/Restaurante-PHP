<?php

 define('HOST', '127.0.0.1');
 define('USER', 'root');
 define('PASS', '1234');
 define('BASE', 'restaurante');
 
 $conn = new MySQLi(HOST, USER, PASS, BASE);
 
 if ($conn->connect_error) {
     die("Conexão falhou: " . $conn->connect_error);
 }

?>