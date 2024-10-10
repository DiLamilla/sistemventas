<!--footer-->
<div class="footercont row d-flex bg-dark text-light col-12">
    <div class="col-6 p-5 pt-2">
        <img id="logofooter" src="img/logo rd.png" alt="" style="width: 50px;">
        <p>Telefono: 910 299 453</p>
        <a href="https://web.facebook.com/rdproduccionesfv?mibextid=ZbWKw&_rdc=1&_rdr"><i class="bi bi-facebook" style="color: white; width: 40px;"></i></a>
    </div>
    <div class="col-6 pt-2">
        <h1>Información</h1>
        <p>Av.San Miguel s/n última cuadra, Huanta, Peru</p>
        <p>Horario de atención</p>
        <p>lunes a sabado </p>
        <p>7:00 a.m. - 5:00pm</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
<script>
    function sumarcantidad(){
        var precio = document.getElementById('precio_p1').value;
        var cantidad = document.getElementById('cantidad_p1').value;
        var nueva_cantidad = parseInt(cantidad)+1;
        document.getElementById('cantidad_p1').value = nueva_cantidad;
        calcular_subtotal (precio,nueva_cantidad);
    }
    function restarcantidad(){
        var precio = document.getElementById('precio_p1').value;
        var cantidad = document.getElementById('cantidad_p1').value;
        if(cantidad>1){
            var nueva_cantidad = parseInt(cantidad)-1;
            document.getElementById('cantidad_p1').value = nueva_cantidad;
            calcular_subtotal (precio,nueva_cantidad); 
        }
        
    }
    function calcular_subtotal(precio, cantidad){
        var subtotal = precio * cantidad;
        document.getElementById('subtotal').innerHTML = 'S/'+subtotal;
    }</script>
</html>