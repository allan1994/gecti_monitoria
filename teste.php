<?php
/*
$servername = "10.6.0.81";
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

$servername = "10.6.0.81";
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
        . "aluno1OP4status VARCHAR (60),"
        . "aluno2OP4status VARCHAR (60),"
        . "aluno3OP4status VARCHAR (60),"
        . "aluno4OP4status VARCHAR (60),"
        . "aluno5OP4status VARCHAR (60),"
        . "aluno6OP4status VARCHAR (60),"
        . "aluno7OP4status VARCHAR (60),"
        . "aluno8OP4status VARCHAR (60),"
        . "aluno9OP4status VARCHAR (60),"
        . "aluno1OP5status VARCHAR (60),"
        . "aluno2OP5status VARCHAR (60),"
        . "aluno3OP5status VARCHAR (60),"
        . "aluno4OP5status VARCHAR (60),"
        . "aluno5OP5status VARCHAR (60),"
        . "aluno6OP5status VARCHAR (60),"
        . "aluno7OP5status VARCHAR (60),"
        . "aluno8OP5status VARCHAR (60),"
        . "aluno9OP5status VARCHAR (60),"
        . "aluno1OP6status VARCHAR (60),"
        . "aluno2OP6status VARCHAR (60),"
        . "aluno3OP6status VARCHAR (60),"
        . "aluno4OP6status VARCHAR (60),"
        . "aluno5OP6status VARCHAR (60),"
        . "aluno6OP6status VARCHAR (60),"
        . "aluno7OP6status VARCHAR (60),"
        . "aluno8OP6status VARCHAR (60),"
        . "aluno9OP6status VARCHAR (60),"
        . "avaliacaoOP1atendimento1 VARCHAR (60),"
        . "avaliacaoOP1atendimento2 VARCHAR (60),"
        . "avaliacaoOP1atendimento3 VARCHAR (60),"
        . "avaliacaoOP2atendimento1 VARCHAR (60),"
        . "avaliacaoOP2atendimento2 VARCHAR (60),"
        . "avaliacaoOP3atendimento1 VARCHAR (60),"
        . "avaliacaoOP3atendimento2 VARCHAR (60),"
        . "avaliacaoOP3atendimento3 VARCHAR (60),"
        . "avaliacaoOP3atendimento4 VARCHAR (60),"
        . "avaliacaoOP3atendimento5 VARCHAR (60),"
        . "avaliacaoOP3atendimento6 VARCHAR (60),"
        . "avaliacaoOP3atendimento7 VARCHAR (60),"
        . "avaliacaoOP3atendimento8 VARCHAR (60),"
        . "avaliacaoOP3atendimento9 VARCHAR (60),"
        . "avaliacaoOP3atendimento10 VARCHAR (60),"
        . "avaliacaoOP3atendimento11 VARCHAR (60),"
        . "avaliacaoOP3atendimento12 VARCHAR (60),"
        . "avaliacaoOP3atendimento13 VARCHAR (60),"
        . "avaliacaoOP3atendimento14 VARCHAR (60),"
        . "avaliacaoOP3atendimento15 VARCHAR (60),"
        . "avaliacaoOP3atendimento16 VARCHAR (60),"
        . "avaliacaoOP3atendimento17 VARCHAR (60),"
        . "avaliacaoOP3atendimento18 VARCHAR (60),"
        . "avaliacaoOP3atendimento19 VARCHAR (60),"
        . "avaliacaoOP3atendimento20 VARCHAR (60),"
        . "avaliacaoOP4atendimento1 VARCHAR (60),"
        . "avaliacaoOP5atendimento1 VARCHAR (60),"
        . "avaliacaoOP5atendimento2 VARCHAR (60),"
        . "avaliacaoOP5atendimento3 VARCHAR (60),"
        . "avaliacaoOP5atendimento4 VARCHAR (60),"
        . "avaliacaoOP5atendimento5 VARCHAR (60),"
        . "avaliacaoOP5atendimento6 VARCHAR (60),"
        . "avaliacaoOP5atendimento7 VARCHAR (60),"
        . "avaliacaoOP5atendimento8 VARCHAR (60),"        
        . "avaliacaoOP1atendiemntoOBS TEXT (9999),"
        . "avaliacaoOP2atendiemntoOBS TEXT (9999),"
        . "avaliacaoOP3atendiemntoOBS TEXT (9999),"
        . "avaliacaoOP4atendiemntoOBS TEXT (9999),"
        . "avaliacaoOP5atendiemntoOBS TEXT (9999),"
        . "avaliacaoOP6atendiemntoOBS TEXT (9999),"
        . "PRIMARY KEY (id) )";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
