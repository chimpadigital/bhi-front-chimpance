<!-- Modal -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title text-primary text-center m-auto" id="loginLabel">Iniciar Sesión</h3>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        <i class="bi-x modal-close" data-bs-dismiss="modal" aria-label="Close"></i>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <form action="" class="login mb-4">
                <div class="form-control">
                    <p class="mb-1">Email</p>
                    <input type="text" name="" class="w-100"></input>
                </div>
                <div class="form-control">
                    <p class="mb-1">Contraseña</p>
                    <input type="password" name="" class="w-100"></input>
                </div>
                <div class="form-control text-center mt-4">
                    <button type="submit" class="align-self-center border-2 btn btn-lg btn-outline-primary btn-reservar rounded-pill text-center">Iniciar Sesión</button>
                </div>
            </form>
            <p class="text-secondary text-center">¿No tenés cuenta?
              <a href="" data-bs-toggle="modal" data-bs-target="#register" data-bs-dismiss="modal" class="text-bold text-decoration-none modal-link">Regístrate.</a>
            </p>
            <p class="text-secondary text-center">
              <a href="" class="text-bold text-decoration-none modal-link" data-bs-toggle="modal" data-bs-target="#recuperar" data-bs-dismiss="modal" >Restaurar contraseña.</a>
            </p>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <img src="assets/images/body/bg-login-2.svg" alt="">
      
      </div>
    </div>
  </div>
</div>