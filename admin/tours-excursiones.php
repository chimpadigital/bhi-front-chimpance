<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>BHI</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="/assets/css/bootstrap-reboot.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap-utilities.css"> -->
    
</head>
<body>
    
<?php include 'header-admin.php'; ?>
    <!-- Hero -->

<section class="pt-md-5">
        <div class="container">
            <div class="row mb-4 mt-4">
                <div class="col-12 mb-3 mb-lg-5">
                    <a href="javascript:history.back()" class="mb-4 d-flex flex-row align-items-center text-decoration-none">
                        <img src="../assets/images/body/icons/volver.svg" class="pe-2" alt="">
                        <h4 class="text-primary mb-0"> Volver</h4>
                    </a>
                </div>
                
                <div class="col-lg-8 col-xxl-8 col-4 z-index--top">
                    <h3 class="mb-2">Excursiones</h3>  
                </div>
                <div class="col-lg-4 col-xxl-4 col-8 z-index--top d-flex justify-content-md-end justify-content-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-0">Guardar Cambios</a>                    
                    
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-12 col-md-8">
                    <form action="" class="login">
                        <div class="row mb-5 bg-grey br-30-10 py-4 px-4 shadow-sm">
                            <div class="col-12 mb-4">
                                <h3 class="text-secondary">Título</h3>
                                <div class="pt-2">
                                    <input type="text" name="día" class="w-100" value="SAN MARTIN DE LOS ANDES CAMINO DE LOS 7 LAGOS, VISITANDO VILLA LA ANGOSTURA"></input>
                                </div>        
                            </div>           
                            <div class="col-12 mb-4">
                                <h3 class="text-secondary">Descripción</h3>
                                <div class="pt-2">
                                    <textarea type="text" name="día" class="w-100" value="Salida con destino a VILLA CARLOS PAZ."></textarea>
                                </div>                
                            </div>           
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-12 position-relative">
                    <img src="../assets/images/body/tours/excursion1.jpg" class="img-fluid radius-10" alt="">
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="btn btn-md btn-primary rounded-pill text-center btn-reservar position-absolute cargar-imagen">Cargar Imagen <img src="../assets/images/body/icons/edit.svg" alt=""></a>
                </div>


            </div>
            <div class="col-12 col-md-12 text-end mt-3">
                <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="lh-1 btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-4">Agregar excursiones <img src="../assets/images/body/icons/agregar.svg" class="ps-2" alt=""></a> 
            </div>
            <hr class="mb-5">

        </div>

</section >
    <section class="bg-home admin-user mt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- <a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center me-3" data-bs-toggle="modal" data-bs-target="#planilla" ><img src="../assets/images/body/icons/descargar-comprobante.svg" class="pe-3" alt=""> Descargar comprobante</a> -->
                    <a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center">Guardar Cambios</a>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer-admin.php'; ?>
    <?php include '../modal-login.php'; ?>
    <?php include '../modal-recuperar.php'; ?>
    <?php include '../modal-register.php'; ?>
    <?php include '../modal-reserva.php'; ?>
    <?php include '../modal-reserva-confirmada.php'; ?>
    <?php include '../modal-register-pending.php'; ?>
    <?php include '../modal-editar-cuenta.php'; ?>
    <?php include '../modal-contraseña.php'; ?>
</html>