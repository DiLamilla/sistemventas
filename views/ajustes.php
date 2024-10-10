<div class="container mt-5 d-flex">
            <div class="w-25 p-3">
                <div class="text-start">
                    <a href="<?php echo DB_URL ?>ajuste" class="btn btn-light w-75">Editar perfil</a>
                    <a href="<?php echo DB_URL ?>ajustes" class="btn btn-danger w-75 mt-1">Administración de la cuenta</a>
                </div>
            </div>
            <div class="w-50 p-3">
                <div class="">                              
                    <h2>Administración de la cuenta</h2>        
                    <p class="fw-light">Modifica tu información personal o el tipo de cuenta.</p>
                </div>
                <h4>Tu cuenta</h4>
                <div class="mb-3">
                    <p style="font-size:x-small; margin: 0;">Correo electrónico · Privado</p>
                    <input type="text" class="form-control" value="juanlopez@gmal.com">
                </div>
                <div class="mb-3">
                    <p style="font-size:x-small; margin: 0;">Contraseña</p>
                    <div class="d-flex">
                    <input type="password" class="form-control me-3">
                        <button class="btn-secondary" type="button" style="border: none; border-radius: 30px;">Cambiar</button>
                    </div>
                </div>
                <div class="mb-3">
                    <p class="fw-bold">Convertir en una cuenta de empresa</p>
                    <div class="d-flex align-items-center w-100">
                        <P class="w-50 position-relative">Con una cuenta de empresa, tendrás acceso a herramientas como anuncios y analíticas para hacer crecer tu negocio en RD.</P>                           
                        <button class="btn-secondary" type="button" style="border: none; border-radius: 30px; width: 200px; height: 40px; margin-bottom: 30px;">Comvertirse en cuenta</button>
                    </div>
                </div>
                <div class="mb-3">
                    <h4>Información personal</h4>
                    <p style="font-size:x-small; margin: 0;">Contraseña</p>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <p style="font-size:x-small; margin: 0;">Género</p>
                </div>
                <div class="mb-3">
                    <p style="font-size:x-small; margin: 0;">País/región</p>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <p style="font-size:x-small; margin: 0;">Idioma</p>
                    <input type="text" class="form-control">
                </div>
                <h4>Desactivación y eliminación</h4>
                <div class="mb-3">
                    <p class="fw-bold">Desactivar cuenta</p>
                    <div class="d-flex">
                        <P class="me-3">Oculta temporalmente tu perfil, Pines y tableros</P>                           
                        <button class="btn-secondary" type="button" style="border: none; border-radius: 30px;">Desactivar cuenta</button>
                    </div>
                    <p class="fw-bold">Eliminar tus datos y tu cuenta</p>
                    <div class="d-flex w-100">
                        <P>Elimina permanentemente tus datos y todo lo asociado a tu cuenta
                        <button class="btn-secondary" type="button" style="border: none; border-radius: 30px; height: 40px;">Eliminar cuenta</button>
                    </div>
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