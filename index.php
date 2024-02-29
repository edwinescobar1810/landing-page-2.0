<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>OboticarioCol|Inicio</title>
</head>

<body>
    <style type="text/css">
        @font-face {
            font-family: 'Domaine Sans Text';
            src: url(fonts/DomaineSansText-Regular.otf) format("truetype");
        }
    </style>
    <header class="header">
        <div class="container">
            <div class="wrapper">
                <div class="header-item-left">
                    <h1><a href="#" class="brand">Oboticário</a></h1>
                </div>
                <div class="header-item-center">
                    <div class="overlay"></div>
                    <nav class="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i class="fa-solid fa-chevron-left"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <ul class="menu-section">
                            <li><a href="#">Inicio</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Categorias <i class="fa-solid fa-chevron-down"></i></a>
                                <div class="menu-subs menu-mega menu-column-4">
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="img/banner_cabello.png" class="responsive" alt="New Product">
                                            <h4 class="title">Cabellos</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="img/banner_perfumes.png" class="responsive" alt="New Product">
                                            <h4 class="title">Perfumeria</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="img/banner_hombre.png" class="responsive" alt="New Product">
                                            <h4 class="title">Hombre</h4>
                                        </a>
                                    </div>
                                    <div class="list-item text-center">
                                        <a href="#">
                                            <img src="img/banner_cuerpo.png" class="responsive" alt="New Product">
                                            <h4 class="title">Cuerpo</h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!--<li class="menu-item-has-children">
                                <a href="#">Productos <i class="fa-solid fa-chevron-down"></i></a>
                                <div class="menu-subs menu-mega menu-column-4">
                                    <div class="list-item">
                                        <h4 class="title">Género</h4>
                                        <ul>
                                            <li><a href="#">Mujeres</a></li>
                                            <li><a href="#">Hombres</a></li>
                                            <li><a href="#">Infantil</a></li>
                                            <li><a href="#">Unisex</a></li>
                                        </ul>
                                        <h4 class="title">Corporal</h4>
                                        <ul>
                                            <li><a href="#">Hidratante</a></li>
                                            <li><a href="#">Oleo</a></li>
                                            <li><a href="#">Exfoliante</a></li>
                                            <li><a href="#">Desodorante</a></li>
                                            <li><a href="#">Jabon</a></li>
                                            <li><a href="#">Solar</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Cuidado Facial</h4>
                                        <ul>
                                            <li><a href="#">Sueros</a></li>
                                            <li><a href="#">Hidrantantes</a></li>
                                            <li><a href="#">Limpieza</a></li>
                                            <li><a href="#">Barba</a></li>
                                        </ul>
                                        <h4 class="title">Maquillaje</h4>
                                        <ul>
                                            <li><a href="#">Rostro</a></li>
                                            <li><a href="#">Ojos</a></li>
                                            <li><a href="#">Labios</a></li>
                                            <li><a href="#">Pestañinas</a></li>
                                            <li><a href="#">Bases Líquidas</a></li>
                                            <li><a href="#">Make B</a></li>
                                            <li><a href="#">Intense</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Cabello</h4>
                                        <ul>
                                            <li><a href="#">Shampoo</a></li>
                                            <li><a href="#">Acondicionador</a></li>
                                            <li><a href="#">Máscara</a></li>
                                            <li><a href="#">Otros Tratamientos</a></li>
                                            <li><a href="#">Finalizadores / Para Después Del Baño</a></li>
                                            <li><a href="#">Cabello Masculino</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <img src="img/imagen_productos.png" class="responsive" alt="Shop Product">
                                    </div>
                                </div>
                            </li>-->
                            <!--<li class="menu-item-has-children">
                                <a href="#">Regalos <i class="fa-solid fa-chevron-down"></i></a>
                                <div class="menu-subs menu-column-1">
                                    <ul>
                                        <li><a href="#">Regalos De Mujer</a></li>
                                        <li><a href="#">Regalos De Hombre</a></li>
                                        <li><a href="#">Regalos De San Valentín</a></li>
                                    </ul>
                                </div>
                            </li>-->
                            <!--<li class="menu-item-has-children">
                                <a href="#">Promos Catálogo</a>
                            </li>-->
                            <!--<li><a href="#">FlashPromo</a></li>-->
                        </ul>
                    </nav>
                </div>
                <div class="header-item-right">
                    <a href="#" class="menu-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#" class="menu-icon"><i class="fa-solid fa-heart"></i></a>
                    <a href="#" class="menu-icon"><i class="fa-solid fa-cart-plus"></i></a>
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/banner_landing.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/MiercolesBoti.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/banner_landing.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="section">
        <p>*Referencias Seleccionadas* *No acumulable con otras promociones* *Hasta agotar existencias*</p>
        <h2>Nuestros Favoritos</h2>
    </div>
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <?php
            include_once "db_conexion.php";
            $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
            $sql = "SELECT `nombre`, 
            `imagen`,
            `imagen_descuento`,
            `sku`, 
            `precio_catalogo`, 
            `precio_cliente_final_`, 
            `precio_emprendedor`, 
            `ahorro`, 
            `descuento`, 
            `observacion` 
            'pum'
            FROM `productos_emprendedor` WHERE `categoria` <=19 ";
            $resultSet = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_row($resultSet)) {
            ?>
                <div id="columna" class="col">
                    <div class="card" style="width: auto;">
                        <img src="img/img/<?php echo $row[1]; ?>" class="card-img-top" alt="...">
                        <div id="card_img" class="card-body">
                            <h5 class="card-title"><?php echo substr($row[3], 0, 30); ?></h5>
                            <p class="card-text"><?php echo substr($row[0], 0, 40); ?></p>
                            <select id="segmento" class="form-select" aria-label="Default select example" onchange="actualizarPrecio()">
                                <option value="1">Emprendedor: $10.000</option>
                                <option value="2">Blue: 10.000</option>
                                <option value="3">Rose: 20.000</option>
                                <option value="4">Gold: 30.000</option>
                                <option value="5">Emerald: 40.000</option>
                            </select>
                            <br>
                            <div class="row row-cols-2">
                                <div id="precioActual" class="col">$<?php echo $row[6]; ?></div>
                                <div id="tachado" class="col">$ <?php echo $row[4]; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
            </li>
        </ul>
    </nav>
    <div class="article">
        <h1>Hola mundo</h1>
    </div>
    <script src="js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>