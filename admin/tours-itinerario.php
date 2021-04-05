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
                    <h3 class="mb-2">Itinerario</h3>  
                </div>
                <div class="col-lg-4 col-xxl-4 col-8 z-index--top d-flex justify-content-md-end justify-content-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-0">Guardar Cambios</a>                    
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="" class="login">
                        <div class="row mb-5 bg-grey br-30-10 py-4 px-4 shadow-sm">
                            <div class="col-12 col-md-4 mb-3">
                                <h3 class="text-secondary">Día</h3>
                                <div class="pt-2">
                                    <input type="text" name="día" class="w-100" value="Primer Día"></input>
                                </div>        
                            </div>           
                            <div class="col-12 col-md-8">
                                <h3 class="text-secondary">Descripción</h3>
                                <div class="pt-2">
                                    <textarea type="text" name="día" class="w-100 h-auto" value="Salida con destino a VILLA CARLOS PAZ."></textarea>
                                </div>                
                            </div>           
                        </div>
                        
                        <div class="row mb-4 bg-grey br-30-10 py-4 px-4 shadow-sm">
                            <div class="col-12 col-md-4 mb-3">
                                <h3 class="text-secondary">Día</h3>
                                <div class="pt-2">
                                    <input type="text" name="día" class="w-100" value="Primer Día"></input>
                                </div>        
                            </div>           
                            <div class="col-12 col-md-8">
                                <h3 class="text-secondary">Descripción</h3>
                                <div class="pt-2">
                                    <textarea type="text" name="día" class="w-100 h-auto" value="Salida con destino a VILLA CARLOS PAZ."></textarea>
                                </div>                
                            </div>           
                        </div>

                        <div class="row mb-5">
                            <div class="col-12 col-md-12 text-end">
                                <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="lh-1 btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-4">Agregar día <img src="../assets/images/body/icons/agregar.svg" class="ps-2" alt=""></a>    
                            </div>           
                                  
                        </div>
                    </form>
                </div>
                <hr class="mb-5">
            </div>

            <div class="row"> 
                <div class="col-lg-12 col-xxl-12 z-index--top">
                    <h3 class="mb-4">Imágenes de slider</h3>               
                </div>

                <div class="align-items-center align-items-md-baseline col-12 col-md-12 d-flex flex-column flex-md-row mb-5 mt-3">
                    <div class="d-flex img-tour justify-content-end align-items-center flex-column radius-10">
                        <img src="../assets/images/body/tours/01.jpg" class="h-100" alt="">
                        <button class="btn btn-danger position-absolute w-100">Eliminar</button>
                    </div>
                    <div class="d-flex img-tour justify-content-end align-items-center flex-column radius-10">
                        <img src="../assets/images/body/tours/01.jpg" class="h-100" alt="">
                        <button class="btn btn-danger position-absolute w-100">Eliminar</button>
                    </div>
                    <div class="d-flex img-tour justify-content-end align-items-center flex-column radius-10">
                        <img src="../assets/images/body/tours/01.jpg" class="h-100" alt="">
                        <button class="btn btn-danger position-absolute w-100">Eliminar</button>
                    </div>
                    
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-4">Cargar imagen</a>                    
                </div>
            </div>
            
            <div class="row"> 
                <div class="col-lg-12 col-xxl-12 z-index--top">
                    <h3 class="mb-4">Excursiones opcionales</h3>               
                </div>

                <div class="align-items-center align-items-md-baseline col-12 col-md-12 d-flex flex-column flex-md-row mb-5 mt-3">
                    <form action="" class="login w-100">

                        <div class="row mb-5 bg-grey br-30-10 py-4 px-4 shadow-sm">
                            <h5 class="text-secondary mb-3">Excursión</h5>
                            <div class="col-12 col-md-12 d-flex flex-row mb-3">
                                <img src="../assets/images/body/tours/salida.svg" class="pe-3" alt="">
                                <input type="text" name="día" class="w-100" value="Ingrese aquí el nombre de la excursión"></input>        
                            </div>           
                            <div class="col-12 col-md-12 d-flex flex-row mb-3">
                                <img src="../assets/images/body/tours/salida.svg" class="pe-3" alt="">
                                <input type="text" name="día" class="w-100" value="Ingrese aquí el nombre de la excursión"></input>        
                            </div>           
                            <div class="col-12 col-md-12 d-flex flex-row mb-3">
                                <img src="../assets/images/body/tours/salida.svg" class="pe-3" alt="">
                                <input type="text" name="día" class="w-100" value="Ingrese aquí el nombre de la excursión"></input>        
                            </div>           
                            <div class="col-12 col-md-12 d-flex flex-row mb-3">
                                <img src="../assets/images/body/tours/salida.svg" class="pe-3" alt="">
                                <input type="text" name="día" class="w-100" value="Ingrese aquí el nombre de la excursión"></input>        
                            </div>           
                            <div class="col-12 col-md-12 d-flex flex-row mb-3">
                                <img src="../assets/images/body/tours/salida.svg" class="pe-3" alt="">
                                <input type="text" name="día" class="w-100" value="Ingrese aquí el nombre de la excursión"></input>        
                            </div>
                            <div class="col-12 col-md-12 text-end mt-3">
                                <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="lh-1 btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-4">Agregar excursiones <img src="../assets/images/body/icons/agregar.svg" class="ps-2" alt=""></a> 
                            </div>         
                        </div>
                    </form>                 
                </div>
            </div>

            <div class="row"> 
                <div class="col-lg-12 col-xxl-12 z-index--top">
                    <h3 class="mb-4">Imágenes de slider</h3>               
                </div>

                <div class="align-items-center align-items-md-baseline col-12 col-md-12 d-flex flex-column flex-md-row mb-5 mt-3">
                    <div class="d-flex img-tour justify-content-end align-items-center flex-column radius-10">
                        <img src="../assets/images/body/tours/01.jpg" class="h-100" alt="">
                        <button class="btn btn-danger position-absolute w-100">Eliminar</button>
                    </div>
                    <div class="d-flex img-tour justify-content-end align-items-center flex-column radius-10">
                        <img src="../assets/images/body/tours/01.jpg" class="h-100" alt="">
                        <button class="btn btn-danger position-absolute w-100">Eliminar</button>
                    </div>
                    <div class="d-flex img-tour justify-content-end align-items-center flex-column radius-10">
                        <img src="../assets/images/body/tours/01.jpg" class="h-100" alt="">
                        <button class="btn btn-danger position-absolute w-100">Eliminar</button>
                    </div>
                    
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-4">Cargar imagen</a>                    
                </div>
            </div>

            <div class="row"> 
                <div class="col-lg-12 col-xxl-12 z-index--top">
                    <h5 class="align-items-center bg-primary d-flex text-white title-bg shadow">Observaciones / Información adicional</h5>
                    <h3 class="mt-4 text-secondary">Título</h3>               
                </div>

                <form action="" class="login w-100">

                    <div class="row mb-5">
                        
                        <div class="col-12 col-md-12 d-flex flex-row mb-3">
                            <input type="text" name="día" class="w-100" value="" placeholder="Ingrese aquí el nombre de la excursión"></input>        
                        </div>           
                        <div class="col-12 col-md-12 d-flex flex-row mb-3">
                            <textarea type="text" name="día" class="w-100" value="" placeholder="Ingrese aquí las observaciones y/o información adicional"></textarea>      
                        </div>           
                               
                    </div>
                </form>  
                
            </div>


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