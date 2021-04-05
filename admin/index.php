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
                    <h3 class="text-primary">Hola, BHI</h3>
                </div>
                <div class="col-lg-3 col-xxl-3 d-none d-md-block">
                    <?php include 'menu-admin.php'; ?>
                </div>
                <div class="col-lg-9 col-xxl-9 border-2 border-left border-primary border-start ps-lg-4 z-index--top">
                    <div class="row">   
                        <div class="col-12 col-md-6 mb-4 mb-lg-0">
                            <div class="cards-dashboard">
                                <h4 class="title-bg">Ventas</h4>
                                <div class="align-items-center d-flex flex-column">
                                    <div class="number">
                                        <h3 class="mb-0">20</h3>
                                    </div>
                                    <p class="mt-3 mb-4">Mes de Septiembre</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="cards-dashboard">
                                <h4 class="title-bg ">Usuarios</h4>
                                <div class="align-items-center d-flex flex-column">
                                    <div class="number">
                                        <h3 class="mb-0">25</h3>
                                    </div>
                                    <p class="mt-3 mb-4">Nuevos usuarios registrados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="title-bg mt-5">Solicitudes pendientes</h4>
                    <div class="mt-4">
                        <div class="pasajero-admin bg-light d-md-flex flex-wrap flex-lg-row align-items-center justify-content-between p-3 mb-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pe-3" width="50" height="50" viewBox="0 0 40 40"><g transform="translate(-120 -306)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" transform="translate(120 306)" class="fondo" fill="#00008b"/><path d="M16.789,16.789a5.394,5.394,0,1,0-5.394-5.394A5.393,5.393,0,0,0,16.789,16.789Zm0,2.7C13.188,19.486,6,21.293,6,24.88v2.7H27.577v-2.7C27.577,21.293,20.389,19.486,16.789,19.486Z" transform="translate(123.211 309.211)" class="icono" fill="#fff"/></g></svg>
                                <h5 class="mb-0 text-center">Nombre de agencia</h5>
                            </div>
                            <div class="botones-agencias d-flex justify-content-center mt-2">
                                <img src="../assets/images/body/icons/aceptar-agencia.svg" class="pe-3" alt="">
                                <img src="../assets/images/body/icons/cancelar-agencia.svg" alt="">
                            </div>
                        </div>
                        <div class="pasajero-admin bg-light d-md-flex flex-wrap flex-lg-row align-items-center justify-content-between p-3 mb-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pe-3" width="50" height="50" viewBox="0 0 40 40"><g transform="translate(-120 -306)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" transform="translate(120 306)" class="fondo" fill="#00008b"/><path d="M16.789,16.789a5.394,5.394,0,1,0-5.394-5.394A5.393,5.393,0,0,0,16.789,16.789Zm0,2.7C13.188,19.486,6,21.293,6,24.88v2.7H27.577v-2.7C27.577,21.293,20.389,19.486,16.789,19.486Z" transform="translate(123.211 309.211)" class="icono" fill="#fff"/></g></svg>
                                <h5 class="mb-0 text-center">Nombre de agencia</h5>
                            </div>
                            <div class="botones-agencias d-flex justify-content-center mt-2">
                                <img src="../assets/images/body/icons/aceptar-agencia.svg" class="pe-3" alt="">
                                <img src="../assets/images/body/icons/cancelar-agencia.svg" alt="">
                            </div>
                        </div>
                        <div class="pasajero-admin bg-light d-md-flex flex-wrap flex-lg-row align-items-center justify-content-between p-3 mb-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pe-3" width="50" height="50" viewBox="0 0 40 40"><g transform="translate(-120 -306)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" transform="translate(120 306)" class="fondo" fill="#00008b"/><path d="M16.789,16.789a5.394,5.394,0,1,0-5.394-5.394A5.393,5.393,0,0,0,16.789,16.789Zm0,2.7C13.188,19.486,6,21.293,6,24.88v2.7H27.577v-2.7C27.577,21.293,20.389,19.486,16.789,19.486Z" transform="translate(123.211 309.211)" class="icono" fill="#fff"/></g></svg>
                                <h5 class="mb-0 text-center">Nombre de agencia</h5>
                            </div>
                            <div class="botones-agencias d-flex justify-content-center mt-2">
                                <img src="../assets/images/body/icons/aceptar-agencia.svg" class="pe-3" alt="">
                                <img src="../assets/images/body/icons/cancelar-agencia.svg" alt="">
                            </div>
                        </div>
                        <div class="pasajero-admin bg-light d-md-flex flex-wrap flex-lg-row align-items-center justify-content-between p-3 mb-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pe-3" width="50" height="50" viewBox="0 0 40 40"><g transform="translate(-120 -306)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" transform="translate(120 306)" class="fondo" fill="#00008b"/><path d="M16.789,16.789a5.394,5.394,0,1,0-5.394-5.394A5.393,5.393,0,0,0,16.789,16.789Zm0,2.7C13.188,19.486,6,21.293,6,24.88v2.7H27.577v-2.7C27.577,21.293,20.389,19.486,16.789,19.486Z" transform="translate(123.211 309.211)" class="icono" fill="#fff"/></g></svg>
                                <h5 class="mb-0 text-center">Nombre de agencia</h5>
                            </div>
                            <div class="botones-agencias d-flex justify-content-center mt-2">
                                <img src="../assets/images/body/icons/aceptar-agencia.svg" class="pe-3" alt="">
                                <img src="../assets/images/body/icons/cancelar-agencia.svg" alt="">
                            </div>
                        </div>
                        
                        <a href="agencias-solicitudes-pendientes.php" class="btn btn-lg rounded-pill btn-secondary text-white text-center btn-reservar align-self-center mt-4">Ver todo</a>
                    </div>
                </div>
                              
            </div>
            <div class="row">
            </div>
        </div>
    </section>
    <section class="bg-home admin-user">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                   
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer-admin.php'; ?>
    <?php include '../modal-login.php'; ?>
    <?php include '../modal-register.php'; ?>
    <?php include '../modal-recuperar.php'; ?>
    <?php include '../modal-reserva.php'; ?>
    <?php include '../modal-reserva-confirmada.php'; ?>
    <?php include '../modal-register-pending.php'; ?>

</html>