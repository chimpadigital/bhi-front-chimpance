<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
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
                <div class="col-12 col-md-6 pb-2">
                    <h4 class="title-bg mb-5">Información del viaje</h4>
                    <ul class="list-unstyled info-tour mb-4">
                        <li class="d-flex align-items-center pb-3">
                            <img src="assets/images/body/tours/salida.svg" class="pe-3" alt="">
                            <p class="mb-0">Salida desde Bahia Blanca</p>
                        </li>
                        <li class="d-flex align-items-center pb-3">
                            <img src="assets/images/body/tours/bus.svg" class="pe-3" alt="">
                            <p class="mb-0">Bus semicama</p>
                            
                        </li>
                        <li class="d-flex align-items-center pb-3">
                            <img src="assets/images/body/tours/noches.svg" class="pe-3" alt="">
                            <p class="mb-0">03 noches</p>
                            
                        </li>
                        <li class="d-flex align-items-center pb-3">
                            <img src="assets/images/body/tours/hotel.svg" class="pe-3" alt="">
                            <p class="mb-0 pe-3">Hotel 3</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path class="estrella-active" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path class="estrella-active" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path class="estrella-active" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                        </li>
                    </ul>
                    <p class="mb-lg-0 mb-3">Traslados - Media pensión - Coordinador - Seguro Medíco - Tarifa</p>
                </div>                
                <div class="col-xl-5 col-xxl-4 col-lg-6 col-md-6 pb-5 bg-primary tours-price ps-0 position-relative">
                    <h4 class="align-items-center bg-white d-flex text-primary title-bg">Precio por adulto <img src="assets/images/body/tours/price.svg" class="ps-4" alt=""></h4>
                    <div class="ps-5 pt-5">
                        <p class="text-white">Habitación Individual</p>
                        <h2 class="text-white mb-4">9.000 AR$</h2>
                        <p class="text-white">Habitación doble</p>
                        <h2 class="text-white">6.000 AR$</h2>                        
                    </div>
                    <img src="assets/images/body/bg-tour-1.svg" class="position-absolute" alt="">
                </div>                
            </div>
            <div class="row mt-4">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-lg-6  pb-2">
                   
                </div>                
                <div class="col-12 col-lg-6 col-xl-5 col-xxl-4 d-flex flex-md-row flex-column justify-content-center align-items-center justify-content-lg-start pb-5 ps-0">
                    <a class="text-secondary rounded-pill border border-2 me-md-3 border-secondary nav-link btn-lg btn-outline mb-3" href="tour-itinerario.php" >Ver itinerario</a>
                    <a class="text-secondary rounded-pill border border-2 me-md-3 border-secondary nav-link btn-lg btn-outline mb-3" href="tour-excursiones.php" >Ver excursiones</a>
                </div>                
            </div>
            
        </div>
    </section>
    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-10">
                    <h4 class="title-bg mb-5">Iniciar Reserva</h4>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-lg-4 z-index-top position-relative ">
                    <div class="bg-primary tours-pasajeros ps-0 pb-5 h-100 pe-2">
                        <h4 class="align-items-center bg-white d-flex text-primary title-bg">Paso 1 - Pasajeros <img src="assets/images/body/tours/pasajeros.svg" class="ps-4" alt=""></h4>
                        <div class="ps-5 pt-3">
                            
                            <h2 class="text-white mb-1">Cantidad de Pasajeros</h2>
                            <p class="text-white">Seleccione la cantidad de pasajeros que viajaran</p>
                                                 
                        </div>

                    </div>
                </div>  
                
                <div class="col-xxl-6 col-xl-7 col-lg-8 margin-left- pe-lg-0">
                    <div class="ps-4 pt-5 pb-4 bg-grey h-100">
                        <div class="row mb-4 me-0 ms-0">
                            <div class="col-lg-3 col-6">
                                <h3 class="mb-0 pe-3">Adultos</h3>
                            </div>  
                            <div class="col-lg-9 col-6">
                                <div class="d-flex flex-row">
                                    <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                    <h3 class="mb-0 pe-2">2</h3>
                                    <img src="assets/images/body/tours/mas.svg" alt="">
                                </div>
                                
                            </div>
                        </div>
                        <div class="row mb-4 me-0 ms-0">
                            <div class=" col-lg-3 col-6">
                                <h3 class="mb-0 pe-3">Niños</h3>
                                <p class="mb-0">(De 6 a 12 años)</p>
                            </div>  
                            <div class="col-lg-9 col-6">
                                <div class="d-flex flex-row">
                                    <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                    <h3 class="mb-0 pe-2">2</h3>
                                    <img src="assets/images/body/tours/mas.svg" alt="">
                                </div>
                                
                            </div>
                        </div>
                        <div class="row mb-4 me-0 ms-0">
                            <div class=" col-lg-3 col-6">
                                <h3 class="mb-0 pe-3">Bebes</h3>
                            </div>  
                            <div class="col-lg-9 col-6">
                                <div class="d-flex flex-row">
                                    <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                    <h3 class="mb-0 pe-2">2</h3>
                                    <img src="assets/images/body/tours/mas.svg" alt="">
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>                
                         
            </div>
            
            
        </div>
    </section>
    
    <section class="">
        <div class="container-fluid pb-5 pt-5">
            <div class="row d-flex">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-lg-4 z-index-top position-relative mb-3 mb-lg-0 ">
                    <div class="bg-primary tours-pasajeros ps-0 pb-5 h-100 d-flex flex-column justify-content-between pe-2">
                        <h4 class="align-items-center bg-white d-flex text-primary title-bg">Paso 2 - Transporte <img src="assets/images/body/tours/transporte.svg" class="ps-4" alt=""></h4>
                        <div class="ps-5 pt-3">
                            <h2 class="text-white mb-1">Elegir asientos</h2>
                            <p class="text-white">Seleccione los asientos en donde desea viajar</p>
                        </div>
                        <div class="ps-5 pt-3">
                            <p class="text-white mb-0">Tipo de transporte</p>
                            <h3 class="text-white mb-1">Bus semicama</h3>
                        </div>
        
                    </div>
                </div>  
                
                <div class="col-lg-8 col-xl-7 col-xxl-6 margin-left- pe-lg-0">
                    <div class="ps-4 pt-5 pb-4 bg-grey pe-4">
                        <div class="row mb-4">
                            <div class="col-xxl-3 col-lg-12 col-12">
                                <h3 class="mb-3 mb-xxl-0 text-center text-lg-start">Planta Alta</h3>
                            </div>  
                            <div class="col-xxl-9 col-lg-12 col-12 planta-alta">
                                <div class="buss">
                                    <ol class="cabin fuselage">
                                        <li class="row row--1">
                                          <ol class="seats" type="A">
                                            <li class="seat">
                                              <input type="checkbox" id="01" />
                                              <label for="01">01</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="05" />
                                              <label for="05">05</label>
                                            </li>
                                            <li class="seat escalera">
                                              <input type="checkbox" id="09" />
                                              <label for="09">09</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="17" />
                                              <label for="17">17</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="21" />
                                              <label for="21">21</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="25" />
                                              <label for="25">25</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="29" />
                                              <label for="29">29</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="33" />
                                              <label for="33">33</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="37" />
                                              <label for="37">37</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="41" />
                                              <label for="41">41</label>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="row row--1">
                                          <ol class="seats" type="A">
                                            <li class="seat">
                                              <input type="checkbox" id="02" />
                                              <label for="02">02</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="06" />
                                              <label for="06">06</label>
                                            </li>
                                            <li class="seat escalera">
                                              <input type="checkbox" id="10" />
                                              <label for="10">10</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="18" />
                                              <label for="18">18</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="22" />
                                              <label for="22">22</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="26" />
                                              <label for="26">26</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="30" />
                                              <label for="30">30</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="34" />
                                              <label for="34">34</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="38" />
                                              <label for="38">38</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="42" />
                                              <label for="42">42</label>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="row row--2 mt-4">
                                          <ol class="seats" type="A">
                                            <li class="seat">
                                              <input type="checkbox" id="04" />
                                              <label for="04">04</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" class="checked" id="08" />
                                              <label for="08">08</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="12" />
                                              <label for="12">12</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" class="checked" id="14" />
                                              <label for="14">14</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" class="checked" id="16" />
                                              <label for="16">16</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="20" />
                                              <label for="20">20</label>
                                            </li>
                                            <li class="seat">
                                                <input type="checkbox" class="checked" id="24" />
                                                <label for="24">24</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="28" />
                                                <label for="28">28</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="32" />
                                                <label for="32">32</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="36" />
                                                <label for="36">36</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="40" />
                                                <label for="40">40</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="44" />
                                                <label for="44">44</label>
                                              </li>
                                          </ol>
                                        </li>
                                        
                                        <li class="row row--2">
                                          <ol class="seats" type="A">
                                            <li class="seat">
                                              <input type="checkbox" id="03" />
                                              <label for="03">03</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="07" />
                                              <label for="07">07</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="11" />
                                              <label for="11">11</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="13" />
                                              <label for="13">13</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="15" />
                                              <label for="15">15</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="19" />
                                              <label for="19">19</label>
                                            </li>
                                            <li class="seat">
                                                <input type="checkbox" id="23" />
                                                <label for="23">23</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="27" />
                                                <label for="27">27</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="31" />
                                                <label for="31">31</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="35" />
                                                <label for="35">35</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="39" />
                                                <label for="39">39</label>
                                              </li>
                                              <li class="seat">
                                                <input type="checkbox" id="43" />
                                                <label for="43">43</label>
                                              </li>
                                          </ol>
                                        </li>
                                        
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xxl-3 col-lg-12  col-12">
                                <h3 class="mb-3 mb-xxl-0 text-center text-lg-start">Planta Baja</h3>
                            </div>  
                            <div class="col-lg-12 col-xxl-4 col-12 mb-lg-4 mb-xxl-0 planta-baja">
                                <div class="buss">
                                    <ol class="cabin fuselage">
                                        <li class="row row--1">
                                          <ol class="seats" type="A">
                                            <li class="seat">
                                              <input type="checkbox" id="46" />
                                              <label for="46">46</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="49" />
                                              <label for="49">49</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="52" />
                                              <label for="52">52</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="55" />
                                              <label for="55">55</label>
                                            </li>
                                            
                                          </ol>
                                        </li>
                                        
                                        <li class="row row--2 mt-4">
                                          <ol class="seats" type="A">
                                            <li class="seat">
                                              <input type="checkbox" id="48" />
                                              <label for="48">48</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="50" />
                                              <label for="50">50</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="54" />
                                              <label for="54">54</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="56" />
                                              <label for="56">56</label>
                                            </li>
                                            
                                          </ol>
                                        </li>
                                        
                                        <li class="row row--2">
                                          <ol class="seats" type="A">
                                            <li class="seat">
                                              <input type="checkbox" id="47" />
                                              <label for="47">47</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="51" />
                                              <label for="51">51</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="53" />
                                              <label for="53">53</label>
                                            </li>
                                            <li class="seat">
                                              <input type="checkbox" id="57" />
                                              <label for="57">57</label>
                                            </li>
                                            
                                          </ol>
                                        </li>
                                        
                                    </ol>
                                </div>
                                
                            </div>
                            <div class="col-xxl-4 col-12 align-self-end">
                                <div class="align-items-center d-flex flex-row justify-content-xxl-end mb-3">
                                    <p class="mb-0 pe-2">Asientos disponibles</p>
                                    <div class="unchecked"></div>
                                </div>
                                <div class="align-items-center d-flex flex-row justify-content-xxl-end ">
                                    <p class="mb-0 pe-2">Asientos no disponibles</p>
                                    <div class="checked"></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>                
                         
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container-fluid">
            
            <div class="row d-flex">
                <div class="col-xl-1 col-xxl-2"></div>
                <div class="col-lg-4 z-index--top position-relative mb-3 mb-lg-0 ">
                    <div class="align-items-baseline flex-column flex-lg-row align-items-lg-center bg-primary d-flex h-100 pb-5 position-relative ps-0 tours-pasajeros">
                        <h4 class="align-items-center bg-white d-flex text-primary title-bg hotel-title top-0">Paso 3 - Hotel <img src="assets/images/body/tours/hotel-title.svg" class="ps-4" alt=""></h4>
                        <div class="ps-5 pt-3">
                            
                            <h2 class="text-white mb-1">Hotel Antártida</h2>
                            <p class="text-white">Seleccione tipo de habitación</p>
                                                 
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path class="estrella-active-3" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path class="estrella-active-3" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path class="estrella-active-3" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="18.363" height="17.512" viewBox="0 0 18.363 17.512"><path d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                        </div>
                       

                    </div>
                </div>  
                
                <div class="col-lg-8 col-xl-7 col-xxl-6 margin-left- pe-lg-0 z-index--top" >
                    <div class="ps-4 pt-5 pb-4 bg-grey">
                        <div class="row mb-4 me-0 ms-0">
                            <div class="col-lg-6 col-12">
                                <div class="row mb-5">
                                    <div class="col-lg-6 col-6">
                                        <h3 class="mb-0 pe-3">Individual</h3>
                                    </div>  
                                    <div class="col-lg-6 col-6">
                                        <div class="d-flex flex-row">
                                            <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                            <h3 class="mb-0 pe-2">2</h3>
                                            <img src="assets/images/body/tours/mas.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class=" col-lg-6 col-6">
                                        <h3 class="mb-0 pe-3">Doble</h3>
                                    </div>  
                                    <div class="col-lg-6 col-6">
                                        <div class="d-flex flex-row">
                                            <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                            <h3 class="mb-0 pe-2">2</h3>
                                            <img src="assets/images/body/tours/mas.svg" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class=" col-lg-6 col-6">
                                        <h3 class="mb-0 pe-3">Triple</h3>
                                    </div>  
                                    <div class="col-lg-6 col-6">
                                        <div class="d-flex flex-row">
                                            <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                            <h3 class="mb-0 pe-2">2</h3>
                                            <img src="assets/images/body/tours/mas.svg" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class=" col-lg-6 col-6">
                                        <h3 class="mb-0 pe-3">Cuadruple</h3>
                                    </div>  
                                    <div class="col-lg-6 col-6">
                                        <div class="d-flex flex-row">
                                            <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                            <h3 class="mb-0 pe-2">2</h3>
                                            <img src="assets/images/body/tours/mas.svg" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="row mb-2">
                                    <div class="col-lg-6 col-12">
                                        <p class="mb-3">Seleccione tipo de cama</p>
                                    </div>  
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-6 col-6">
                                        <h3 class="mb-0 pe-3">Twin</h3>
                                    </div>  
                                    <div class="col-lg-6 col-6">
                                        <div class="d-flex flex-row">
                                            <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                            <h3 class="mb-0 pe-2">2</h3>
                                            <img src="assets/images/body/tours/mas.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class=" col-lg-6 col-6">
                                        <h3 class="mb-0 pe-3">Matrimonial</h3>
                                    </div>  
                                    <div class="col-lg-6 col-6">
                                        <div class="d-flex flex-row">
                                            <img src="assets/images/body/tours/menos.svg" class=" pe-2" alt="">
                                            <h3 class="mb-0 pe-2">2</h3>
                                            <img src="assets/images/body/tours/mas.svg" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
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
                    <a href="tour-pasajeros.php" class="btn btn-lg rounded-pill btn-primary text-white text-center align-self-center">Reservar</a>
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