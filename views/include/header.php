<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ventas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo DB_URL ?>views/styles/style.ccs">
    <link rel="stylesheet" href="<?php echo DB_URL ?>views/styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container_fluid w-100">
        <!--menu de navegacion-->
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(255, 255, 255); height: 80px;">
            <div class="container-fluid">
                <!--logo-->
                <a class="navbar-brand" href="<?php echo DB_URL ?>inicio">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCr9F12NQXW3KFmuKWA7c3YwRz0YEe-i5ccw&s"
                        alt="Logo" width="40" height="40" class="d-inline-block text-center">
                    <p id="marca">Producciones</p>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo DB_URL ?>hoy">Hoy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo DB_URL ?>explorar">Explorar</a>
                        </li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bolder active" aria-current="page" href="<?php echo DB_URL ?>inicio">Inicio</a>
                        </li>
                    </ul>
                    <div>
                      <button class="btn btn-danger" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Iniciar sección</button>
                      <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Registrarse</button>
                      </div>
                </div>
            </div>
        </nav>
        <!--modal iniciar seccion -->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class=" col align-self-center border border-secondary bg-light" style="border-radius: 0 10px 0 10px;"> 
                  <div class="contm container d-flex flex-row-reverse mt-2 mb-2">
                      <a href="<?php echo DB_URL?>inicio"><button type="button" class="btn-close danger" aria-label="Close"></button></a>
                  </div>
                  <div class="d-grid gap-2 d-md-block d-flex text-center">
                    <button class="btn btn-danger me-3" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Crear cuenta</button>
                      <button class="btn btn-secondary" style="width: 125px;" type="button">Iniciar sección</button>
                  </div>
                  <div class="">
                      <form class="px-4 py-3 pb-0">
                      <div class="mb-3">
                          <label for="exampleDropdownFormEmail1" class="form-label">Correo electronico</label>
                          <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="ejemplo@gmail.com">
                      </div>
                      <div class="mb-3">
                          <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
                      </div>
                      <div class="mb-3">
                          <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="dropdownCheck">
                          <label class="form-check-label" for="dropdownCheck">
                              <p>recordar contraseña</p>
                          </label>
                          </div>
                      </div>
                      </form>
                      <div class="d-grid gap-2 col-6 mx-auto mb-3 text-center">
                        <a href="<?php echo DB_URL ?>inicioUsuario"><button type="submit" class="btn btn-outline-danger">Iniciar sección</button></a>
                      </div>
                      <div class="text-center" style="font-size:x-small;">
                          <a class="dropdown-item fw-bold" style="text-decoration: none;" href="#">olvido la contraseña</a>
                          <p class="fw-light">Si continúas, aceptas los <a class="dropdown-item fw-bold" style="text-decoration: none;" href="#">Terminos y condiciones</a>
                          de Empresa y confirmas que has leído nuestra 
                          <a class="dropdown-item fw-bold" style="text-decoration: none;" href="#">Politica de Privacida.</a>
                          <a class="dropdown-item fw-bold" style="text-decoration: none;" href="#">Aviso de recopilación de datos.</a>   
                          </p>
                      </div> 
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!--modal crear cuenta-->
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body p-0">
                      <div class=" col align-self-center border border-secondary" style="border-radius: 0 10px 0 10px; ">
                          <div class="contm container d-flex flex-row-reverse mt-2 mb-2">
                              <a href="<?php echo DB_URL ?>inicio"><button type="button" class="btn-close danger" aria-label="Close"></button></a>
                          </div>
                          <div class="d-grid gap-2 d-md-block text-center">
                              <button class="btn btn-secondary me-3" type="button">Crear cuenta</button>
                              <button class="btn btn-danger" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Iniciar sección</button>
                          </div>
                          <div class="">
                              <form class="px-4 py-3">
                              <div class="mb-3">
                                  <labrmNombre1" class="form-label">Nombre</label>
                                  <input type="text" class="form-control" id="exampel for="exampleDropdownFoleDropdownFormNombre1" placeholder="Juan">
                              </div>
                              <div class="mb-3">
                                  <label for="exampleDropdownFormApellido1" class="form-label">apellido</label>
                                  <input type="text" class="form-control" id="exampleDropdownFormApellido1" placeholder="Lopez Aguilar">
                              </div>
                              <div class="mb-3">
                                  <label for="exampleDropdownFormEmail1" class="form-label">Correo electronico</label>
                                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@ejemplo.com">
                              </div>
                              <div class="mb-3">
                                  <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
                                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
                              </div>
                              <div class="mb-3">
                                  <label for="exampleDropdownFormPassword2" class="form-label">valida contraseña</label>
                                  <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Validar contraseña">
                              </div>
                              <div class="mb-3">
                                  <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                  <label class="form-check-label" for="dropdownCheck">
                                      recordar contraseña
                                  </label>
                                  </div>
                              </div>
                              </form>
                              <div class="d-grid gap-2 col-6 mx-auto text-center mb-3">
                                  <a href="<?php echo DB_URL ?>inicioUsuario"><button type="submit" class="btn btn-outline-danger">Crear cuenta</button></a>
                              </div>
                              <div class="text-center" style="font-size:x-small;">
                                  <p class="fw-light">Si continúas, aceptas los <a class="dropdown-item fw-bold" style="text-decoration: none;" href="#">Terminos y condiciones</a>
                                  de Empresa y confirmas que has leído nuestra 
                                  <a class="dropdown-item fw-bold" style="text-decoration: none;" href="#">Politica de Privacida.</a>
                                  <a class="dropdown-item fw-bold" style="text-decoration: none;" href="#">Aviso de recopilación de datos.</a>   
                                  </p>
                              </div>    
                          </div>
                      </div>
                  </div>    
              </div>
            </div>
          </div>
        </div>