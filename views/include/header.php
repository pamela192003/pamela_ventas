<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAPATERIA MENDOZA | Moda Urbana Joven</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>
    <style>
        :root {
            --color-primario: #FF3E9D;  /* Rosa neón */
            --color-secundario: #00F5FF; /* Azul eléctrico */
            --color-acento: #FFDE59;    /* Amarillo fluo */
            --color-texto: #1A1A1A;      /* Negro puro */
            --color-fondo: #0D0D0D;      /* Negro oscuro */
            --color-detalle: #8A2BE2;   /* Violeta eléctrico */
        }
        
        body {
            font-family: 'Kanit', sans-serif;
            background-color: var(--color-fondo);
            color: white;
            overflow-x: hidden;
        }
        
        .navbar {
            background: var(--color-fondo) !important;
            border-bottom: 3px solid var(--color-acento);
            padding: 10px 0;
        }
        
        /* Logo con efecto graffiti */
        .logo-img {
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--color-acento);
            box-shadow: 0 0 25px rgba(255, 222, 89, 0.7);
            transition: all 0.4s;
            background: black;
            padding: 3px;
            transform: rotate(-5deg);
            filter: drop-shadow(0 0 5px var(--color-primario));
        }
        
        .logo-img:hover {
            transform: rotate(5deg) scale(1.1);
            box-shadow: 0 0 35px rgba(255, 62, 157, 0.8);
            border-color: var(--color-primario);
        }
        
        /* Menú estilo street */
        .nav-link {
            color: white !important;
            font-weight: 700;
            transition: all 0.3s;
            position: relative;
            text-transform: uppercase;
            font-size: 0.95rem;
            letter-spacing: 1.5px;
            margin: 0 10px;
            padding: 8px 0 !important;
            font-family: 'Bungee', cursive;
            text-shadow: 1px 1px 0 var(--color-primario);
        }
        
        .nav-link:hover {
            color: var(--color-acento) !important;
            transform: translateY(-5px);
            text-shadow: 2px 2px 0 var(--color-detalle),
                         0 0 10px var(--color-secundario);
        }
        
        .nav-link i {
            margin-right: 8px;
            font-size: 1.3rem;
            transition: all 0.3s;
            vertical-align: middle;
        }
        
        .nav-link:hover i {
            color: var(--color-secundario);
            transform: scale(1.3) rotate(10deg);
            filter: drop-shadow(0 0 5px var(--color-secundario));
        }
        
        /* Botones estilo sticker */
        .btn-street {
            background: black;
            color: white;
            border: 2px solid var(--color-acento);
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 700;
            letter-spacing: 1px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            font-family: 'Bungee', cursive;
            text-transform: uppercase;
            box-shadow: 3px 3px 0 var(--color-primario);
        }
        
        .btn-street:hover {
            background: var(--color-primario);
            color: black;
            transform: translate(-3px, -3px);
            box-shadow: 6px 6px 0 var(--color-detalle);
            border-color: white;
        }
        
        .btn-street-outline {
            background: transparent;
            color: white;
            border: 2px solid var(--color-secundario);
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 700;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            font-family: 'Bungee', cursive;
            text-transform: uppercase;
            box-shadow: 0 0 15px rgba(0, 245, 255, 0.5);
        }
        
        .btn-street-outline:hover {
            background: var(--color-secundario);
            color: black;
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(0, 245, 255, 0.8);
        }
        
        /* Barra de búsqueda estilo neón */
        .search-box {
            border-radius: 50px;
            padding: 10px 20px;
            border: 2px solid var(--color-primario);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            transition: all 0.3s;
            font-family: 'Kanit', sans-serif;
            box-shadow: 0 0 10px rgba(255, 62, 157, 0.3);
        }
        
        .search-box:focus {
            background: rgba(0, 0, 0, 0.9);
            border-color: var(--color-secundario);
            box-shadow: 0 0 20px rgba(0, 245, 255, 0.5);
            color: white;
            outline: none;
        }
        
        .search-box::placeholder {
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.8rem;
        }
        
        /* Íconos del carrito y usuario */
        .icon-wrapper {
            position: relative;
            margin-left: 20px;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .icon-wrapper:hover {
            transform: scale(1.2) rotate(10deg);
            filter: drop-shadow(0 0 8px var(--color-acento));
        }
        
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--color-primario);
            color: black;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
            font-family: 'Bungee', cursive;
            border: 2px solid black;
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        
        /* Efecto de neón para los íconos */
        .nav-icon {
            filter: drop-shadow(0 0 3px var(--color-secundario));
            transition: all 0.3s;
        }
        
        .nav-icon:hover {
            filter: drop-shadow(0 0 10px var(--color-primario));
            transform: scale(1.2) rotate(-10deg);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .navbar-collapse {
                background: var(--color-texto);
                padding: 20px;
                border-radius: 10px;
                margin-top: 15px;
                border: 2px solid var(--color-acento);
                box-shadow: 0 0 20px var(--color-primario);
            }
            
            .nav-link {
                margin: 10px 0;
                padding: 12px 15px !important;
                border-radius: 5px;
                background: rgba(0, 0, 0, 0.7);
                text-align: center;
            }
            
            .nav-link:hover {
                background: var(--color-primario);
                color: black !important;
            }
            
            .search-box {
                margin-top: 15px;
            }
        }
        
        /* Efecto especial para el navbar */
        .navbar::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, 
                var(--color-primario), 
                var(--color-secundario), 
                var(--color-acento), 
                var(--color-detalle));
            background-size: 300% 100%;
            animation: gradientFlow 5s ease infinite;
        }
        
        @keyframes gradientFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="">
                    <img src="https://scontent.fjau2-1.fna.fbcdn.net/v/t39.30808-6/476433894_1035369005273384_1370971289834915461_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=gZnz1Z2TL0UQ7kNvwEzcWOP&_nc_oc=Adm8yL31RXH12B2N8NL3JDF--EZ0ZaoSL3R29dQGG3xCsmoymD7dBg4PTxA6tRn-_JA&_nc_zt=23&_nc_ht=scontent.fjau2-1.fna&_nc_gid=lHScLscHwKYrCowhKy9WeQ&oh=00_AfRf-X35MsPl0AGT6I79XL4GEQg0ssVBh9Bce70Z_m-89A&oe=687F2F0F" 
                         alt="STREETWEAR X" 
                         class="logo-img" 
                         width="65" 
                         height="65">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" style="color: var(--color-acento); font-size: 1.5rem;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL ?>nuevo">
                                <i class="fas fa-fire nav-icon"></i>Nuevos Drops
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL ?>kids">
                                <i class="fas fa-child-reaching nav-icon"></i>Street Kids
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL ?>hombres">
                                <i class="fas fa-person nav-icon"></i>Urban Men
                            </a>
                        </li>
                        <!-- 
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL ?>mujeres">
                                <i class="fas fa-person-dress nav-icon"></i>Hype Women
                            </a>
                        </li>-->
                    </ul>

                    <div class="d-flex align-items-center">
                        <form class="d-flex me-3" role="search">
                            <input class="form-control search-box me-2" type="search" placeholder="BUSCAR STYLES..." aria-label="Search">
                            <button class="btn btn-street" type="submit">
                                <i class="fas fa-magnifying-glass"></i>
                            </button>
                        </form>

                        <div class="d-flex align-items-center">
                            <a href="<?php echo BASE_URL ?>login" class="icon-wrapper text-white me-3" title="Mi Perfil">
                                <i class="fas fa-user-astronaut fa-2x nav-icon"></i>
                            </a>
                            
                            <a href="<?php echo BASE_URL ?>carrito" class="icon-wrapper text-white position-relative" title="Carrito">
                                <i class="fas fa-bag-shopping fa-2x nav-icon"></i>
                                <span class="cart-badge">3</span>
                            </a>
                            
                            <div class="ms-4 d-flex align-items-center">
                                <button class="btn btn-street-outline me-2">
                                    <i class="fas fa-user me-1"></i> <?php echo $_SESSION['sesion_ventas_nombres'];?>
                                </button>
                                <button class="btn btn-street" onclick="cerrar_sesion();">
                                    <i class="fas fa-right-from-bracket me-1"></i> Salir
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <script>
            const base_url = '<?php echo BASE_URL; ?>';
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>