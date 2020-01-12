<?php include("db.php")?>

<?php  include("includes/header.php")?>

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



<div class="container p-7">
    <div class="row">
        <div class="col-md-8">
        <?php if(isset($_SESSION['message'])){ ?>
    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php session_unset(); } ?>
            <table class="table table-bordered">
                <head>
                    <tr>
                        <th>Nombre</th>
                        <th>Gabinete</th>
                        <th>Serie Gabinete</th>
                        <th>Procesador</th>
                        <th>Memoria Ram</th>
                        <th>Disco local</th>
                        <th>Mouse</th>
                        <th>Teclado</th>
                        <Th>Monitor</Th>
                        <th>Serie Monitor</th>
                        <th>Sistema Operativo</th>
                        <th>Office</th>
                        <th>Antivirus</th>
                        <th>Acciones</th>
                    </tr>
                </head>
                <tbody>
                    <?php
                        $query= "SELECT * FROM computo";
                        $result_tasks = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_tasks)) { ?>

                            <tr>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['gabinete'] ?></td>
                                <td><?php echo $row['serieg'] ?></td>
                                <td><?php echo $row['procesador'] ?></td>
                                <td><?php echo $row['ram'] ?></td>
                                <td><?php echo $row['rom'] ?></td>
                                <td><?php echo $row['mouse'] ?></td>
                                <td><?php echo $row['teclado'] ?></td>
                                <td><?php echo $row['monitor'] ?></td>
                                <td><?php echo $row['seriem'] ?></td>
                                <td><?php echo $row['so'] ?></td>
                                <td><?php echo $row['office'] ?></td>
                                <td><?php echo $row['antivirus'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $row['id']?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                    
                </tbody>
            </table>

        </div>
    </div>
</div>

















<!--HEADER FINAL-->

<br>
<br>
<br>
<div style="padding:12px; background-color:#0085AF ;line-height:1.4;" ALIGN="center" >

    <h6>
        ©2020 Todos Los Derechos Reservados A
    </h6>

    <h6>
        CBT Gabriel V. Alcocer, Cuautitlán
    </h6>

</div>
<!--HEADER FINAL-->
<?php include("includes/foother.php") ?>