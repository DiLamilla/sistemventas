<div class="container_fluid">
        <!----------menu de navegacion----------->
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(155, 154, 154); height: 80px;">
            <div class="container-fluid">
                <!--logo-->
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo rd.png"
                        alt="Logo" width="50" height="50" class="d-inline-block">
                    Producciones
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class=" nav-link" href="index02.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-bolder" href="hoy.html">Hoy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="explorar.html">Explorar</a>
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
                            <a class="contenedor-icono p-2" href="perfil.html"><i class="btn bi bi-person-circle"></i></a>
                        </li>

                        <li class="nav-item mt-2">
                            <a class="contenedor-icono p-2" href="ajuste/ajuste01.html"><i class="btn bi bi-gear-fill"></i></a>
                        </li>

                        <li class="nav-item mt-2">
                            <a class="contenedor-icono p-2" href="carrito.html"><i class="btn bi bi-cart-fill"></i></a>
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
        <!-- cuerpo-->
        <section>
            <div class="container-fluid mt-4 row justify-content-center">
                <div class="col-2 me-3">
                    <div class="card">
                        <div class="image-box">
                            <img class="w-100 " src="https://i.pinimg.com/236x/2f/b7/65/2fb7658fc0a6a979b3ab371a028ebe2b.jpg" alt="">
                        </div>
                        <div class="content text-center p-5 pt-1 font-size-12">
                            <p></p>
                            <h3>Como hojas al viento</h3>
                            <P>Precio: $800.00</P>
                            <p >Medida:60*60 cms</p>
                        </div>
                    </div>
                    
                    <img class="w-100 mt-3" src="https://picsum.photos/200/204" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/307/200" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/240/300" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/100/290" alt="">
                </div>
                <div class="col-2 me-3">
                    <div class="card">
                        <div class="image-box">
                            <img class="w-100 " src="https://i.pinimg.com/474x/38/f0/8c/38f08c0c71f1d45edac191cf66e4357c.jpg" alt="">
                        </div>
                        <div class="content text-center pe-4 pt-1">
                            <p></p>
                            <h3>Coche modificado</h3>
                            <P>Precio: $800.00</P>
                            <p >Medida:60*60 cms</p>
                        </div>
                    </div>
                    
                    <img class="w-100 mt-3" src="https://picsum.photos/204/403" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/220/300" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/200/270" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/180/220" alt="">
                </div>
                <div class="col-2 me-3">
                    <div class="card">
                        <div class="image-box">
                            <img class="w-100 " src="https://i.pinimg.com/236x/19/66/0c/19660c30611a214bbb7ad8568508a807.jpg" alt="">
                        </div>
                        <div class="content text-center pe-4 pt-1">
                            <p></p>
                            <h3>Coche modificado</h3>
                            <P>Precio: $800.00</P>
                            <p >Medida:60*60 cms</p>
                        </div>
                    </div>
                    
                    <img class="w-100 mt-3" src="https://picsum.photos/200/403" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/270/200" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/200/260" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/160/220" alt="">
                </div>
                <div class="col-2 me-3">
                    <div class="card">
                        <div class="image-box">
                            <img class="w-100 " src="https://i.pinimg.com/236x/e2/8b/b3/e28bb300ce6b70e265e8160a53e496cf.jpg" alt="">
                        </div>
                        <div class="content text-center pe-4 pt-1">
                            <p></p>
                            <h3>Coche modificado</h3>
                            <P>Precio: $800.00</P>
                            <p >Medida:60*60 cms</p>
                        </div>
                    </div>

                    <img class="w-100 mt-3" src="https://picsum.photos/200/201" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/280/300" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/200/350" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/150/220" alt="">
                </div>
                <div class="col-2 me-3">
                    <div class="card">
                        <div class="image-box">
                            <img class="w-100 " src="https://i.pinimg.com/236x/64/e1/82/64e182b8d0a77b775fe076c656b4d24d.jpg" alt="">
                        </div>
                        <div class="content text-center pe-4 pt-1">
                            <p></p>
                            <h3>Coche modificado</h3>
                            <P>Precio: $800.00</P>
                            <p >Medida:60*60 cms</p>
                        </div>
                    </div>

                    <img class="w-100 mt-3" src="https://picsum.photos/240/460" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/200/330" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/300/240" alt="">
                    <img class="w-100 mt-3" src="https://picsum.photos/200/220" alt="">
                </div>
                
            </div>
        </section>