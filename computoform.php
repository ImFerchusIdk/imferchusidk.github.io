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
                <a href="computotable.php">Tabla de datos</a>
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
        <div class="col-md-12">

<?php if(isset($_SESSION['message'])){ ?>
    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_task.php" method=POST>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="gabinete" class="form-control" placeholder="Gabinete" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="serieg" class="form-control" placeholder="Serie Gabinete" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="procesador" class="form-control" placeholder="Procesador" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ram" class="form-control" placeholder="Memoria Ram" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="rom" class="form-control" placeholder="Disco local" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="mouse" class="form-control" placeholder="Mouse" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="teclado" class="form-control" placeholder="Teclado" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="monitor" class="form-control" placeholder="Monitor" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="seriem" class="form-control" placeholder="Serie Monitor" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="so" class="form-control" placeholder="Sistema Operativo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="office" class="form-control" placeholder="Office" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="antivirus" class="form-control" placeholder="Antivirus" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="savetask" value="Guardar Computadora">
                </form>
            </div>

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