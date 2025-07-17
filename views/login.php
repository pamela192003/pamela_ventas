<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido | Iniciar Sesión</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #4e73df;
      --secondary-color: #f8f9fc;
      --accent-color: #f55cc4;
      --dark-color: #2c3e50;
    }
    
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .login-container {
      margin-top: 5%;
      margin-bottom: 5%;
    }
    
    .login-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }
    
    .login-form {
      padding: 40px;
      background: white;
    }
    
    .welcome-section {
      padding: 40px;
      background: linear-gradient(135deg, #f5f7fa 0%, #f8f9fc 100%);
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;
    }
    
    .logo-img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border: 5px solid white;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    
    h2 {
      color: var(--dark-color);
      font-weight: 700;
      margin-bottom: 25px;
    }
    
    .form-control {
      border-radius: 8px;
      padding: 12px 15px;
      border: 1px solid #ddd;
      transition: all 0.3s;
    }
    
    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    }
    
    .btn-primary {
      background-color: var(--primary-color);
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      font-weight: 600;
      width: 100%;
      transition: all 0.3s;
    }
    
    .btn-primary:hover {
      background-color: #3a5ccc;
      transform: translateY(-2px);
    }
    
    .btn-custom {
      border-radius: 8px;
      padding: 12px 25px;
      font-weight: 600;
      width: 100%;
      margin-bottom: 15px;
      transition: all 0.3s;
    }
    
    .btn-custom:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .forgot-password {
      color: #6c757d;
      transition: all 0.3s;
    }
    
    .forgot-password:hover {
      color: var(--primary-color);
      text-decoration: none;
    }
    
    .footer {
      background-color: peachpuff;
      padding: 15px;
      text-align: center;
      border-top: 1px solid #ddd;
      margin-top: 30px;
      font-size: 14px;
    }
    
    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      color: #6c757d;
      margin: 20px 0;
    }
    
    .divider::before, .divider::after {
      content: "";
      flex: 1;
      border-bottom: 1px solid #ddd;
    }
    
    .divider::before {
      margin-right: 10px;
    }
    
    .divider::after {
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <div class="container login-container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card login-card">
          <div class="row g-0">
            <!-- Formulario de Login -->
            <div class="col-lg-6">
              <div class="login-form">
                <h2 class="text-center mb-4">INICIA SESIÓN</h2>
                <form id="frm_iniciar_sesion">
                  <div class="mb-4">
                    <label for="usuario" class="form-label">Usuario *</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
                    </div>
                  </div>
                  
                  <div class="mb-4">
                    <label for="password" class="form-label">Contraseña *</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                  </div>
                  
                  <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">
                      <i class="fas fa-sign-in-alt me-2"></i> Ingresar
                    </button>
                  </div>
                  
                  <div class="text-center">
                    <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                  </div>
                </form>
              </div>
            </div>
            
            <!-- Sección de Bienvenida -->
            <div class="col-lg-6">
              <div class="welcome-section">
                <div class="text-center">
                  <img src="https://scontent.fjau2-1.fna.fbcdn.net/v/t39.30808-6/300385728_447204950756462_3959348509403535760_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=EkjG14nc4GEQ7kNvwGAF_Zf&_nc_oc=Adlmrj6eIi-Ye2uQJTIsvhMTutPONj0KDLfrrAsNoMihIt7nHijqVfCz9BEaAag1SbA&_nc_zt=23&_nc_ht=scontent.fjau2-1.fna&_nc_gid=xUjBOTRY2xwsOCGukS5Ulw&oh=00_AfQD8A36pFwV8ctyugipiEeJS52vCXdvBjYPBGMdXKHH_g&oe=687F4174" 
                       alt="Logo" class="logo-img rounded-circle">
                  <h2 class="mb-3">BIENVENIDO</h2>
                  <p class="mb-4">Registrarse tiene muchos beneficios: pagos más rápidos, posibilidad de agregar más de una dirección, realizar seguimiento a tus pedidos y mucho más.</p>
                  
                  <div class="d-grid gap-2">
                    <a href="<?php echo BASE_URL ?>registrarse" class="btn btn-dark btn-custom">
                      <i class="fas fa-user-plus me-2"></i> Registrarse
                    </a>
                    
                    <div class="divider">o</div>
                    
                    <a href="<?php echo BASE_URL ?>nuevo-productos" class="btn btn-custom" style="background-color: var(--accent-color); color: white;">
                      <i class="fas fa-cog me-2"></i> Acceso Administrador
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer mt-5">
    <div class="container">
      <span>© 2023 Sistema de Login. Todos los derechos reservados.</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>
  <script>
    const base_url = '<?php echo BASE_URL; ?>';
  </script>
</body>
</html>