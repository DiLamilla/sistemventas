<div class="container_fluid w-100">
        <!--menu de navegacion-->
        <nav id="navuser" class="navbar navbar-expand-lg" style="background-color: rgb(155, 154, 154); height: 80px;">
            <div class="container-fluid">
                <!--logo-->
                <a class="navbar-brand" href="inicio">
                    <img src="img/logo rd.png"
                        alt="Logo" width="50" height="50" class="d-inline-block">
                    Producciones
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class=" nav-link active fw-bolder" href="inicioUsuario">Inicio</a>
                        </li>
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
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 w-100">
                        <li class="nav-item w-100">
                            <form class="d-flex col me-auto mt-1 w-100" role="search">
                                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-outline-danger" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="contenedor-icono p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight01" aria-controls="offcanvasRight01"><i class="btn bi bi-bell-fill"></i></a>   
                        </li>

                        <li class="nav-item ">
                            <a class="contenedor-icono p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="btn bi bi-envelope-fill"></i></a>
                        </li>
                        
                        <li class="nav-item mt-2">
                            <a class="contenedor-icono p-2" href="<?php echo DB_URL ?>usuario"><i class="btn bi bi-person-circle"></i></a>
                        </li>

                        <li class="nav-item mt-2">
                            <a class="contenedor-icono p-2" href="ajuste/ajuste01.html"><i class="btn bi bi-gear-fill"></i></a>
                        </li>

                        <li class="nav-item mt-2">
                            <a class="contenedor-icono p-2" href="<?php echo DB_URL ?>carrito"><i class="btn bi bi-cart-fill"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>

        <!--mensaje-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background: rgba(255, 255, 255, 0);">
            <div class="contm container  flex-row-reverse offcanvas-body mensaje btn-light border border-secondary bg-light" style="height: 80vh; border-radius:10px; margin: 80px 20px 0 0;">
                    <div class="d-flex">
                    <div class="msj col-6 d-flex align-items-top px-1 py-3">
                    <h6 class="col-12 mt-2" style="width: 270px;">Buzón de entrada</h6>
                    <button type="button" class="btn btn-light" style="width: 40px; height: 40px; border-radius: 50%;"><i class="bi bi-three-dots"></i></button>
                    </div>
                    </div>
                    <div class="px-3">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    </div>
                    <div class="contenedor-icono d-flex px-1 mt-2 h-auto">
                        <div class="" >
                        <i class="bi bi-pencil-square px-3 me-2" style="border-radius: 20px;"></i>
                        </div>
                        <p class="mt-1">Mensaje nuevo</p>
                    </div>
                    <div class="btn contenedor-icono01 d-flex px-1 mt-2 h-auto">
                        <div class="mt-2" >
                            <i class="bi bi-person-fill-add px-3 me-2" style="border-radius: 20px;"></i>
                        </div>
                        <div>
                        <p class="m-0">Invita a tus amigos</p>
                        <p class="fw-light m-0 p-0">Conéctarse para comensar a chatear</p>
                        </div>
                    </div>  
                </div>
             </div>
            <!--notificaciones-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight01" aria-labelledby="offcanvasRight01Label" style="background: rgba(255, 255, 255, 0);">
                <div class="contm container  flex-row-reverse offcanvas-body mensaje btn-light border border-secondary bg-light" style="height: 80vh; border-radius:10px; margin: 80px 20px 0 0;">
                    <div class="">
                        <div class="msj col-12 d-flex text-center">
                            <h4 class="col-12 mt-2 " style="width: 270px;">Actualizaciones</h4>
                            </div>
                            <h5>Nuevos</h5>
                            <div class="contenedor-icono d-flex px-1 mt-2" style="height: auto;">
                                <p style="font-size:x-small;">uno no hay notificaciones</p>
                            </div>
                            <h5>Visto</h5>
                            <div class="contenedor-icono01 d-flex px-1 mt-2" style="height: auto;">
                                
                            </div>
                        </div>
                    </div>
                </div>  
            </div>      
            
        <!--productos-->
        
        <div class="container-fluid p-5 m-0 mt-4 row">
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2020/07/B1-55.jpg">
                    </div>
                    <div class="content text-center p-5 pt-2">
                        <h3>Desde el silencio</h3>
                        <P>Precio: $1250.00</P>
                        <p >Medida:60*80 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center mt-1">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card mt-4">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2021/01/mandalas-1023x1024.jpg">
                    </div>
                    <div class="content text-center p-5 pt-6">
                        <p class="mt-5"></p>
                        <h3>Mandalas</h3>
                        <P>Precio: $1200.00</P>
                        <p >Medida:110*80 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center mt-1">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-------------col02------------->
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2020/07/COMO-HOJAS-AL-VIENTO.jpg">
                    </div>
                    <div class="content text-center p-5 pt-6">
                        <p></p>
                        <h3>Como hojas al viento</h3>
                        <P>Precio: $800.00</P>
                        <p >Medida:60*60 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center mt-1">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                </div>
                <!--col02 img02-->
                <div class="card mt-4">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2020/07/ENVUELTOS.jpg">
                    </div>
                    <div class="content text-center p-5 pt-5">
                        <p class="mt-5"></p>
                        <h3 >Envueltos</h3>
                        <P>Precio: $667.00</P>
                        <p >Medida:50*50 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center mt-1">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--------------------col03--------------->
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2021/01/HIELO-1.jpg">
                    </div>
                    <div class="content text-center p-5 pt-5">
                        <p class="mt-5"></p>
                        <h3>Hielo</h3>
                        <P>Precio: $250.00</P>
                        <p >Medida:42*67 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center mt-1">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2021/03/enroscado-un-rio-mantiene.jpg">
                    </div>
                    <div class="content text-center p-5 pt-5">
                        <h3 class="mt-3">Enroscado un rio mantiene</h3>
                        <P>Precio: $1120.00</P>
                        <p >Medida:70*115 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center mt-1">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------col04--------------->
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2020/07/ESPERANZA-.jpg">
                    </div>
                    <div class="content text-center p-5 pt-4">
                        <h3 class="mt-2">Esperanza</h3>
                        <P>Precio: $2000.00</P>
                        <p >Medida:100*120 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center mt-1">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="image-box">
                        <img src="https://artplace.pe/wp-content/uploads/2020/07/El-Viaje-788x812.jpg">
                    </div>
                    <div class="content text-center p-5">
                        <p class="mt-5"></p>
                        <h3>El viaje</h3>
                        <P>Precio: $667.00</P>
                        <p >Medida:50*50 cms</p>
                        <p >Tecnica: Óleo sobre lienzo</p>
                        <div class="text-center">
                            <a href="carrito.html" class="btn btn-primary">Compar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>