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
    <div class="vstack gap-2 col-md-5 mx-auto align-items-center">
        <div class="row">
            <div class=" col align-self-center border border-secondary" style="border-radius: 0 10px 0 10px; margin-top: 20px;">
                <div class="contm container d-flex flex-row-reverse mt-0">
                    <a href="index.html"><i class="bi bi-x"></i></a>
                </div>
                <div class="d-grid gap-2 d-md-block text-center">
                    <button class="btn btn-secondary" type="button">Crear cuenta</button>
                    <a href="<?php echo DB_URL ?>login"><button class="btn btn-light" type="button">Iniciar sección</button></a>
                </div>
                <div class="">
                    <form class="px-4 py-3">
                    <div class="mb-3">
                        <label for="exampleDropdownFormNombre1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleDropdownFormNombre1" placeholder="Juan">
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
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="index02.html"><button type="submit" class="btn btn-outline-danger">Crear cuenta</button></a>
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
</body> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>

</html>