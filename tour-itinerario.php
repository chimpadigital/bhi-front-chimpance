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
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-12 pb-2">
                    <h4 class="title-bg mb-5">Itinerario</h4>
                </div>                
                
            </div>
            <div class="row">
              <div id="carouselExampleControls" class="carousel slide itinerario" data-bs-ride="carousel">
              <div class="carousel-indicators d-flex d-lg-none">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active border-primary" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="border-primary"></button>
              </div>
                <div class="carousel-inner">
                  <div class="carousel-item active w-100">
                    <div class="row">
                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 position-relative h-100">
                          <div class="bg-primary tours-pasajeros ps-0 overflow-hidden h-100">
                            <img src="assets/images/body/tours/itinerario1.jpg" class="d-block" alt="...">
  
                          </div>
                      </div>  
                      
                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 margin-left-">
                          <div class="pt-lg-5 pt-3 pb-lg-4 pb-3 pe-lg-5 pe-3 ps-3 ps-lg-0 bg-grey h-100 radius-30">
                            <h3 class="text-secondary">PRIMER DÍA: </h3>
                            <p class="mb-5">Salida con destino a VILLA CARLOS PAZ.</p>
                            <h3 class="text-secondary">SEGUNDO DÍA: </h3>
                            <p class="mb-5">Arribo en horas del mediodía. Almuerzo. Tarde libre. Recomendamos opcional CITY TOUR Y BAR DE HIELO. Cena.</p>
                            <h3 class="text-secondary">TERCER DÍA: </h3>
                            <p class="mb-5">Desayuno. Almuerzo. Por la tarde recomendamos excursión opcional a CAPILLA DEL MONTE. Cena.</p>
                            <h3 class="text-secondary">CUARTO DÍA: </h3>
                            <p class="mb-5">Desayuno. Almuerzo. Recomendamos excursión opcional de día entero a MINA CLAVERO, POR EL CAMINO DE LAS ALTAS CUMBRES. Cena.</p>
  
                          </div>
                      </div>  
                    </div>
                   
                  </div>
                  <div class="carousel-item w-100">
                    <div class="row">
                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 position-relative h-100">
                          <div class="bg-primary tours-pasajeros ps-0 overflow-hidden h-100">
                            <img src="assets/images/body/tours/itinerario2.jpg" class="d-block" alt="...">
  
                          </div>
                      </div>  
                      
                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 margin-left-">
                          <div class="pt-lg-5 pt-3 pb-lg-4 pb-3 pe-lg-5 pe-3 ps-3 ps-lg-0 bg-grey h-100 radius-30">
                          <h3 class="text-secondary">QUINTO DÍA: </h3>
                            <p class="mb-5">Desayuno. Almuerzo. Recomendamos excursión opcional de día entero a LA CUMBRECITA Y VILLA GENERAL BELGRANO. Cena.</p>
                            <h3 class="text-secondary">SEXTO DÍA: </h3>
                            <p class="mb-5">Desayuno. Check out 07:00 A.M. El horario de regreso será determinado por el coordinador y estará en función de cuestiones operativas.</p>
                            <h3 class="text-secondary">SÉPTIMO DÍA: </h3>
                            <p class="mb-5">Llegada. Fin de nuestros servicios.</p>
  
                          </div>
                      </div>  
                    </div>
                   
                  </div>
                 
                </div>
                <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            
        </div>
    </section>


    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-12 pb-2">
                    <h4 class="title-bg mb-5">Excursiones Opcionales</h4>
                </div>                
                
            </div>
            <div class="row">
              <div id="carouselExampleControls2" class="carousel slide z-index--top itinerario" data-bs-ride="carousel">
              <div class="carousel-indicators d-flex d-lg-none">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active border-primary" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="border-primary"></button>
              </div>
                <div class="carousel-inner">
                  <div class="carousel-item active w-100">
                    <div class="row">
                      
                      <div class="col-xxl-6 col-xl-6 pe-lg-0 col-lg-6 col-12 margin-right-">
                        <div class="pt-lg-5 pt-3 pb-lg-4 pb-3 pe-lg-5 pe-3 ps-3 ps-lg-5 bg-grey h-100 radius-30">
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">CAPILLA DEL MONTE</h4>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">CUMBRECITA</h4>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">MINA CLAVERO</h4>
                              <p>(Con asado incluido)</p>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">PAQUETE DE EXCURSIONES OPCIONALES DIURNAS</h4>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">CITY TOUR Y BAR DE HIELO</h4>
                              <p>Incluye entrada</p>
                            </div>

                          </div>
                         
                        </div>
                      </div>  
                      <div class="col-xxl-6 col-xl-6 col-lg-6 ps-lg-0 position-relative ">
                          <div class="bg-primary tours-pasajeros overflow-hidden h-100">
                            <img src="assets/images/body/tours/itinerario3.jpg" class="d-block w-100" alt="...">
  
                          </div>
                      </div>  
                    </div>
                   
                  </div>
                  <div class="carousel-item w-100">
                    <div class="row">
                      
                      <div class="col-xxl-6 col-xl-6 pe-lg-0 col-lg-6 col-12 margin-right-">
                        <div class="pt-lg-5 pt-3 pb-lg-4 pb-3 pe-lg-5 pe-3 ps-3 ps-lg-5 bg-grey h-100 radius-30">
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">CAPILLA DEL MONTE</h4>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">CUMBRECITA</h4>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">MINA CLAVERO</h4>
                              <p>(Con asado incluido)</p>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">PAQUETE DE EXCURSIONES OPCIONALES DIURNAS</h4>
                            </div>

                          </div>
                          <div class="d-flex flex-row align-items-center mb-5 excursion-text">
                            <img src="assets/images/body/tours/excursion-icono.svg" class="excursion-icon me-3" alt="">
                            <div>
                              <h4 class="">CITY TOUR Y BAR DE HIELO</h4>
                              <p>Incluye entrada</p>
                            </div>

                          </div>
                         
                        </div>
                      </div>  
                      <div class="col-xxl-6 col-xl-6 col-lg-6 ps-lg-0 position-relative ">
                          <div class="bg-primary tours-pasajeros overflow-hidden h-100">
                            <img src="assets/images/body/tours/itinerario3.jpg" class="d-block w-100" alt="...">
  
                          </div>
                      </div>  
                    </div>
                   
                  </div>
                
                 
                </div>
                <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls2"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls2"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            
        </div>
    </section>

    <section class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12 z-index--top">
            <h4 class="text-secondary">Observaciones</h4>
            <p>
              - Régimen de comidas estará en función de la opción hotelera contratada.<br>
              - La programación del Itinerario queda sujeta a condiciones climáticas.<br>
              - Revise sus pertenencias, la empresa no se responsabiliza por la pérdida, extravío u olvido de las mismas en los servicios de transporte y hotelería.<br>
              - No incluye excursiones opcionales, ni entradas a Parques Nacionales, Provinciales, Museos y Reservas Naturales.<br>
              - Los servicios opcionales una vez contratados no tendrán ningún tipo de reembolso por cancelación por parte del pasajero.<br>
              NO INCLUYE CUBIERTO EN MINA CLAVERO VIGENCIA: HASTA - TARIFAS SUJETAS A MODIFICACIONES SIN PREVIO AVISO.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-home bg-tour-details">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                   
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