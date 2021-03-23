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

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h3 class="text-primary">Hola, NOMBRE DEL USUARIO</h3>
                </div>
                <div class="col-lg-3 col-xxl-3 d-none d-md-block">
                    <ul class="list-unstyled pe-3 border-left">
                        <li>
                            <a href="index.php" class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin ">
                                <!-- <img src="/assets/images/body/home-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="pe-3" width="40" height="40" viewBox="0 0 40 40"><g transform="translate(-120 -306)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" class="fondo" transform="translate(120 306)" fill="#00008b"/><path d="M13,25.75v-7.5h5v7.5h6.25v-10H28L15.5,4.5,3,15.75H6.75v10Z" class="icono" transform="translate(125 310.5)" fill="#fff"/></g></svg>

                                <h5 class="mb-0">Inicio</h5>
                            </a>
                        </li>
                        <li>
                            <a href="tours.php" class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin ">
                                <!-- <img src="/assets/images/body/tours-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="pe-3" width="40" height="40" viewBox="0 0 40 40"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" class="fondo" fill="#00008b"/><path d="M16.25,3A8.744,8.744,0,0,0,7.5,11.75C7.5,18.313,16.25,28,16.25,28S25,18.313,25,11.75A8.744,8.744,0,0,0,16.25,3Zm0,11.875a3.125,3.125,0,1,1,3.125-3.125A3.126,3.126,0,0,1,16.25,14.875Z" transform="translate(3.5 5)" class="icono" fill="#fff"/></svg>
                                <h5 class="mb-0">Tours / Viajes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="perfil.php" class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin active">
                                <!-- <img src="/assets/images/body/perfil-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="pe-3" width="40" height="40" viewBox="0 0 40 40"><g transform="translate(-120 -306)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" transform="translate(120 306)" class="fondo" fill="#00008b"/><path d="M16.789,16.789a5.394,5.394,0,1,0-5.394-5.394A5.393,5.393,0,0,0,16.789,16.789Zm0,2.7C13.188,19.486,6,21.293,6,24.88v2.7H27.577v-2.7C27.577,21.293,20.389,19.486,16.789,19.486Z" transform="translate(123.211 309.211)" class="icono" fill="#fff"/></g></svg>
                                <h5 class="mb-0">Mi perfil</h5>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 col-xxl-9 border-2 border-left border-primary border-start ps-lg-4 z-index--top">
                    <ul class="nav nav-tabs justify-content-between">
                        <li class="nav-item pe-2">
                            <a class="nav-link active" aria-current="page" href="tours.php">Mi perfil</a>
                        </li>
                        <li><a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center" data-bs-toggle="modal" data-bs-target="#edit">Editar<img src="../assets/images/body/icons/edit.svg" class="ps-2" alt=""></a></li>
                    </ul>
                    
                    <div class="d-flex align-items-baseline mt-5">
                        <h2>Nombre de la agencia</h2>
                    </div>
                    
                    <form action="" class="login mt-5">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-control">
                                    <h5 class="mb-2">Correo electrónico</h5>
                                    <input type="text" name="" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Nombre del vendedor</h5>
                                    <input type="text" name=""  class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Dirección</h5>
                                    <input type="email" name="" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Teléfono</h5>
                                    <input type="text" name=""  class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Razón social</h5>
                                    <input type="text" name="" class="w-100"></input>
                                </div>
                               
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-control mb-0 p-0">
                                    <h5 class="mb-2">Redes sociales</h5>
                                </div>
                                <div class="form-control d-flex align-items-center flex-row">
                                    <img src="../assets/images/body/icons/twitter.svg" class="pe-3" alt="">
                                    <input type="text" name="" class="w-100"></input>
                                </div>
                                <div class="form-control d-flex align-items-center flex-row">
                                    <img src="../assets/images/body/icons/facebook.svg" class="pe-3" alt="">
                                    <input type="text" name="" class="w-100"></input>
                                </div>
                                <div class="form-control d-flex align-items-center flex-row">
                                    <img src="../assets/images/body/icons/instagram.svg" class="pe-3" alt="">
                                    <input type="text" name="" class="w-100"></input>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-control pass position-relative">
                                    <h5 class="mb-2">Contraseña</h5>
                                    <input type="password" id="password" name="" class="w-100"></input>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="pass-icon" width="24.5" height="16.333" viewBox="0 0 24.5 16.333"><path d="M24.352,12.046A13.643,13.643,0,0,0,12.25,4.5a13.645,13.645,0,0,0-12.1,7.546,1.376,1.376,0,0,0,0,1.242,13.643,13.643,0,0,0,12.1,7.546,13.645,13.645,0,0,0,12.1-7.546A1.376,1.376,0,0,0,24.352,12.046Zm-12.1,6.746a6.125,6.125,0,1,1,6.125-6.125A6.125,6.125,0,0,1,12.25,18.792Zm0-10.208a4.054,4.054,0,0,0-1.077.161A2.035,2.035,0,0,1,8.328,11.59,4.074,4.074,0,1,0,12.25,8.583Z" transform="translate(0 -4.5)" fill="#00008b"/></svg>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-control mt-md-2 text-center text-lg-start">
                                    <a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center mt-md-4 modificar-contraseña" data-bs-toggle="modal" data-bs-target="#pass">Modificar contraseña <img src="../assets/images/body/icons/edit.svg" class="ps-2" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
                              
            </div>
            <div class="row">
            </div>
        </div>
    </section>
    <section class="bg-home admin-user">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center z-index--top">
                    <!-- <a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center me-3" data-bs-toggle="modal" data-bs-target="#planilla" ><img src="../assets/images/body/icons/descargar-comprobante.svg" class="pe-3" alt=""> Descargar comprobante</a>
                    <a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center">Guardar Cambios</a> -->
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