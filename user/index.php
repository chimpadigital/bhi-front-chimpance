<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
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
                <div class="col-lg-3 col-xxl-3">
                    <?php include 'menu-admin.php'; ?>
                </div>
                <div class="col-lg-9 col-xxl-9 border-2 border-left border-primary border-start ps-lg-4 z-index--top">
                    <h4 class="title-bg">Tours reservados</h4>
                    <div class="row mt-4">
                        <div class="tour-card">
                            <div class="tour-wrapper">
                                <div class="tour-img"><img src="../assets/images/body/tours/5.jpg" class="img-fluid" alt=""></div>
                                <div class="tour-content">
                                    <h5 class="mb-3 mt-3 text-center">Mar del Plata</h5>
                                   
                                    <a href="tour-detail.php" class="btn btn-lg rounded-pill btn-primary text-white text-center btn-reservar align-self-center">Ver info</a>
                                </div>
                            </div>
                        </div>
                        <div class="tour-card">
                            <div class="tour-wrapper">
                                <div class="tour-img"><img src="../assets/images/body/tours/4.jpg" class="img-fluid" alt=""></div>
                                <div class="tour-content">
                                    <h5 class="mb-3 mt-3 text-center">Villa Carlos Paz</h5>
                                   
                                    <a href="tour-detail.php" class="btn btn-lg rounded-pill btn-primary text-white text-center btn-reservar align-self-center">Ver info</a>
                                </div>
                            </div>
                        </div>
                        <div class="tour-card">
                            <div class="tour-wrapper">
                                <div class="tour-img"><img src="../assets/images/body/tours/03.jpg" class="img-fluid" alt=""></div>
                                <div class="tour-content">
                                    <h5 class="mb-3 mt-3 text-center">Tierra del Fuego</h5>
                                   
                                    <a href="tour-detail.php" class="btn btn-lg rounded-pill btn-primary text-white text-center btn-reservar align-self-center">Ver info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="title-bg">Mis viajes</h4>
                    <div class="row mt-4">
                        <div class="tour-card">
                            <div class="tour-wrapper">
                                <div class="tour-img"><img src="../assets/images/body/tours/5.jpg" class="img-fluid" alt=""></div>
                                <div class="tour-content">
                                    <h5 class="mb-3 mt-3 text-center">Mar del Plata</h5>
                                   
                                    <a href="tour-detail.php" class="btn btn-lg rounded-pill btn-primary text-white text-center btn-reservar align-self-center">Ver info</a>
                                </div>
                            </div>
                        </div>
                        <div class="tour-card">
                            <div class="tour-wrapper">
                                <div class="tour-img"><img src="../assets/images/body/tours/4.jpg" class="img-fluid" alt=""></div>
                                <div class="tour-content">
                                    <h5 class="mb-3 mt-3 text-center">Villa Carlos Paz</h5>
                                   
                                    <a href="tour-detail.php" class="btn btn-lg rounded-pill btn-primary text-white text-center btn-reservar align-self-center">Ver info</a>
                                </div>
                            </div>
                        </div>
                        <div class="tour-card">
                            <div class="tour-wrapper">
                                <div class="tour-img"><img src="../assets/images/body/tours/03.jpg" class="img-fluid" alt=""></div>
                                <div class="tour-content">
                                    <h5 class="mb-3 mt-3 text-center">Tierra del Fuego</h5>
                                   
                                    <a href="tour-detail.php" class="btn btn-lg rounded-pill btn-primary text-white text-center btn-reservar align-self-center">Ver info</a>
                                </div>
                            </div>
                        </div>
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

</html>