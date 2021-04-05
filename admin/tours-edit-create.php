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
    <form action="" class="login mt-5 z-index-top">
        <div class="container-fluid tour-edit">
            <div class="row">
                <div class="col-md-12 col-6 mb-lg-5 align-self-center align-self-lg-center mb-4 mb-lg-0">
                    <a href="javascript:history.back()" class="mb-lg-4 d-flex flex-row align-items-center text-decoration-none">
                        <img src="../assets/images/body/icons/volver.svg" class="pe-2" alt="">
                        <h4 class="text-primary mb-0"> Volver</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-xxl-4 col-6 z-index--top d-flex d-lg-none justify-content-end align-self-lg-start mb-4 mb-lg-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0">Guardar</a>                    
                    
                </div>
                
                <div class="col-lg-8 col-xxl-8 z-index--top">
                    
                    <div class="d-flex align-items-baseline flex-row">
                        <div class="form-control p-0">
                            
                            <input type="text" name="" class="w-100" value="Mar del plata" placeholder="Título del tour"></input>
                        </div>
                        
                    </div>
                    
                    
                </div>
                <div class="col-lg-4 col-xxl-4 z-index--top d-none d-lg-flex justify-content-md-end justify-content-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="btn btn-lg btn-primary rounded-pill text-center btn-reservar align-self-center mt-lg-0 mt-4">Guardar</a>                    
                    
                </div>
                <div class="align-items-center align-items-md-baseline col-12 col-md-12 d-flex flex-column flex-md-row mb-5 mt-5">
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
                
                    <div class="col-md-6 col-12">
                        <h4 class="title-bg mb-5">Información del viaje</h4>
                        <div class="form-control">
                            <h5 class="mb-2">Salida</h5>
                            <div class="d-flex">
                                <img src="../assets/images/body/tours/salida.svg" class="pe-3" alt="">
                                <input type="text" name="" class="w-100" value="Salida desde Bahia Blanca"></input>
                            </div>
                        </div>
                        <div class="form-control">
                            <h5 class="mb-2">Hotel</h5>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/body/tours/noches.svg" class="pe-3" alt="">
                                <input type="text" class="noches-admin" name="" value="3"></input>
                                <h5 class="mb-0 ps-3">Noches</h5>
                            </div>
                        </div>
                        <div class="form-control">
                            <h5 class="mb-2">Detalle</h5>
                            <div class="d-flex">
                                <input type="text" name="" class="w-100" value="Traslados - Media pensión - Coordinador - Seguro Medíco - Tarifa"></input>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-6 col-12 bg-secondary tours-price mt-3 mt-md-0 ps-0">
                        <h4 class="align-items-center bg-white d-flex text-primary title-bg">Precio por adulto <img src="../assets/images/body/tours/price.svg" class="ps-4" alt=""></h4>
                        <div class="ps-5 pt-5 pb-4">
                            <p class="text-white">Habitación Individual</p>
                            <div class="d-flex align-items-center mt-3">
                                <input type="text" class="border-light text-white" name="" value="9.000"></input>
                                <h5 class="mb-0 ps-3 text-white">AR$</h5>
                            </div>
                            
                            <p class="text-white mt-4">Habitación doble</p>
                            <div class="d-flex align-items-center mt-3">
                                <input type="text" class="border-light text-white" name="" value="6.000"></input>
                                <h5 class="mb-0 ps-3 text-white">AR$</h5>
                            </div>
                      
                        </div>
                        
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-md-row flex-column justify-content-center align-items-center pt-4 ps-0">
                        
                    </div>  
                    <div class="col-12 col-lg-6 d-flex flex-md-row flex-column justify-content-center justify-content-lg-start align-items-center pb-5 pt-4 ps-0">
                        <a class="text-secondary rounded-pill border border-2 me-md-3 border-secondary nav-link btn-lg btn-outline mb-3" href="tours-itinerario.php" >Ver itinerario</a>
                        <a class="text-secondary rounded-pill border border-2 me-md-3 border-secondary nav-link btn-lg btn-outline mb-3" href="tours-excursiones.php" >Ver excursiones</a>
                    </div>  
                    
                
            </div>
            <div class="row">
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-12 mb-5 mb-md-0">
                    <div class="bg-secondary tours-pasajeros ps-0 pb-5 h-100 pe-2">
                        <h4 class="align-items-center bg-white d-flex text-primary title-bg">Paso 1 - Pasajeros <img src="../assets/images/body/tours/pasajeros.svg" class="ps-4" alt=""></h4>
                        <div class="ps-5 pt-3">
                            
                            <h2 class="text-white mb-1">Pasajeros</h2>
                            <p class="text-white">Defina rango de edad</p>
                                                 
                        </div>
                        <div class="ps-5 d-flex align-items-md-center flex-column flex-md-row">
                            <h2 class="text-white mb-1 mt-4 mt-md-0 pe-3">Niños</h2>
                            <div class="align-items-center d-flex mb-3 mb-md-0">
                                <p class="text-white mb-0 pe-2">desde</p>
                                <input type="text" class="noches-admin border-white text-white me-3" name="" value="3"></input>                     
                            </div>
                            <div class="align-items-center d-flex mb-3 mb-md-0">
                                <p class="text-white mb-0 pe-2">hasta</p>
                                <input type="text" class="noches-admin border-white text-white" name="" value="12"></input>                     
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="bg-secondary tours-pasajeros ps-0 pb-5 h-100 pe-2">
                        <h4 class="align-items-center bg-white d-flex text-primary title-bg">Paso 2 - Transporte <img src="../assets/images/body/tours/transporte.svg" class="ps-4" alt=""></h4>
                        <div class="ps-5 pt-3">
                            
                            <h2 class="text-white mb-1">Tipo de transporte</h2>
                            <p class="text-white">Defina el tipo de transporte</p>
                                                 
                        </div>
                        <div class="form-control ps-5">
                            <div class="d-flex">
                                <select class="documento border-white text-white">
                                    <option value="default" selected disabled>Seleccionar transporte</option>
                                    <option class="text-primary" value="Bus mix">Bus mix</option>
                                    <option class="text-primary" value="Bus semi cama">Bus semi cama</option>
                                    <option class="text-primary" value="Minibus">Minibus</option>
                                </select>
                                <!-- <input type="text" name="" class="w-100" value="Salida desde Bahia Blanca"></input> -->
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>

        <div class="container">
            <div class="row">

                <!-- Asientos bus Semi-Cama -->
                <div class="col-lg-12 pt-4">
                    <div class="ps-4 pt-5 pb-4 bg-grey pe-4 radius-30">
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
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="ps-0 pb-5 pe-2">
                        <h4 class="align-items-center bg-white d-flex text-primary title-bg shadow">Paso 3 - Hotel <img src="../assets/images/body/tours/hotel-title.svg" class="ps-4" alt=""></h4>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3 align-items-center align-items-md-baseline d-flex flex-column flex-md-column">
                    <div class="d-flex img-tour justify-content-end align-items-center flex-column radius-10">
                        <img src="../assets/images/body/tours/01.jpg" class="h-100" alt="">
                        <button class="btn btn-danger position-absolute w-100">Eliminar</button>
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class=" ms-0 ms-lg-5 btn btn-lg btn-primary rounded-pill text-center btn-reservar mt-lg-3 mt-1 mb-5">Editar <img src="../assets/images/body/icons/edit.svg" alt=""></a>
                </div>
                <div class="col-md-7 col-12">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="25" height="24" viewBox="0 0 18.363 17.512"><path class="estrella-active" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="25" height="24" viewBox="0 0 18.363 17.512"><path class="estrella-active" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="25" height="24" viewBox="0 0 18.363 17.512"><path class="estrella-active" d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="25" height="24" viewBox="0 0 18.363 17.512"><path d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="25" height="24" viewBox="0 0 18.363 17.512"><path d="M10.765,2.083l2.683,5.434,6,.877-4.341,4.228L16.13,18.6l-5.365-2.821L5.4,18.6l1.024-5.973L2.083,8.395l6-.877Z" transform="translate(-1.583 -1.583)" fill="none" stroke="#09f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></svg>

                        <a href="" data-bs-toggle="modal" data-bs-target="#pasajero" class="ms-5 btn btn-md btn-primary rounded-pill text-center btn-reservar ">Editar <img src="../assets/images/body/icons/edit.svg" alt=""></a>
                    </div>
                    <div class="form-control ps-0 pt-5">
                        <input type="text" name="" class="w-100" value="Nombre del hotel" placeholder="Nombre del hotel"></input>
                    </div>
                    
                    <!-- AMBOS RADIOS SON SELECCIONES MULTIPLES -->
                    <p class="mt-4">Seleccione tipo de habitación</p>
                    <div class="d-flex align-items-md-center flex-column flex-md-row">
                        <div class="d-flex flex-row mb-3 mb-md-0">
                            <input type="radio" class="ps-2" name="habitacion" id="" value="Individual" checked="checked"> <p class="mb-0 ps-2 pe-4">Individual</p>
                            <input type="radio" class="ps-2" name="habitacion" id="" value="Doble" checked="checked"> <p class="mb-0 ps-2 pe-4">Doble</p>
                        </div>
                        <div class="d-flex flex-row">
                            <input type="radio" class="ps-2" name="habitacion" id="" value="Triple" checked="checked"> <p class="mb-0 ps-2 pe-4">Triple</p>
                            <input type="radio" class="ps-2" name="habitacion" id="" value="Cuadruple" checked="checked"> <p class="mb-0 ps-2 pe-4">Cuadruple</p>
                        </div>
                    </div>

                    <p class="mt-4">Seleccione tipo de cama</p>
                    <div class="d-flex align-items-center">
                        <input type="radio" class="ps-2" name="cama" id="" value="Twin" checked="checked"> <p class="mb-0 ps-2 pe-4">Twin</p>
                        <input type="radio" class="ps-2" name="cama" id="" value="Matrimonial" checked="checked"> <p class="mb-0 ps-2 pe-4">Matrimonial</p>

                    </div>

                </div>
                
            </div>
        </div>

    </form>
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