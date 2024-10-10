<div class="w-100 row m-0">
            <div id="producto" class="w-75">
                <h3 class="text-center">Productos</h3>
                <div class="card w-100 row m-0" style="height: 120px;">
                    <img src="https://blogdeartecontemporaneo.wordpress.com/wp-content/uploads/2013/12/3-dsc07279.jpg"
                     alt="" class="col-2 h-100" style="width: 150px;">
                    <div id="producto" class="col-4 p-0 h-100"> El cuadro "El grito", del noruego Edvard Munch es uno de los que ha generado una 
                        larga discusión respecto a su significado, pues habitualmente se cree que representa a una persona 
                        gritando. Pero el Museo Británico ha presentado una prueba que aclara el misterio.</div>
                    <div id="precio" class="col-1 p-0 h-100"><input type="hidden" id="precio_p1" value="30" readonly> S/.30.00</div>
                    <div id="cantidad" class="col-3 p-4 h-100 row">
                        <button class="btn btn-danger col-2 h-50 m-2" onclick="restarcantidad();">-</button>
                        <input id="cantidad_p1" type="number" value="1" class="col-6 h-50 m-2">
                        <button class="btn btn-success col-2 h-50 m-2" onclick="sumarcantidad();">+</button>
                    </div>
                    <div id="subtotal" class="col-3 p-0 h-100"> S/.90.00</div>
                    <div class="col-1">  
                        <button ></button>
                    </div>
                </div>
            
                <div id="monto" class="w_25" style="height: 200px;">
                    
                    <h4 class="text-center">INFORMACION DE PAGO</h4>
                    <h5>Subtotal: S/. 90.00</h5>
                    <div class="row col-12">
                        <h5 class="col-6">Cód. de descuento: </h5> <input class="col-6" type="text" >
                    </div>

                    <h5>Descuento: S/ 10.00</h5>
                    <h5>Costo de envio: S/. 15.00</h5>
                    <h4>Total: S/. 85.00</h4>
                    <div id="medios_pago" class="col-12">
                        <a href="" target="_blank">
                            <img calss="col-3 m-2" src="" alt="">
                        </a>
                    </div>
                    <div id="medios_pago" class="col-12">
                        <a href="" target="_blank">
                            <img calss="col-3 m-2" src="" alt="">
                        </a>
                    </div>
                    <div id="medios_pago" class="col-12">
                        <a href="" target="_blank">
                            <img calss="col-3 m-2" src="" alt="">
                        </a>
                    </div>
                    <div class="text-center d-grid gap-2 col-6 mx-auto">
                        <a href="" class="btn btn-danger">Pagar</a>
                        <a href="" class="btn btn-danger">Seguir comprando</a>
                    </div>
                </div>

            </div>