<?php

include("db.php");

    if(isset($_POST['savetask'])) {
        $nombre = $_POST['nombre'];
        $gabinete = $_POST['gabinete'];
        $serieg = $_POST['serieg'];
        $procesador = $_POST['procesador'];
        $ram = $_POST['ram'];
        $rom = $_POST['rom'];
        $mouse = $_POST['mouse'];
        $teclado = $_POST['teclado'];
        $monitor = $_POST['monitor'];
        $seriem = $_POST['seriem'];
        $so = $_POST['so'];
        $office = $_POST['office'];
        $antivirus = $_POST['antivirus'];
    
    $query = "INSERT into computo(nombre, gabinete, serieg, procesador, ram, rom, mouse, teclado, monitor, seriem, so, office, antivirus) VALUES ('$nombre', '$gabinete', '$serieg', '$procesador', '$ram', '$rom', '$mouse', '$teclado', '$monitor', '$seriem', '$so', '$office', '$antivirus')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Fallo Save");
    }

    $_SESSION['message']= 'Computadora Guardada De Manera Correcta';
    $_SESSION['message_type'] = 'success';

    header("Location: computoform.php");
    }

?>