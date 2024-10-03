<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
       
    </style>
</head>
<body>
    
    <div class="container">
        <div class="form-container" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 20px;">
            <h2>Contacto</h2>
            <p>Escríbenos</p>
            <p>Tomamos nota y te responderemos lo antes posible.</p>
            <form>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                </div>
                <div class="form-group">
                    <label for="phone">Número de teléfono</label>
                    <input type="text" class="form-control" id="phone" placeholder="Número de teléfono">
                </div>
                <div class="form-group">
                    <label for="message">¿Qué está en su mente? </label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
