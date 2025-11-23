<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_NAME', 'knockom5e9r9_martial_arts_gym');
define('DB_USERNAME', 'knockom5e9r9_elite_gym');
define('DB_PASSWORD', '[6k9B0v$%tuhM£U@@^£p$a<vh_CTiVi&]FcZsH[');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/* Gmail SMTP credentials */
$gmailid = 'knockoutnationselite@gmail.com';
$gmailpassword = 'moyv xjxf uivr hhcg'; // App password
$gmailusername = 'knockoutnationselite';

?>