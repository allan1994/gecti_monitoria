<?php

$servername = "gecti.ect.ufrn.br";
$username = "gecti";
$password = "g3cT1@(20)18";
$dbname = "gecti";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE usuarios ("
        . "id INT NOT NULL AUTO_INCREMENT,"
        . "nome VARCHAR (60) NOT NULL,"
        . "usuario VARCHAR (60) NOT NULL,"
        . "senha VARCHAR (60) NOT NULL,"
        . "tipo VARCHAR (60) NOT NULL,"
        . "PRIMARY KEY (id) )";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

$servername = "gecti.ect.ufrn.br";
$username = "gecti";
$password = "g3cT1@(20)18";
$dbname = "gecti";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE grupos ("
        . "id INT NOT NULL AUTO_INCREMENT,"
        . "responsavel VARCHAR (60) NOT NULL,"
        . "status VARCHAR (60) NOT NULL,"
        . "codigo VARCHAR (60) NOT NULL,"
        . "tipo VARCHAR (60) NOT NULL,"
        . "objeto VARCHAR (60) NOT NULL,"
        . "matricula1 VARCHAR (60),"
        . "matricula2 VARCHAR (60),"
        . "matricula3 VARCHAR (60),"
        . "matricula4 VARCHAR (60),"
        . "matricula5 VARCHAR (60),"
        . "matricula6 VARCHAR (60),"
        . "matricula7 VARCHAR (60),"
        . "matricula8 VARCHAR (60),"
        . "matricula9 VARCHAR (60),"
        . "nome1 VARCHAR (60),"
        . "nome2 VARCHAR (60),"
        . "nome3 VARCHAR (60),"
        . "nome4 VARCHAR (60),"
        . "nome5 VARCHAR (60),"
        . "nome6 VARCHAR (60),"
        . "nome7 VARCHAR (60),"
        . "nome8 VARCHAR (60),"
        . "nome9 VARCHAR (60),"
        . "email1 VARCHAR (60),"
        . "email2 VARCHAR (60),"
        . "email3 VARCHAR (60),"
        . "email4 VARCHAR (60),"
        . "email5 VARCHAR (60),"
        . "email6 VARCHAR (60),"
        . "email7 VARCHAR (60),"
        . "email8 VARCHAR (60),"
        . "email9 VARCHAR (60),"
        . "aluno1OP1status VARCHAR (60),"
        . "aluno2OP1status VARCHAR (60),"
        . "aluno3OP1status VARCHAR (60),"
        . "aluno4OP1status VARCHAR (60),"
        . "aluno5OP1status VARCHAR (60),"
        . "aluno6OP1status VARCHAR (60),"
        . "aluno7OP1status VARCHAR (60),"
        . "aluno8OP1status VARCHAR (60),"
        . "aluno9OP1status VARCHAR (60),"
        . "aluno1OP2status VARCHAR (60),"
        . "aluno2OP2status VARCHAR (60),"
        . "aluno3OP2status VARCHAR (60),"
        . "aluno4OP2status VARCHAR (60),"
        . "aluno5OP2status VARCHAR (60),"
        . "aluno6OP2status VARCHAR (60),"
        . "aluno7OP2status VARCHAR (60),"
        . "aluno8OP2status VARCHAR (60),"
        . "aluno9OP2status VARCHAR (60),"
        . "aluno1OP3status VARCHAR (60),"
        . "aluno2OP3status VARCHAR (60),"
        . "aluno3OP3status VARCHAR (60),"
        . "aluno4OP3status VARCHAR (60),"
        . "aluno5OP3status VARCHAR (60),"
        . "aluno6OP3status VARCHAR (60),"
        . "aluno7OP3status VARCHAR (60),"
        . "aluno8OP3status VARCHAR (60),"
        . "aluno9OP3status VARCHAR (60),"
        . "PRIMARY KEY (id) )";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
