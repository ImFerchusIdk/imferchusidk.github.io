<?php
    include("db.php");

    if(isset($_GET ['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM computo WHERE id=$id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $gabinete = $row['gabinete'];
            $serieg = $row['serieg'];
            $procesador = $row['procesador'];
            $ram = $row['ram'];
            $rom = $row['rom'];
            $mouse = $row['mouse'];
            $teclado = $row['teclado'];
            $monitor = $row['monitor'];
            $seriem = $row['seriem'];
            $so = $row['so'];
            $office = $row['office'];
            $antivirus = $row['antivirus'];
        }
    }

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
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

        $query = "UPDATE computo set nombre = '$nombre', gabinete = '$gabinete', serieg = '$serieg', procesador = '$procesador', ram = '$ram', rom = '$rom', mouse = '$mouse', teclado = '$teclado', monitor = '$monitor', seriem = '$seriem', so = '$so', office = '$office', antivirus = '$antivirus' WHERE id = '$id' ";
        mysqli_query ($conn, $query);

        $_SESSION['message'] = 'Computadora actualizada correctamente';
        $_SESSION['message_type'] = 'warning';
        header("Location: computotable.php");
    }

?>

<?php include("includes/header.php") ?>

    <!-- HEADER PRINCIPAL-->
    <header>
        <nav>
            
            <a href="#" id="icono" class="icono">Menu</a>
            <div class="enlaces uno" id="enlaces">
                <a href="index.html">Inicio</a>
                <a href="computo.html">Base Computo</a>
                <a href="aulas.php">Proximamente</a>
            </div>
        </nav>
        <div class="container">
            <div class="textos">
                <h1>CBT Gabriel V Alcocer</h1>
                <h2>Centro De Computo</h2>
                <a href="computoform.php">Agregar</a>
            </div>
            <img src="CBTWeb.png" alt="">
        </div>
    </header>
    <div class="wave">
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.00,50.31 C150.00,151.00 349.21,-50.31 500.01,50.31 L500.01,151.00 L-0.00,151.00 Z" style="stroke: none; fill: white ;"></path></svg></div>
    </div>
    <script src='script.js'></script>
    <!-- HEADER PRINCIPAL-->

    <div class="container p-13">
        <div class="row">
            <div class="col-md-13 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id= <?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualiza Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="gabinete" value="<?php echo $gabinete; ?>" class="form-control" placeholder="Actualiza Gabinete">
                        </div>
                        <div class="form-group">
                            <input type="text" name="serieg" value="<?php echo $serieg; ?>" class="form-control" placeholder="Actualiza Numero Serie Gabinete">
                        </div>
                        <div class="form-group">
                            <input type="text" name="procesador" value="<?php echo $procesador; ?>" class="form-control" placeholder="Actualiza Procesador">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ram" value="<?php echo $ram; ?>" class="form-control" placeholder="Actualiza Ram">
                        </div>
                        <div class="form-group">
                            <input type="text" name="rom" value="<?php echo $rom; ?>" class="form-control" placeholder="Actualiza Disco Local">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mouse" value="<?php echo $mouse; ?>" class="form-control" placeholder="Actualiza Mouse">
                        </div>
                        <div class="form-group">
                            <input type="text" name="teclado" value="<?php echo $teclado; ?>" class="form-control" placeholder="Actualiza Teclado">
                        </div>
                        <div class="form-group">
                            <input type="text" name="monitor" value="<?php echo $monitor; ?>" class="form-control" placeholder="Actualiza Monitor">
                        </div>
                        <div class="form-group">
                            <input type="text" name="seriem" value="<?php echo $seriem; ?>" class="form-control" placeholder="Actualiza Numero Serie Monitor">
                        </div>
                        <div class="form-group">
                            <input type="text" name="so" value="<?php echo $so; ?>" class="form-control" placeholder="Actualiza Sistema Operativo">
                        </div>
                        <div class="form-group">
                            <input type="text" name="office" value="<?php echo $office; ?>" class="form-control" placeholder="Actualiza Office">
                        </div>  
                        <div class="form-group">
                            <input type="text" name="antivirus" value="<?php echo $antivirus; ?>" class="form-control" placeholder="Actualiza Antivirus">
                        </div>
                        <button class="btn btn-success" name="update">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/foother.php") ?>