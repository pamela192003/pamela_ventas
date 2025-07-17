<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moda Juvenil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>
    <style>
        :root {
            --color-primario: #ff85a2;
            --color-secundario: #ffd6e0;
            --color-acento: #ff6b97;
            --color-texto: #5a3d5c;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff9fb;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--color-primario), #ffb3d9) !important;
            box-shadow: 0 4px 15px rgba(255, 107, 151, 0.2);
        }
        
        .nav-link {
            color: var(--color-texto) !important;
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
        }
        
        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }
        
        .nav-link h4 {
            font-size: 1.1rem;
            margin: 0;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .btn-outline-success {
            color: var(--color-acento);
            border-color: var(--color-acento);
        }
        
        .btn-outline-success:hover {
            background-color: var(--color-acento);
            color: white;
        }
        
        .form-control:focus {
            border-color: var(--color-acento);
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 151, 0.25);
        }
        
        .footer {
            background: linear-gradient(135deg, var(--color-secundario), #ffe6f0);
            padding: 15px;
            text-align: center;
            border-top: 1px solid #ffd6e0;
            color: var(--color-texto);
            font-weight: 500;
        }
        
        .bi-person-fill, .bi-cart-fill {
            transition: transform 0.3s;
        }
        
        .bi-person-fill:hover, .bi-cart-fill:hover {
            transform: scale(1.1);
            color: var(--color-acento);
        }
        
        #iconocar {
            position: relative;
        }
        
        #iconocar:after {
            content: attr(data-count);
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--color-acento);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
        }
        
        .btn-primary {
            background-color: var(--color-acento);
            border-color: var(--color-acento);
        }
        
        .btn-primary:hover {
            background-color: #ff4d88;
            border-color: #ff4d88;
        }
        
        .logo-img {
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .logo-img:hover {
            transform: rotate(10deg);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <!-- REEMPLAZA ESTA URL CON LA DIRECCIÓN DIRECTA DE TU IMAGEN DE FACEBOOK -->
                    <img src="https://scontent.fjau2-1.fna.fbcdn.net/v/t39.30808-6/476433894_1035369005273384_1370971289834915461_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=gZnz1Z2TL0UQ7kNvwEzcWOP&_nc_oc=Adm8yL31RXH12B2N8NL3JDF--EZ0ZaoSL3R29dQGG3xCsmoymD7dBg4PTxA6tRn-_JA&_nc_zt=23&_nc_ht=scontent.fjau2-1.fna&_nc_gid=lHScLscHwKYrCowhKy9WeQ&oh=00_AfRf-X35MsPl0AGT6I79XL4GEQg0ssVBh9Bce70Z_m-89A&oe=687F2F0F" 
                         alt="logo" 
                         class="logo-img" 
                         width="70" 
                         height="70">
                </a>

                <div class="collapse navbar-collapse t-5" id="navbarSupportedContent" style="display: inline-flex; justify-content: space-between;">
                    <!-- INICIO BARRA DE TAREAS -->
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="margin-left: 90px; margin-right: 10px;">
                                <a class="nav-link" href="<?php echo BASE_URL ?>nuevo"><h4><i class="bi bi-stars me-2"></i>¡LO NUEVO!</h4></a>
                            </li>
                            <li class="nav-item" style="margin-left: 90px;">
                                <a class="nav-link" href="<?php echo BASE_URL ?>kids"><h4><i class="bi bi-emoji-sunglasses me-2"></i>ZONA KIDS</h4></a>
                            </li>
                            <li class="nav-item" style="margin-left: 90px;">
                                <a class="nav-link" href="<?php echo BASE_URL ?>hombres"><h4><i class="bi bi-person me-2"></i>HOMBRES</h4></a>
                            </li>
                            <li class="nav-item" style="margin-left: 90px;">
                                <a class="nav-link" href="<?php echo BASE_URL ?>kids"><h4><i class="bi bi-heart-fill me-2"></i>MUJERES</h4></a>
                            </li>
                            <button type="button" class="me-2 btn btn-outline-light"> <i class="bi bi-person-fill"></i> <?php echo $_SESSION['sesion_ventas_nombres'];?></button>
                            <button type="button" class="me-2 btn btn-outline-light" onclick="cerrar_sesion();"><i class="bi bi-box-arrow-right"></i> Cerrar sesión</button>
                        </ul>
                    </div>
                    <!-- FIN BARRA DE TAREAS -->

                    <form class="d-flex" style="margin-right: 40px; margin-left: 40px;" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>

                        <a href="<?php echo BASE_URL ?>login" class="ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </a>
                        
                        <a id="iconocar" href="<?php echo BASE_URL ?>carrito" class="ms-3" data-count="3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                        </a>
                    </form>
                </div>
            </div>
        </nav>

        <script>
            const base_url = '<?php echo BASE_URL; ?>';
        </script>
    </div>
</body>
</html>