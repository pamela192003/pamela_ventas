<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
</head>
<body>
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <style>
                
                    .form-container {
                        max-width: 900px;
                        margin: auto;
                        padding: 40px 0;
                    }
                    .form-container .form-box {
                        background: #fff;
                        padding: 30px;
                        border-radius: 8px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }
                    .form-box h2 {
                        margin-bottom: 30px;
                    }
                    .form-control:focus {
                        box-shadow: none;
                        border-color: #007bff;
                    }
                    .btn-custom {
                        background-color: #000;
                        color: #fff;
                    }
                  .footer {
                      background-color: peachpuff;
                     padding: 10px;
                     text-align: center;
                     border-top: 1px solid #ddd;
                 }
                </style>
          
                <div class="container form-container">
                  <h2 class="text-center">Registrate</h2>
                    <div class="form-box">
                        
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="firstName">Nombres </label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Nombres" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastName">Apellidos </label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Apellidos" required>
                                </div>
                            
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Correo electrónico </label>
                                    <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Contraseña </label>
                                    <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                                    <small>La fortaleza de la contraseña: Sin contraseña</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirmar contraseña </label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar contraseña" required>
                            </div>
                            <a class="btn btn-custom btn-block" style="background-color: greenyellow;" href="<?php echo BASE_URL ?>registrarse">Registrarse</a>
                            <div class="text-center mt-3">
                                <p class="text-danger">* Campos obligatorios</p>
                            </div>
                        </form>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
