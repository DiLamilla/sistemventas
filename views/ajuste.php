<div class="container mt-5 d-flex">
        <div class="w-25 p-3">
            <div class="text-start">
                <a href="<?php echo DB_URL ?>ajuste" class="btn btn-danger w-75">Editar perfil</a>
                <a href="<?php echo DB_URL ?>ajustes" class="btn btn-light w-75 mt-1">Administración de la cuenta</a>
            </div>
        </div>
        <div class="w-50 p-3">
            <div class="">
                <h2>Editar perfil</h2>
                <p class="fw-light">Mantén privados tus datos personales. Cualquier persona que pueda ver tu perfil podrá ver la información que agregues aquí.</p>
            </div>
            <p style="font-size:x-small; margin: 0;">Foto</p>
            <div class="mb-3">
                <img src="https://picsum.photos/200/200" class="rounded-circle me-3" style="width: 120px; height: 120px;" alt="" class="">
                <a href="" class="btn btn-secondary disabled" aria-disabled="true">Cambiar</a>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <p style="font-size:x-small; margin: 0;">Nombre (s)</p>
                    <input type="text" class="form-control" value="Juan">
                </div>
                <div class="col-6">
                    <p style="font-size:x-small; margin: 0;">Apellido (s)</p>
                    <input type="text" class="form-control" value="L">
                </div>
            </div>
            <div class="mb-3">
                <p style="font-size:x-small; margin: 0;">Información</p>
                <textarea class="fw-lighter bo" name=" " id="" cols="10" rows="10" class="form-control" style="height: 100px; width: 100%;">Cuenta tu historia</textarea>
            </div>
            <div class="mb-3">
                <p style="font-size:x-small; margin: 0;">Sito web</p>
                <input type="text" class="form-control fw-lighter" value="agrega un enlace e impulsa el tráfico a tu sitio">
            </div>
            <div class="mb-3">
                <p style="font-size:x-small; margin: 0;">Nombre del usuario</p>
                <input type="text" class="form-control" value="juanlopez">
            </div>
        </div>
    </div>
    <div class="w-100 border-top bg-light" style="height: 100px;">
        <div class="d-flex justify-content-center mt-3"> 
            <button type="submit" class="btn btn-outline-secondary me-2">Restablecer</button>
            <button type="submit" class="btn btn-outline-danger">Guardar</button>
        </div>
    </div>
    </div>
</body>