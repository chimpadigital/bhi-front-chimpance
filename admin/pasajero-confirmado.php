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
                <div class="col-lg-3 col-xxl-3 col-6 mb-5 d-flex flex-row">
                    <h3 class="text-primary">Hola, BHI</h3>
                    </a>
                </div>
                <div class="col-lg-9 col-xxl-9 col-6 mb-5 d-flex flex-row justify-content-end justify-content-lg-start">
                    <a href="javascript:history.back()" class="mb-4 d-flex flex-row align-items-center text-decoration-none">
                        <img src="../assets/images/body/icons/volver.svg" class="pe-2" alt="">
                        <h4 class="text-primary mb-0"> Volver</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-xxl-3 d-none d-md-block">
                    <ul class="list-unstyled pe-3 border-left">
                        <li>
                            <a href="index.php" class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin ">
                                <!-- <img src="/assets/images/body/home-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><g transform="translate(-120 -306)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" class="fondo" transform="translate(120 306)" fill="#00008b"/><path d="M13,25.75v-7.5h5v7.5h6.25v-10H28L15.5,4.5,3,15.75H6.75v10Z" class="icono" transform="translate(125 310.5)" fill="#fff"/></g></svg>

                                <h5 class="mb-0 ps-3">Inicio</h5>
                            </a>
                        </li>
                        <li>
                            <a href="tours.php" class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin active">
                                <!-- <img src="/assets/images/body/tours-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" class="fondo" fill="#00008b"/><path d="M16.25,3A8.744,8.744,0,0,0,7.5,11.75C7.5,18.313,16.25,28,16.25,28S25,18.313,25,11.75A8.744,8.744,0,0,0,16.25,3Zm0,11.875a3.125,3.125,0,1,1,3.125-3.125A3.126,3.126,0,0,1,16.25,14.875Z" transform="translate(3.5 5)" class="icono" fill="#fff"/></svg>
                                <h5 class="mb-0 ps-3">Tours / Viajes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="tours-gestion.php" class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin">
                                <!-- <img src="/assets/images/body/tours-admin.svg" class="pe-3" alt=""> -->
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><g transform="translate(-45 -453)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" transform="translate(45 453)" class="fondo" fill="#00008b"/><path d="M13.063.563a12.5,12.5,0,1,0,12.5,12.5A12.5,12.5,0,0,0,13.063.563Zm0,5.544a2.117,2.117,0,1,1-2.117,2.117A2.117,2.117,0,0,1,13.063,6.107Zm2.823,12.8a.6.6,0,0,1-.6.6H10.845a.6.6,0,0,1-.6-.6V17.7a.6.6,0,0,1,.6-.6h.6V13.869h-.6a.6.6,0,0,1-.6-.6v-1.21a.6.6,0,0,1,.6-.6h3.226a.6.6,0,0,1,.6.6v5.04h.6a.6.6,0,0,1,.6.6Z" transform="translate(52.438 459.438)" class="icono" fill="#fff"/></g></svg>
                                <h5 class="mb-0 ps-3">Información de Tours / Viajes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="agencias.php" class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin">
                                <!-- <img src="/assets/images/body/perfil-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><g transform="translate(-24 -615)"><path d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z" transform="translate(24 615)" class="fondo" fill="#00008b"/><path d="M23.44,7.88h-6V5.892c0-1.426-.921-3.012-2.344-3.012H10.3C8.874,2.88,7.94,4.466,7.94,5.892V7.88H2.44a1,1,0,0,0-1,1v14.5a1,1,0,0,0,1,1h21a1,1,0,0,0,1-1V8.88A1,1,0,0,0,23.44,7.88Zm-8,15H9.94v-.534c0-.011.307-.026.453-.044a1.581,1.581,0,0,0,.38-.088.964.964,0,0,0,.474-.3,1.037,1.037,0,0,0,.193-.523V16.273a1.089,1.089,0,0,0-.218-.54,1.283,1.283,0,0,0-.39-.374,1.169,1.169,0,0,0-.393-.2c-.214-.065-.5-.106-.5-.123v-.641l4.088-.229-.087.132v6.978a1.072,1.072,0,0,0,.246.523.957.957,0,0,0,.435.321,2.918,2.918,0,0,0,.383.141c.141.041.436.07.436.088ZM10.75,11a1.5,1.5,0,0,1,.514-1.143,1.815,1.815,0,0,1,2.448,0A1.508,1.508,0,0,1,14.221,11a1.488,1.488,0,0,1-.514,1.138,1.823,1.823,0,0,1-2.444,0A1.487,1.487,0,0,1,10.75,11Zm5.19-3.12H9.44V5.892c0-.533.54-1.512,1.073-1.512H14.54c.532,0,1.4.978,1.4,1.512Z" transform="translate(31.56 621.12)" class="icono" fill="#fff"/></g></svg>
                                <h5 class="mb-0 ps-3">Agencias</h5>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 col-xxl-9 border-2 border-left border-primary border-start ps-lg-4 z-index--top">
                    <ul class="nav nav-tabs">
                        <li class="nav-item pe-2">
                            <a class="nav-link " href="tours.php">Reservados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tour-agencias-confirmadas.php">Confirmados</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <!-- <form action="" class="login">
                                <div class="form-control p-0 position-relative">
                                    <input type="search" class="w-100 border-secondary" placeholder="Ingrese su busqueda por destino, mes, pasajero o DNI">
                                    <img src="../assets/images/body/icons/search-icon.svg" class="position-absolute search-icon" alt="">
                                </div>
                            </form> -->
                            
                        </div>
                        <!-- <div class="col-12 mt-4 d-flex">
                            <div class="text-secondary rounded-pill border border-2 me-3 border-secondary btn-md btn-outline">
                                Destino
                            </div>
                        </div> -->
                    </div>
                    <div class="d-flex align-items-baseline mt-5">
                        <h2>Pasajero confirmado 01</h2>
                    </div>
                    <h4 class="title-bg mt-4">Datos del pasajero</h4>
                    
                    <form action="" class="login mt-5">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-control">
                                    <h5 class="mb-2">Nombre completo</h5>
                                    <input type="text" name="" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Teléfono</h5>
                                    <input type="text" name=""  class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Correo Electrónico</h5>
                                    <input type="email" name="" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Observaciones generales</h5>
                                    <textarea type="email" name="" class="w-100" placeholder="Escriba aqui si el pasajero posee alguna enfermedad o alergía alimenticia."></textarea>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-3">En caso de emergencia comunicarse con</h5>
                                    <h5 class="mb-2">Nombre completo</h5>
                                    <input type="text" name="" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Teléfono</h5>
                                    <input type="text" name=""  class="w-100"></input>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-control">
                                    <h5 class="mb-2">Tipo de Documento</h5>
                                    <select name="tipo-documento" class="documento w-100" id="" >
                                      <option value="Seleccionar tipo" selected disabled>Seleccionar tipo</option>
                                      <option value="DNI">DNI</option>
                                      <option value="otro">Otro</option>
                                    </select>   
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">N° de Documento</h5>
                                    <input type="number" id="number" placeholder="Ingrese el número de documento" name="" class="w-100" max="8" min="0" maxlength="8" onKeyPress="if(this.value.length==8) return false;"></input>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Adjuntar documento</h5>
                                    <label for="adjuntar" data-bs-toggle="modal" data-bs-target="#planilla">
                                        <div class="border border-2 border-primary p-2 rounded-pill click-adjuntar">
                                            <img src="../assets/images/body/icons/adjuntar.svg" class="ps-3 rotate" alt="">
                                            <span class="iborrainputfile">Descargar</span>
                                            
                                        </div>
                                    </label>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Ficha médica</h5>
                                    <label for="adjuntar" data-bs-toggle="modal" data-bs-target="#planilla">
                                        <div class="border border-2 border-primary p-2 rounded-pill click-adjuntar">
                                            <img src="../assets/images/body/icons/adjuntar.svg" class="ps-3 rotate" alt="">
                                            <span class="iborrainputfile">Descargar</span>
                                            
                                        </div>
                                    </label>
                                </div>
                                <div class="form-control">
                                    <h5 class="mb-2">Tipo de habitación</h5>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="radio" class="ps-2" name="habitacion" id="" value="Individual" checked="checked"> <p class="mb-0 ps-2"></p>Individual</p>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="radio" class="ps-2" name="habitacion" id="" value="Doble"> <p class="mb-0 ps-2">Doble</p>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="radio" class="ps-2" name="habitacion" id="" value="Triple"> <p class="mb-0 ps-2">Triple</p>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input type="radio" class="ps-2" name="habitacion" id="" value="Cuadruple"> <p class="mb-0 ps-2">Cuadruple</p>
                                    </div>
                                </div>
                                <div class="form-control">
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
                    <a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center me-3" data-bs-toggle="modal" data-bs-target="#planilla" ><img src="../assets/images/body/icons/descargar-comprobante.svg" class="pe-3" alt="">  Descargar planilla</a>
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
    <?php include 'modal-planilla-descargada.php'; ?>
    <?php include 'modal-pasajero-eliminado.php'; ?>
    <?php include 'modal-pasajero-confirmado.php'; ?>

</html>