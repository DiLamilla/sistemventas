<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
      .contm i{
        font-size: 30px;
        color: red;
      }  
    </style>
</head>
<body>

    <div class="vstack gap-2 col-md-5 mx-auto align-items-center b-2">
        <div class="row">
            <div class=" col align-self-center border border-secondary" style="border-radius: 0 10px 0 10px; margin-top: 20px;">
                <div class="contm container d-flex flex-row-reverse">
                    <a href="<?php echo DB_URL ?>inicio"><i class="bi bi-x"></i></a>
                </div>
                <div class="d-grid gap-2 d-md-block  d-flex text-center">
                    <a href="<?php echo DB_URL ?>registrarse"><button class="btn btn-light" type="button">Crear cuenta</button></a>
                    <button class="btn btn-secondary" style="width: 125px;" type="button">Iniciar sección</button>
                </div>
                <div class="">
                    <form class="px-4 py-3">
                    <div class="mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
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
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="<?php echo DB_URL ?>inicioUsuario"><button type="submit" class="btn btn-outline-danger">Iniciar sección</button></a>
                    </div>
                    <div class="text-center" style="font-size:x-small; margin-top:5px;">
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
</body> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>

</html>