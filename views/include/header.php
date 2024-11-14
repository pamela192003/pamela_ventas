<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      .footer {
            background-color: peachpuff;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #ddd;
            }
    </style>
    <script>
      const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>
<body>
    <div class="container-fluid p-0 ">
        <nav class="navbar navbar-expand-lg" style="background-color:pink">


            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img src="logo.png" alt="logo" width="70" height="70">
                  </a>


                  <div class="collapse navbar-collapse t-5" id="navbarSupportedContent" style="display: inline-flex; justify-content: space-between;">

                <!-- INICIO BARRA DE TAREAS -->
                 <div >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" style="margin-left: 90px; margin-right: 10px;">   <!-- CAMBIO MARGIN LEFT PARA MOVER -->
                            <a class="nav-link" href="<?php echo BASE_URL ?>nuevo" ><h4>¡LO NUEVO!</h4></a>
                        </li>
                            <li class="nav-item" style="margin-left: 90px;">
                                <a class="nav-link" href="<?php echo BASE_URL ?>kids"><h4>ZONA KIDS</h4></a>
                            </li>
                            <li class="nav-item" style="margin-left: 90px;">
                                <a class="nav-link" href="<?php echo BASE_URL ?>hombres"><h4>HOMBRES</h4></a>
                            </li>
                            <li class="nav-item" style="margin-left: 90px;">
                                <a class="nav-link" href="<?php echo BASE_URL ?>kids"><h4>MUJERES</h4></a>
                            </li>
                            <button type="button" class="btn btn-info " onclick="cerrar_sesion();">cerrar sesion</button>
                            </ul>
                 </div>
                
                <!-- FIN BARRA DE TAREAS -->


                <form class="d-flex" style="margin-right: 40px; margin-left: 40px;" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <a class="btn btn-outline-success" href="<?php echo BASE_URL ?>nuevo">search</a>

                  
                  
                  <a href="<?php echo BASE_URL ?>login"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/></a>
                    
                  </svg>
                  <a id="iconocar" href="<?php echo BASE_URL ?>carrito">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="45" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </a>
                </svg>

                  </div>
                </form>
              </div>
            </div>
          </nav>