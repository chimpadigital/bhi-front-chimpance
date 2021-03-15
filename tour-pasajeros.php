<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHI</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-reboot.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap-utilities.css"> -->
    
</head>
<body>
    
<?php include 'header.php'; ?>
<div id="carouselExampleIndicators" class="carousel position-absolute slide w-100" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner bg-tour-detail tours-height">
      <div class="carousel-item active">
        <img src="assets/images/body/tour-detail-bg.jpg" class="d-block " alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/body/tour-detail-bg.jpg" class="d-block " alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/body/tour-detail-bg.jpg" class="d-block " alt="...">
      </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
</div>
    <!-- Hero -->
    <section class="align-items-center d-flex tours-height">
        <div class="position-relative tour-detail-title w-100">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-1">
                        <a href="javascript:history.back()" class="d-flex flex-row align-items-center text-decoration-none">
                            <img src="assets/images/body/icons/volver.svg" class="pe-2" alt="">
                            <h4 class="text-white mb-0"> Volver</h4>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-12">
                        <h1 class="mb-1 text-white">Mar del Plata</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="tour-detail-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-10">
                    <h4 class="title-bg mt-4">Datos de Pasajeros</h4>
                    <p class="mb-5">Ingresá los datos completos de cada pasajero.</p>
                </div>
            </div>
            <div class="row d-flex mb-5">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-xl-11 col-xxl-10 z-index--top position-relative pe-0">
                    <div class="bg-grey shadow-none tours-pasajeros ps-0 pb-5 h-100 pe-2">
                        <h4 class="align-items-center d-flex bg-secondary title-bg text-white">Pasajero 01</h4>
                        <div class="ps-5 pt-3 pe-5">
                          <form action="" class="login mb-4">
                            <div class="row">
                              <div class="col-lg-6 col-12">
                                <div class="form-control">
                                    <h5 class="mb-1">Nombre completo</h5>
                                    <input type="text" name="" placeholder="Ingrese el nombre y apellido completo" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                  <h5 class="mb-1">Teléfono</h5>
                                  <input type="text" name="" placeholder="Ingrese un número de teléfono válido" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                  <ph5class="mb-1">Correo Electrónico</h5>
                                  <input type="email" name="" placeholder="Ingrese un correo electrónico válido" class="w-100"></input>
                                </div>
                              </div>
                              <div class="col-lg-6 col-12">
                                <div class="form-control">
                                  <h5 class="mb-1">Tipo de Documento</h5>
                                  <select name="tipo-documento" class="documento w-100" id="" >
                                    <option value="Seleccionar tipo" selected disabled>Seleccionar tipo</option>
                                    <option value="DNI">DNI</option>
                                    <option value="otro">Otro</option>
                                  </select>
                                 
                                </div>
                                <div class="form-control">
                                  <h5 class="mb-1">N° de Documento</h5>
                                  <input type="number" id="number" placeholder="Ingrese el número de documento" name="" class="w-100" max="8" min="0" maxlength="8" onKeyPress="if(this.value.length==8) return false;"></input>
                                </div>
                                <div class="form-control">
                                  <h5 class="mb-1">Tipo de habitación</h5>
                                  <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" class="ps-2" name="habitacion" id="" value="Individual" checked="checked"> <p class="mb-0 ps-2">Individual</p>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" name="habitacion" id="" value="Doble"><p class="mb-0 ps-2">Doble</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" name="habitacion" id="" value="Triple"><p class="mb-0 ps-2">Triple</p>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" name="habitacion" id="" value="Cuadruple"><p class="mb-0 ps-2">Cuadruple</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                                                 
                        </div>

                    </div>
                </div>                
                         
            </div>

            <div class="row d-flex">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-xl-11 col-xxl-10 z-index--top position-relative pe-0">
                    <div class="bg-grey shadow-none tours-pasajeros ps-0 pb-5 h-100 pe-2">
                        <h4 class="align-items-center d-flex bg-secondary title-bg text-white">Pasajero 02</h4>
                        <div class="ps-5 pt-3 pe-5">
                          <form action="" class="login mb-4">
                            <div class="row">
                              <div class="col-lg-6 col-12">
                                <div class="form-control">
                                    <h5 class="mb-1">Nombre completo</h5>
                                    <input type="text" name="" placeholder="Ingrese el nombre y apellido completo" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                  <h5 class="mb-1">Teléfono</h5>
                                  <input type="text" name="" placeholder="Ingrese un número de teléfono válido" class="w-100"></input>
                                </div>
                                <div class="form-control">
                                  <ph5class="mb-1">Correo Electrónico</h5>
                                  <input type="email" name="" placeholder="Ingrese un correo electrónico válido" class="w-100"></input>
                                </div>
                              </div>
                              <div class="col-lg-6 col-12">
                                <div class="form-control">
                                  <h5 class="mb-1">Tipo de Documento</h5>
                                  <select name="tipo-documento" class="documento w-100" id="">
                                    <option value="Seleccionar tipo" selected disabled>Seleccionar tipo</option>
                                    <option value="DNI">DNI</option>
                                    <option value="otro">Otro</option>
                                  </select>
                                 
                                </div>
                                <div class="form-control">
                                  <h5 class="mb-1">N° de Documento</h5>
                                  <input type="number" id="number" placeholder="Ingrese el número de documento" name="" class="w-100" max="8" min="0" maxlength="8" onKeyPress="if(this.value.length==8) return false;"></input>
                                </div>
                                <div class="form-control">
                                  <h5 class="mb-1">Tipo de habitación</h5>
                                  <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" class="ps-2" name="habitacion" id="" value="Individual" checked="checked"> <p class="mb-0 ps-2">Individual</p>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" name="habitacion" id="" value="Doble"><p class="mb-0 ps-2">Doble</p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" name="habitacion" id="" value="Triple"><p class="mb-0 ps-2">Triple</p>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                      <input type="radio" name="habitacion" id="" value="Cuadruple"><p class="mb-0 ps-2">Cuadruple</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                                                 
                        </div>

                    </div>
                </div>                
                         
            </div>
            
            
        </div>
    </section>
    
    

    <section class="bg-home bg-tour-details">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center z-index--top">
                    <a href="" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center" data-bs-toggle="modal" data-bs-target="#reserva" >Confirmar</a>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <?php include 'modal-login.php'; ?>
    <?php include 'modal-register.php'; ?>
    <?php include 'modal-recuperar.php'; ?>
    <?php include 'modal-reserva.php'; ?>
    <?php include 'modal-reserva-confirmada.php'; ?>
    <?php include 'modal-register-pending.php'; ?>

</html>