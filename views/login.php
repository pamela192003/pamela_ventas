<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <style>
    .footer {
          background-color: peachpuff;
          padding: 10px;
          text-align: center;
          border-top: 1px solid #ddd;
          }
  </style>
</head>
<body>
      <div class="container login-container" style="max-width: 900px; margin: auto; padding: 40px 0;">
        <div class="row">
         
            <div class="col-md-6 login-form" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h2 class="text-center" style="margin-bottom: 30px;">INICIA SESIÓN</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Correo electrónico *</label>
                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                    </div><br><br>
                    <div class="form-group">
                        <label for="password">Contraseña *</label>
                        <input type="password" class="form-control" style="box-shadow: none; border-color: #007bff;" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    </div> <br><br>
                    <a class="boton btn btn-primary" style="display: flex;" href="index.html" role="button">Ingresar</a>
                    <div class="text-center mt-3">
                        <a href="">¿Ha olvidado su contraseña?</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="border: 1px solid rgba(0, 0, 0, .125); background-color: beige;">
              <img src="logo.png" class="img-fluid rounded-circle" style="background-color: rgb(189, 189, 119); width: 200px;height: 200px;" alt="logo">
                <h2>BIENVENIDO</h2>
                <p class="text-center" >Registrarse tiene muchos beneficios: pagos más rápidos, posibilidad de agregar más de una dirección, realizar seguimiento a tus pedidos y mucho más.</p>
                <a href="registrarse.html" class="btn btn-custom btn-block" style="background-color: #0a0808; color: #fff;">Registrarse</a>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>