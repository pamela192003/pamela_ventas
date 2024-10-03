<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Chispley</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .footer {
              background-color: peachpuff;
              padding: 10px;
              text-align: center;
              border-top: 1px solid #ddd;
              }
      </style>
</head>


        <main id="main-content" class="flex-grow-1 d-flex" style="background-color: beige;">
            <section id="cart" class="container">
                <h3 class="text-center" style="margin-top: 2%;">PRODUCTO AÑADIDO AL CARRITO</h3><br><br>
                <div class="product row" id="product1" style="border: 1px solid black; background-color: white;">
                    <div class="col-md-3">
                        <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/2313/PMP00003534952/full_image-1.jpg" alt="Zapatillas blancas urbanas" class="img-fluid">
                    </div>
                    <div class="col-md-6 details">
                        <h4>Zapatillas blancas urbanas</h4>
                        <ul>
                            <li>TALLA: 37</li>
                            <li>COLOR: BLANCO</li>
                            <li>CANTIDAD: <span id="cantidad1">2</span></li>
                            <li>SUB TOTAL: S/ <span id="subtotal1">390.00</span></li>
                        </ul>
                        <button class="btn btn-custom" onclick="restarProducto(1)" style="background-color: red;" >-</button>
                        <button class="btn btn-custom" onclick="sumarProducto(1)" style="background-color: green;">+</button>
                    </div>
                    <div class="col-md-3 price bg-warning-subtle""><h5>S/390.00</h5></div> 
                </div><br><br>
                <div class="product row" id="product2" style="border: 1px solid black;background-color: white;">
                    <div class="col-md-3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWRrb2Nrm-T-Aq7AfWHabgFuM31pbSBadLxKsdDYTr4-6WkNMpIBoqhm4mTnlfrW9qNgg&usqp=CAU"
                         alt="Zapatillas Negras clásicas" class="img-fluid">
                    </div>
                    <div class="col-md-6 details">
                        <h4>Zapatillas Negras clásicas</h4>
                        <ul>
                            <li>TALLA: 35</li>
                            <li>COLOR: NEGRO</li>
                            <li>CANTIDAD: <span id="cantidad2">1</span></li>
                            <li>SUB TOTAL: S/ <span id="subtotal2">449.90</span></li>
                        </ul>
                        <button class="btn btn-custom" onclick="restarProducto(2)" style="background-color: red;">-</button>
                        <button class="btn btn-custom" onclick="sumarProducto(2)" style="background-color: green;">+</button>
                    </div>
                    <div class="col-md-3 price bg-warning-subtle"><h5>S/449.90</h5></div>
                </div>
                <div id="total" class="text-center">
                    <p>TOTAL: S/ <span id="totalAmount">839.90</span></p>
                </div>
               
            </section>
            <div id="monto" class="w-25" style=" height: 200px; ">
                <h4 class="text-center">INFORMACIÓN DE PAGO</h4>
                <H5>Subtotal : S/. 90.00</H5>
                <div class="row col-12">
                    <H5 class="col-6">Cód. de Descuento : </H5> <input class="col-6" type="text">
                </div>
                <h5>Descuento: S/. 10.00</h5>
                <h5>Costo de Envío: S/. 15.00</h5>
                <H4>Total : S/. 85.00</H4>
                <div id="medios_pago" class="col-12">
                    <a href="https://www.yape.com.pe/" target="_blank"><img class="col-3 m-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Yape_text_app_icon.png/250px-Yape_text_app_icon.png" alt=""></a>
                    <a href="https://www.viabcp.com/" target="_blank"><img class="col-3 m-2" src="https://www.visa.com.pe/dam/VCOM/regional/lac/SPA/Default/Partner%20With%20Us/Info%20for%20Partners/Info%20for%20Small%20Business/visa-pos-800x400.jpg" alt=""></a>
                    <a href="https://www.pagoefectivo.la/pe/" target="_blank"><img class="col-3 m-2" src="https://paginasweb.pe/wp-content/uploads/2016/05/pagoefectivo.png" alt=""></a>
                </div>
                <div class="text-center d-grid gap-2 col-6 mx-auto">
                    <a href="facturadepago.html" class="btn btn-success">Pagar</a>
                    <a href="index.html" class="btn btn-primary">Seguir Comprando</a>
                </div>
            </div>
</main>
    
    <script>
        // Función para sumar la cantidad de un producto
        function sumarProducto(id) {
            var cantidadSpan = document.getElementById('cantidad' + id);
            var subtotalSpan = document.getElementById('subtotal' + id);
            var totalSpan = document.getElementById('totalAmount');

            var cantidad = parseInt(cantidadSpan.innerText);
            var precio = parseFloat(subtotalSpan.innerText);
            var precioUnitario = precio / cantidad;

            cantidad++;
            cantidadSpan.innerText = cantidad;
            subtotalSpan.innerText = (precioUnitario * cantidad).toFixed(2);

            // Actualizar el total
            actualizarTotal();
        }

        // Función para restar la cantidad de un producto
        function restarProducto(id) {
            var cantidadSpan = document.getElementById('cantidad' + id);
            var subtotalSpan = document.getElementById('subtotal' + id);
            var totalSpan = document.getElementById('totalAmount');

            var cantidad = parseInt(cantidadSpan.innerText);
            var precio = parseFloat(subtotalSpan.innerText);
            var precioUnitario = precio / cantidad;

            if (cantidad > 1) {
                cantidad--;
                cantidadSpan.innerText = cantidad;
                subtotalSpan.innerText = (precioUnitario * cantidad).toFixed(2);

                // Actualizar el total
                actualizarTotal();
            }
        }

        // Función para actualizar el total
        function actualizarTotal() {
            var subtotal1 = parseFloat(document.getElementById('subtotal1').innerText);
            var subtotal2 = parseFloat(document.getElementById('subtotal2').innerText);
            var total = subtotal1 + subtotal2;

            document.getElementById('totalAmount').innerText = total.toFixed(2);
        }

        // Función para realizar el pago (redirigir a otra página)
        function realizarPago() {
            // Aquí puedes redirigir a otra página
            window.location.href = "facturadepago.html";
        }

    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

