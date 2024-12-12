
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .module-card {
            margin-bottom: 20px;
        }
        .module-card button {
            width: 100%;
        }
        .module-card .card-body {
            text-align: center;
        }
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .card {
            border-radius: 10px;
        }

        /* Colores únicos para cada módulo */
        .card-productos {
            background-color: #fef3c3; 
        }
        .card-categoria {
            background-color: #c4dea9; 
        }
        .card-persona {
            background-color: #fbc6ad; 
        }
        .card-compra {
            background-color: #de9bac; 
        }
        .card i {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .btn-custom {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }
        .btn-ver {
            background-color: #ffffff;
            color: #000;
            border: none;
        }
        .btn-registrar {
            background-color: #ffffff;
            color: #000;
            border: none;
        }
        .btn-ver:hover, .btn-registrar:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <h1 class="text-center my-4">Bienvenido al Panel de Administración</h1>
    <p class="text-center mb-4">Selecciona una de las opciones del menú para gestionar el sistema.</p>
    <div class="row justify-content-center">
        <!-- Productos -->
        <div class="col-md-3">
            <div class="card module-card card-productos">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-cogs"></i> Productos</h5>
                    <a href="<?php echo BASE_URL ?>productos" class="btn btn-custom btn-ver mb-2"><i class="fas fa-eye"></i> Ver</a>
                    <a href="<?php echo BASE_URL ?>nuevo-productos" class="btn btn-custom btn-registrar"><i class="fas fa-plus"></i> Registrar</a>
                </div>
            </div>
        </div>

        <!-- Categoría -->
        <div class="col-md-3">
            <div class="card module-card card-categoria">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-th-large"></i> Categoría</h5>
                    <a href="<?php echo BASE_URL ?>categoria" class="btn btn-custom btn-ver mb-2"><i class="fas fa-eye"></i> Ver</a>
                    <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-custom btn-registrar"><i class="fas fa-plus"></i> Registrar</a>
                </div>
            </div>
        </div>

        <!-- Persona -->
        <div class="col-md-3">
            <div class="card module-card card-persona">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user"></i> Persona</h5>
                    <a href="<?php echo BASE_URL ?>personas" class="btn btn-custom btn-ver mb-2"><i class="fas fa-eye"></i> Ver</a>
                    <a href="<?php echo BASE_URL ?>nueva-persona" class="btn btn-custom btn-registrar"><i class="fas fa-plus"></i> Registrar</a>
                </div>
            </div>
        </div>

        <!-- Compra -->
        <div class="col-md-3">
            <div class="card module-card card-compra">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-shopping-cart"></i> Compra</h5>
                    <a href="<?php echo BASE_URL ?>compra" class="btn btn-custom btn-ver mb-2"><i class="fas fa-eye"></i> Ver</a>
                    <a href="<?php echo BASE_URL ?>nuevo-compras" class="btn btn-custom btn-registrar"><i class="fas fa-plus"></i> Registrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5.3.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>