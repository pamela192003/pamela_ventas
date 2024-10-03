<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
        body {
            background-color: #f8f9fa;
        }
      .footer {
            background-color: peachpuff;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #ddd;
            }

        .navbar-custom {
            background-color: #f0f0f0;
        }
        .navbar-custom .nav-link {
            color: #333;
            font-weight: bold;
        }
        .navbar-custom .nav-link:hover {
            color: #000;
        }
        .profile-sidebar {
            background-color: #f8f8e5;
            padding: 20px;
            border-right: 1px solid #ddd;
        }
        .profile-sidebar h3 {
            text-align: center;
        }
        .profile-sidebar ul {
            list-style: none;
            padding: 0;
        }
        .profile-sidebar ul li {
            margin: 15px 0;
        }
        .profile-sidebar ul li a {
            color: #333;
            text-decoration: none;
        }
        .profile-sidebar ul li a:hover {
            text-decoration: underline;
        }
        .profile-content {
            padding: 20px;
        }
        .footer {
            background-color: #f8f8e5;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #ddd;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        .btn-update {
            background-color: #ffc107;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    

    <div class="container mt-4" style="border: 1px solid rgba(0, 0, 0, .125); border-radius: 8px;">
        <div class="row">
            <div class="col-md-3 profile-sidebar">
                <div class="text-center">
                    <img src="logo.png" class="img-fluid rounded-circle" style="background-color: rgb(189, 189, 119); width: 100px;height: 100px;" alt="Perfil">
                    <h3>Perfil</h3>
                </div>
                <ul>
                    <li><a href="#"><i class="fas fa-key"></i> Cambiar Contraseña</a></li>
                    <li><a href="#"><i class="fas fa-shield-alt"></i> Seguridad</a></li>
                    <li><a href="#"><i class="fas fa-user-secret"></i> Privacidad</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Ajustes</a></li>
                    <li><a href="#"><i class="fas fa-box"></i> Registro de Pedidos</a></li>
                </ul>
            </div>
            <div class="col-md-9 profile-content">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">Nombres</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nombres">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Apellidos</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="country">País</label>
                            <input type="text" class="form-control" id="country" placeholder="País">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="state">Estado</label>
                            <input type="text" class="form-control" id="state" placeholder="Estado">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">Ciudad</label>
                            <input type="text" class="form-control" id="city" placeholder="Ciudad">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control" id="address" placeholder="Dirección">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-update btn-block">Actualizar Perfil</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
