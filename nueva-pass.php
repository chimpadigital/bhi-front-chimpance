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
    <!-- Hero -->
    <section class="hero-height">
        <div class="bg-hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form action="" class="login pass mb-4">
                            <div class="form-control">
                                <p class="mb-1 text-white">Nueva contraseña</p>
                                <input type="password" name="" class="w-100"></input>
                            </div>
                            <div class="form-control">
                                <p class="mb-1 text-white">Repetir contraseña</p>
                                <input type="password" name="" class="w-100"></input>
                            </div>
                            <div class="form-control text-center mt-4">
                                <button type="submit" class="align-self-center border-2 btn btn-lg btn-secondary btn-reservar rounded-pill text-center">Modificar contraseña</button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </section>
    

    
    <?php include 'footer.php'; ?>
    <?php include 'modal-login.php'; ?>
    <?php include 'modal-register.php'; ?>
    <?php include 'modal-recuperar.php'; ?>

</html>