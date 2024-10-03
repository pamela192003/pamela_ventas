<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factura de Pago</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .footer {
            background-color: #f8f8e5;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #ddd;
        }
  </style>
  <style>
    .logo {
      max-width: 200px;
      height: auto;
    }
    .factura {
      background-color: bisque;
      padding: 20px;
      border-radius: 10px;
      margin-top: 20px;
    }
    .producto {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .producto img {
      max-width: 100px;
      height: auto;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="text-center mt-4 mb-4">
      <img src="logo.png" alt="Logo de la empresa" class="logo">
    </div>

    <div class="factura">
      <h3 class="text-center mb-4">Factura de Pago</h3>


      <div class="producto">
        <img src="https://calzadosalito.com/cdn/shop/products/38026Negro_Saga1_1000x.jpg?v=1624491247" alt="Zapatilla">
        <div>
          <h5>Zapatilla</h5>
          <p>Precio: s/150.00</p>
        </div>
      </div>


      <div class="producto">
        <img src="https://d3fvqmu2193zmz.cloudfront.net/items_2/uid_commerces.1/uid_items_2.FDC5RTHTCWXN/1500x1500/655F6AE56A5F2-Sandalia-Taco-Mujer-Chabely-2ys0810.webp" alt="Taco">
        <div>
          <h5>Taco</h5>
          <p>Precio: s/120.00</p>
        </div>
      </div>


      <div class="producto">
        <img src="https://mikaela.vteximg.com.br/arquivos/ids/180270-1000-1000/1098489-1.jpg?v=638173652109170000" alt="Sandalia">
        <div>
          <h5>Botin Negro</h5>
          <p>Precio: s/30.00</p>
        </div>
      </div>


      <div class="text-right mt-4">
        <button class="btn btn-primary" onclick="window.print()">Imprimir</button>
        <a href="index.html" class="btn btn-secondary">Volver a comprar productos</a>
      </div>

      <hr>
      <div class="text-right">
        <h5 id="total">Total: <S>0<.00</h5>
      </div>
    </div>
  </div>

  <script>
    // Calcular el total
    document.addEventListener('DOMContentLoaded', function() {
      const precios = [150.00, 120.00, 30.00]; // Precios de los productos
      const total = precios.reduce((acc, curr) => acc + curr, 0);
      document.getElementById('total').textContent = `Total: $${total.toFixed(2)}`;
    });
  </script>

