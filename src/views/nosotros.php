<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Gian Alejandro">
    <meta name="descripcion" content="Nosotros">
    <meta name="keywords" content="Mascotas, Perdidas, Ayuda">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <title>Nosotros - Mascotas Perdidas</title>
    <link rel="icon" type="image/x-icon" href="image/fivicon.jpeg">
</head>
<body>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/carrusel1.jpg" class="d-block w-100" alt="carrusel 1">
            </div>
            <div class="carousel-item">
                <img src="image/carrusel2.jpg" class="d-block w-100" alt="carrusel 2">
            </div>
            <div class="carousel-item">
                <img src="image/carrusel3.jpg" class="d-block w-100" alt="carrusel 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <a class="navbar-brand" href="#"><img src="image/fivicon.jpeg" width="50" alt="Logo de la Web"></a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="nosotros.php">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php">Mascotas Perdidas</a></li>
                    <li class="nav-item"><a class="nav-link" href="testimonio.php">Testimonio</a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="views/contacto.php">Contacto</a></li>-->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center">Sobre Nosotros</h1>
        <a href="https://wa.me/51979007290" class="whatsapp-icon" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#25D366" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
        </svg>
        </a>
        <p class="text-justify">
            En Mascotas Perdidas, nuestra misión es ayudar a reunir a las mascotas perdidas con sus dueños. Creemos que cada mascota merece ser encontrada y que cada propietario merece la oportunidad de volver a ver a su querido compañero. 
        </p>
        <p class="text-justify">
            Nuestro equipo se dedica a ofrecer apoyo y recursos a las familias que buscan a sus mascotas, proporcionando información y herramientas útiles para facilitar la búsqueda. Creemos en la importancia de la comunidad y la solidaridad en estos momentos difíciles.
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
