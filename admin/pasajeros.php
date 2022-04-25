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
                    <a href="javascript:history.back()"
                        class="mb-4 d-flex flex-row align-items-center text-decoration-none">
                        <img src="../assets/images/body/icons/volver.svg" class="pe-2" alt="">
                        <h4 class="text-primary mb-0"> Volver</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-xxl-3 d-none d-md-block">
                    <ul class="list-unstyled pe-3 border-left">
                        <li>
                            <a href="index.php"
                                class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin ">
                                <!-- <img src="/assets/images/body/home-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <g transform="translate(-120 -306)">
                                        <path
                                            d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z"
                                            class="fondo" transform="translate(120 306)" fill="#00008b" />
                                        <path d="M13,25.75v-7.5h5v7.5h6.25v-10H28L15.5,4.5,3,15.75H6.75v10Z"
                                            class="icono" transform="translate(125 310.5)" fill="#fff" />
                                    </g>
                                </svg>

                                <h5 class="mb-0 ps-3">Inicio</h5>
                            </a>
                        </li>
                        <li>
                            <a href="tours.php"
                                class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin">
                                <!-- <img src="/assets/images/body/tours-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <path
                                        d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z"
                                        class="fondo" fill="#00008b" />
                                    <path
                                        d="M16.25,3A8.744,8.744,0,0,0,7.5,11.75C7.5,18.313,16.25,28,16.25,28S25,18.313,25,11.75A8.744,8.744,0,0,0,16.25,3Zm0,11.875a3.125,3.125,0,1,1,3.125-3.125A3.126,3.126,0,0,1,16.25,14.875Z"
                                        transform="translate(3.5 5)" class="icono" fill="#fff" />
                                </svg>
                                <h5 class="mb-0 ps-3">Tours / Viajes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="tours-gestion.php"
                                class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin">
                                <!-- <img src="/assets/images/body/tours-admin.svg" class="pe-3" alt=""> -->

                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <g transform="translate(-45 -453)">
                                        <path
                                            d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z"
                                            transform="translate(45 453)" class="fondo" fill="#00008b" />
                                        <path
                                            d="M13.063.563a12.5,12.5,0,1,0,12.5,12.5A12.5,12.5,0,0,0,13.063.563Zm0,5.544a2.117,2.117,0,1,1-2.117,2.117A2.117,2.117,0,0,1,13.063,6.107Zm2.823,12.8a.6.6,0,0,1-.6.6H10.845a.6.6,0,0,1-.6-.6V17.7a.6.6,0,0,1,.6-.6h.6V13.869h-.6a.6.6,0,0,1-.6-.6v-1.21a.6.6,0,0,1,.6-.6h3.226a.6.6,0,0,1,.6.6v5.04h.6a.6.6,0,0,1,.6.6Z"
                                            transform="translate(52.438 459.438)" class="icono" fill="#fff" />
                                    </g>
                                </svg>
                                <h5 class="mb-0 ps-3">Información de Tours / Viajes</h5>
                            </a>
                        </li>
                        <li>
                            <a href="agencias.php"
                                class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin">
                                <!-- <img src="/assets/images/body/perfil-admin.svg" class="pe-3" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <g transform="translate(-24 -615)">
                                        <path
                                            d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z"
                                            transform="translate(24 615)" class="fondo" fill="#00008b" />
                                        <path
                                            d="M23.44,7.88h-6V5.892c0-1.426-.921-3.012-2.344-3.012H10.3C8.874,2.88,7.94,4.466,7.94,5.892V7.88H2.44a1,1,0,0,0-1,1v14.5a1,1,0,0,0,1,1h21a1,1,0,0,0,1-1V8.88A1,1,0,0,0,23.44,7.88Zm-8,15H9.94v-.534c0-.011.307-.026.453-.044a1.581,1.581,0,0,0,.38-.088.964.964,0,0,0,.474-.3,1.037,1.037,0,0,0,.193-.523V16.273a1.089,1.089,0,0,0-.218-.54,1.283,1.283,0,0,0-.39-.374,1.169,1.169,0,0,0-.393-.2c-.214-.065-.5-.106-.5-.123v-.641l4.088-.229-.087.132v6.978a1.072,1.072,0,0,0,.246.523.957.957,0,0,0,.435.321,2.918,2.918,0,0,0,.383.141c.141.041.436.07.436.088ZM10.75,11a1.5,1.5,0,0,1,.514-1.143,1.815,1.815,0,0,1,2.448,0A1.508,1.508,0,0,1,14.221,11a1.488,1.488,0,0,1-.514,1.138,1.823,1.823,0,0,1-2.444,0A1.487,1.487,0,0,1,10.75,11Zm5.19-3.12H9.44V5.892c0-.533.54-1.512,1.073-1.512H14.54c.532,0,1.4.978,1.4,1.512Z"
                                            transform="translate(31.56 621.12)" class="icono" fill="#fff" />
                                    </g>
                                </svg>
                                <h5 class="mb-0 ps-3">Agencias</h5>
                            </a>
                        </li>
                        <li>
                            <a href="pasajeros.php"
                                class="tours-pasajeros d-flex flex-row p-3 align-items-center text-decoration-none menu-admin active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <path id="Rectángulo_334" data-name="Rectángulo 334"
                                        d="M20,0h0A20,20,0,0,1,40,20v0A20,20,0,0,1,20,40H0a0,0,0,0,1,0,0V20A20,20,0,0,1,20,0Z"
                                        class="fondo" fill="#00008b" />
                                    <path id="Icon_material-person" data-name="Icon material-person"
                                        d="M18.5,18.5a6.25,6.25,0,1,0-6.25-6.25A6.248,6.248,0,0,0,18.5,18.5Zm0,3.125c-4.172,0-12.5,2.094-12.5,6.25V31H31V27.875C31,23.719,22.672,21.625,18.5,21.625Z"
                                        transform="translate(1 2)" class="icono" fill="#fff" />
                                </svg>
                                <h5 class="mb-0 ps-3">Pasajeros</h5>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 col-xxl-9 border-2 border-left border-primary border-start ps-lg-4 z-index--top">
                    <h4 class="title-bg">Lista de pasajeros</h4>
                    <h4 class="text-primary d-flex align-items-center mt-4"><img
                            src="../assets/images/body/icons/icon-filter.svg" class="me-2"> Filtros</h4>
                    <form action="" class="login form-pasajeros">
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <div class="form-control p-0 position-relative d-flex align-items-center">
                                    <img src="../assets/images/body/icons/icon-person.svg"
                                        class="position-absolute input-icon" height="20px">
                                    <input type="search" class="w-100 border-secondary ps-5"
                                        placeholder="Nombre y Apellido | DNI">
                                    <img src="../assets/images/body/icons/search-icon.svg"
                                        class="position-absolute search-icon" alt="">
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-control p-0 position-relative d-flex align-items-center">
                                    <img src="../assets/images/body/icons/icon-location.svg"
                                        class="position-absolute input-icon" height="20px">
                                    <input type="search" class="w-100 border-secondary ps-5" placeholder="Destino">
                                    <img src="../assets/images/body/icons/icon-agregar.svg"
                                        class="position-absolute search-icon" width="40px">
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-control p-0 position-relative d-flex align-items-center">
                                    <input type="date" class="w-100 border-secondary date ps-5"
                                        placeholder="Fecha de viaje">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Pago total</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Pago entregado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                        value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Pago restante</label>
                                </div>
                                <div class="d-flex justify-content-center justify-content-md-end mt-3 mt-md-0">
                                    <button class="btn rounded-pill btn-secondary">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-12 mt-5 d-flex flex-column flex-md-row align-items-center justify-content-md-start">
                        <div class="dropdown dropdown-custom">
                            <button class="btn btn-primary rounded-pill dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Ordenar por: <span class="ms-2">Z | A</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Ordenar por: Z | A</a></li>
                            </ul>
                        </div>
                        <p class="contador-pasajeros ms-0 ms-md-2 mt-2 mt-md-0 mb-0">Total de Pasajeros: <span class="ms-2">28</span></p>
                    </div>
                    <div class="col-12 mt-md-0 mt-3 d-flex justify-content-center justify-content-md-end">
                        <button class="btn btn-outline-file rounded-pill me-2" type="button">
                            Importar
                            <img src="../assets/images/body/icons/icon-importar.svg" width="20px" class="ms-2">
                        </button>
                        <button class="btn btn-outline-file rounded-pill" type="button">
                            Exportar
                            <img src="../assets/images/body/icons/icon-exportar.svg" width="20px" class="ms-2">
                        </button>
                    </div>

                    <div class="col position-relative">
                        <div class="table-responsive mt-3 mt-md-4">
                            <table class="table custom-table">
                                <thead>
                                    <tr>
                                        <th class="fit d-flex align-items-center" scope="col">
                                            <img src="../assets/images/body/icons/icon-material-person.svg"
                                                class="me-2">
                                            Pasajero
                                        </th>
                                        <th class="fit" scope="col">DNI</th>
                                        <th class="fit" scope="col">Teléfono</th>
                                        <th class="fit" scope="col">Correo</th>
                                        <th class="fit" scope="col">Destino</th>
                                        <th class="fit" scope="col">Fecha de viaje</th>
                                        <th class="fit" scope="col">Cuenta</th>
                                        <th class="fit" scope="col">Debe</th>
                                        <th class="fit" scope="col">Pagó</th>
                                        <th class="edit-th" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fit d-flex align-items-center">
                                            <img src="../assets/images/body/icons/icon-person-table.svg" class="me-2">
                                            Juan Perez
                                        </td>
                                        <td class="fit">35.569.624</td>
                                        <td class="fit">11-2565893</td>
                                        <td class="fit">juanperez@gmail.com</td>
                                        <td class="fit">Salta</td>
                                        <td class="fit">24/12/2023</td>
                                        <td class="fit">Pago entregado</td>
                                        <td class="fit">-</td>
                                        <td class="fit">@$50.000</td>
                                        <td class="edit">
                                            <a href="pasajeros-detalles.php">
                                                <svg id="Icon_awesome-edit" data-name="Icon awesome-edit" xmlns="http://www.w3.org/2000/svg" width="19.598" height="17.417" viewBox="0 0 19.598 17.417">     
                                                    <path id="Icon_awesome-edit-2" data-name="Icon awesome-edit" d="M13.7,2.834,16.767,5.9a.333.333,0,0,1,0,.47L9.336,13.8l-3.157.35a.662.662,0,0,1-.732-.732l.35-3.157,7.431-7.431A.333.333,0,0,1,13.7,2.834Zm5.512-.779L17.55.395a1.331,1.331,0,0,0-1.878,0l-1.2,1.2a.333.333,0,0,0,0,.47l3.069,3.069a.333.333,0,0,0,.47,0l1.2-1.2A1.331,1.331,0,0,0,19.21,2.055Zm-6.145,9.728v3.464H2.178V4.359H10a.418.418,0,0,0,.289-.119l1.361-1.361a.408.408,0,0,0-.289-.7H1.633A1.634,1.634,0,0,0,0,3.814V15.791a1.634,1.634,0,0,0,1.633,1.633H13.61a1.634,1.634,0,0,0,1.633-1.633V10.422a.409.409,0,0,0-.7-.289l-1.361,1.361A.418.418,0,0,0,13.066,11.783Z" transform="translate(0 -0.007)" fill="rgba(0,0,0,0.49)"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fit d-flex align-items-center">
                                            <img src="../assets/images/body/icons/icon-person-table.svg" class="me-2">
                                            Juan Perez
                                        </td>
                                        <td class="fit">35.569.624</td>
                                        <td class="fit">11-2565893</td>
                                        <td class="fit">juanperez@gmail.com</td>
                                        <td class="fit">Salta</td>
                                        <td class="fit">24/12/2023</td>
                                        <td class="fit">Pago entregado</td>
                                        <td class="fit">-</td>
                                        <td class="fit">@$50.000</td>
                                        <td class="edit">
                                            <a href="pasajeros-detalles.php">
                                                <svg id="Icon_awesome-edit" data-name="Icon awesome-edit" xmlns="http://www.w3.org/2000/svg" width="19.598" height="17.417" viewBox="0 0 19.598 17.417">     
                                                    <path id="Icon_awesome-edit-2" data-name="Icon awesome-edit" d="M13.7,2.834,16.767,5.9a.333.333,0,0,1,0,.47L9.336,13.8l-3.157.35a.662.662,0,0,1-.732-.732l.35-3.157,7.431-7.431A.333.333,0,0,1,13.7,2.834Zm5.512-.779L17.55.395a1.331,1.331,0,0,0-1.878,0l-1.2,1.2a.333.333,0,0,0,0,.47l3.069,3.069a.333.333,0,0,0,.47,0l1.2-1.2A1.331,1.331,0,0,0,19.21,2.055Zm-6.145,9.728v3.464H2.178V4.359H10a.418.418,0,0,0,.289-.119l1.361-1.361a.408.408,0,0,0-.289-.7H1.633A1.634,1.634,0,0,0,0,3.814V15.791a1.634,1.634,0,0,0,1.633,1.633H13.61a1.634,1.634,0,0,0,1.633-1.633V10.422a.409.409,0,0,0-.7-.289l-1.361,1.361A.418.418,0,0,0,13.066,11.783Z" transform="translate(0 -0.007)" fill="rgba(0,0,0,0.49)"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fit d-flex align-items-center">
                                            <img src="../assets/images/body/icons/icon-person-table.svg" class="me-2">
                                            Juan Perez
                                        </td>
                                        <td class="fit">35.569.624</td>
                                        <td class="fit">11-2565893</td>
                                        <td class="fit">juanperez@gmail.com</td>
                                        <td class="fit">Salta</td>
                                        <td class="fit">24/12/2023</td>
                                        <td class="fit">Pago entregado</td>
                                        <td class="fit">-</td>
                                        <td class="fit">@$50.000</td>
                                        <td class="edit">
                                            <a href="pasajeros-detalles.php">
                                                <svg id="Icon_awesome-edit" data-name="Icon awesome-edit" xmlns="http://www.w3.org/2000/svg" width="19.598" height="17.417" viewBox="0 0 19.598 17.417">     
                                                    <path id="Icon_awesome-edit-2" data-name="Icon awesome-edit" d="M13.7,2.834,16.767,5.9a.333.333,0,0,1,0,.47L9.336,13.8l-3.157.35a.662.662,0,0,1-.732-.732l.35-3.157,7.431-7.431A.333.333,0,0,1,13.7,2.834Zm5.512-.779L17.55.395a1.331,1.331,0,0,0-1.878,0l-1.2,1.2a.333.333,0,0,0,0,.47l3.069,3.069a.333.333,0,0,0,.47,0l1.2-1.2A1.331,1.331,0,0,0,19.21,2.055Zm-6.145,9.728v3.464H2.178V4.359H10a.418.418,0,0,0,.289-.119l1.361-1.361a.408.408,0,0,0-.289-.7H1.633A1.634,1.634,0,0,0,0,3.814V15.791a1.634,1.634,0,0,0,1.633,1.633H13.61a1.634,1.634,0,0,0,1.633-1.633V10.422a.409.409,0,0,0-.7-.289l-1.361,1.361A.418.418,0,0,0,13.066,11.783Z" transform="translate(0 -0.007)" fill="rgba(0,0,0,0.49)"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fit d-flex align-items-center">
                                            <img src="../assets/images/body/icons/icon-person-table.svg" class="me-2">
                                            Juan Perez
                                        </td>
                                        <td class="fit">35.569.624</td>
                                        <td class="fit">11-2565893</td>
                                        <td class="fit">juanperez@gmail.com</td>
                                        <td class="fit">Salta</td>
                                        <td class="fit">24/12/2023</td>
                                        <td class="fit">Pago entregado</td>
                                        <td class="fit">-</td>
                                        <td class="fit">@$50.000</td>
                                        <td class="edit">
                                            <a href="pasajeros-detalles.php">
                                                <svg id="Icon_awesome-edit" data-name="Icon awesome-edit" xmlns="http://www.w3.org/2000/svg" width="19.598" height="17.417" viewBox="0 0 19.598 17.417">     
                                                    <path id="Icon_awesome-edit-2" data-name="Icon awesome-edit" d="M13.7,2.834,16.767,5.9a.333.333,0,0,1,0,.47L9.336,13.8l-3.157.35a.662.662,0,0,1-.732-.732l.35-3.157,7.431-7.431A.333.333,0,0,1,13.7,2.834Zm5.512-.779L17.55.395a1.331,1.331,0,0,0-1.878,0l-1.2,1.2a.333.333,0,0,0,0,.47l3.069,3.069a.333.333,0,0,0,.47,0l1.2-1.2A1.331,1.331,0,0,0,19.21,2.055Zm-6.145,9.728v3.464H2.178V4.359H10a.418.418,0,0,0,.289-.119l1.361-1.361a.408.408,0,0,0-.289-.7H1.633A1.634,1.634,0,0,0,0,3.814V15.791a1.634,1.634,0,0,0,1.633,1.633H13.61a1.634,1.634,0,0,0,1.633-1.633V10.422a.409.409,0,0,0-.7-.289l-1.361,1.361A.418.418,0,0,0,13.066,11.783Z" transform="translate(0 -0.007)" fill="rgba(0,0,0,0.49)"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <nav class="d-flex justify-content-center justify-content-md-end">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link d-flex justify-content-center align-items-center" href="#"
                                    aria-label="Previous">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.104" height="11.103"
                                        viewBox="0 0 7.104 11.103">
                                        <g id="Grupo_836" data-name="Grupo 836"
                                            transform="translate(5.69 9.69) rotate(180)">
                                            <line id="Línea_2" data-name="Línea 2" x1="4.276" y2="4"
                                                transform="translate(0 0)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-width="2" />
                                            <line id="Línea_3" data-name="Línea 3" x2="4.276" y2="4.275"
                                                transform="translate(0 4)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link d-flex justify-content-center align-items-center" href="#"
                                    aria-label="Next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.104" height="11.103"
                                        viewBox="0 0 7.104 11.103">
                                        <g id="Grupo_836" data-name="Grupo 836"
                                            transform="translate(5.69 9.69) rotate(180)">
                                            <line id="Línea_2" data-name="Línea 2" x1="4.276" y2="4"
                                                transform="translate(0 0)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-width="2" />
                                            <line id="Línea_3" data-name="Línea 3" x2="4.276" y2="4.275"
                                                transform="translate(0 4)" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>

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
    <?php include 'modal-pasajero-eliminado.php'; ?>

</html>