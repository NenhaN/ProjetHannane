<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="projetcss" rel="stylesheet"

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MonProjetGit</title>
  </head>
  <body>
    <header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">MonProjetGit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                <li><a class="dropdown-item" href="fichier.php">Home</a></li>
                <li><a class="dropdown-item" href="#">News</a></li>
                <li><a class="dropdown-item" href="#">A propos</a></li>
                </ul>
            </li>
            </ul>
            <form>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
        </div>
        
    </nav>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/image1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/image2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </header>

    <h1 class="display-4 text-center my-5">MonProjetGit</h1>
    

    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit tempora fuga nobis ullam explicabo excepturi quidem accusamus perspiciatis nisi illo dolor quisquam modi commodi maiores quod, adipisci accusantium eveniet facilis nesciunt ipsa nam inventore dolorum cumque. Impedit repellendus officiis atque harum quia, dolore aliquid, voluptatum vero voluptates magnam dicta id eveniet? Iure, incidunt asperiores quaerat odit eum accusantium voluptatem voluptatum cupiditate nihil aperiam minus amet dicta? Alias tempora rem modi facere a in amet quos ut! Cum itaque exercitationem natus! Laboriosam quod error, distinctio nostrum iste ex id officiis natus facilis doloribus. Aut quidem soluta laudantium assumenda nobis explicabo!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit tempora fuga nobis ullam explicabo excepturi quidem accusamus perspiciatis nisi illo dolor quisquam modi commodi maiores quod, adipisci accusantium eveniet facilis nesciunt ipsa nam inventore dolorum cumque. Impedit repellendus officiis atque harum quia, dolore aliquid, voluptatum vero voluptates magnam dicta id eveniet? Iure, incidunt asperiores quaerat odit eum accusantium voluptatem voluptatum cupiditate nihil aperiam minus amet dicta? Alias tempora rem modi facere a in amet quos ut! Cum itaque exercitationem natus! Laboriosam quod error, distinctio nostrum iste ex id officiis natus facilis doloribus. Aut quidem soluta laudantium assumenda nobis explicabo!</p>

    </div>

    <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
  <button type="button" class="btn btn-info">Info</button>
</div>


   <footer class="bg-dark text-center text-white py-3">
       &copy; 2022 - HN - MonProjetGit - Tous droits réservés
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>
