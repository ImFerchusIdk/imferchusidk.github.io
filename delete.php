<?php

    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM computo WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Delete Fallo");
        }

        $_SESSION['message'] = 'Computadora Eliminada De Manera Correcta';
        $_SESSION['message_type']= 'danger';
        header("Location: computotable.php");

    }

?>