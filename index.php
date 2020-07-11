        <?php
            include('correo.php');
        ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">

    <title>Alexander Duque</title>
  </head>
  <body>
 
 <!--Creamos el menu de navegacion fuera del contenedor para que tome todo el ancho de la pantalla-->
    <nav class="navbar  sticky-top navbar-dark navbar-expand-md" style="background-color: #03BBBD;">
        <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="80" height="60" alt="">
        </a>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#estudios"><h5>Estudios</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#habilidades"><h5>Habilidades</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#proyectos"><h5>Proyectos</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactame"><h5>Contactame</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gi"><h5>GitHub-Linkedin</h5></a>
                </li>
            </ul>
        </div>
    </nav>
<!--Cerramos la parte del contenedor-->


<!--Creamos la parte de nuestro slaider-->
<style>
.carousel-item{
    max-height: 600px;
} 
.carousel-item img{
    max-height: 600px;
}
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/c2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-sm-block text-withe">
            <h2>Vende Online</h2>
            <h5>Aumenta hasta un 60% tus ventas</h5>
        </div>
        <div class="carousel-caption d-sm-none d-block text-withe">
            <h4>Vende Online</h4>
            <h5>Aumenta tus ventas</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="img/c1.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-sm-block text-withe">
            <h2>Diseño 100% Responsive</h2>
            <h3>¡Que tus clientes estén contigo siempre!</h3>
            <h4>Simplifica la forma en que tus clientes pueden acceder a tus productos, desde su PC o smartphone.</h4>
        </div>
        <div class="carousel-caption d-sm-none d-block text-withe">
            <h3>Diseño 100% Responsive</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/c3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-sm-block text-withe">
            <h2>Software a la medida</h2>
            <h3>¡Nos acoplamos a tus necesidades!</h3>
            <h4>Soluciones para tus problemas!</h4>
        </div>
        <div class="carousel-caption d-sm-none d-block text-withe">
            <h3>Software a la medida</h3>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--CERRAMOS la parte de nuestro slaider-->


<!--Iniciamos el contenedor-->

<div class="container-fluid"><!--Se abre el container fluid-->
    <div class="row"><!--Se la primer row-->
        <div class="col-12 col-sm-5 my-sm-5">
            <img class=" border border-info img-fluid img-thumbnail" src="img/portada.jpg" alt="">
        </div>
        <div class="col-12 col-sm-7 mt-sm-4">
            <a name="estudios">
            <h1 class="my-sm-4 text-info text-center">Hola, Me llamo Alexander Duque.</h1>
            <h4>Gracias por visitar mi pagina! te contare un poco sobre mi. Soy un apasionado por la programación, amante de las líneas de código que busca expandir sus conocimientos día a día, Puedes ver mis proyectos, desde mi página Web o GitHub.</h4><br>
            <span class="text-light"><h2 class="bg-info">Estudios:</h2></span>
            <br>
            <a name="habilidades">
            <h4><span class="badge badge-primary">Tecnologo </span> En el area de Sistemas.</h4>
            <h4><span class="badge badge-success">Especializacion </span> Bases de Datos.</h4>
            <a name="proyectos">
            <h4><span class="badge badge-warning">Diplomados </span> Programacion en PHP - Programacion en JAVA</h4>
            <h4><span class="badge badge-secondary">Certificados </span> Scrum Master - ITIL V4 </h4>
            <h4><span class="badge badge-dark">Ingenieria </span> En Curso...</h4>
        </div>
    </div><!--Se Ciera el primer row-->

    
    <div class="row"><!--Se abre el segundo row-->
        <div class="col-12">
            <h1 class="display-4 bg-info text-white text-center ">Habilidades</h1>
        </div>
    </div><!--Se cierra el segundo row-->


    <div class="row"  style="background-color: #F4F4F4;"><!--Se abre el tercer row-->
        <div class="col-12 col-sm-12"><!--Se abre columna-->
      
<!--Se crea Boton colapsable con una tabla de habilidades dentro-->
        <p class=" my-2 text-center">
            <button class="btn btn-primary mx-auto" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <H3>Mostrar Habilidades</H3>
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
            
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Habilidad</th>
                <th scope="col">Nivel</th>
                <th scope="col">Experiencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"></th>
                <td>PHP</td>
                <td>Alto</td>
                <td>Medio</td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td>JAVA</td>
                <td>Medio</td>
                <td>Basico</td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td>HTML</td>
                <td>Alto</td>
                <td>Alto</td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td>CSS</td>
                <td>Medio</td>
                <td>Basico</td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td>MariaDB</td>
                <td>Alto</td>
                <td>Medio</td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td>MySQL</td>
                <td>Alto</td>
                <td>Medio</td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td>JavaScript</td>
                <td>Medio</td>
                <td>Basico</td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td>Bootstrap</td>
                <td>Alto</td>
                <td>Alto</td>
                </tr>
            </tbody>
        </table>
            </div>
        </div>


        <div class="row my-5">
            <div class="col-12">
                <h3 class="bg-info text-white text-center">Proyectos</h3>
            </div>
        </div>


        <div class="row"><!--Abre row 9--------------------------------------------------------->

            <div class="col-12 col-sm-4"><!--Abre colum-->

                <div class=" mx-auto my-2 card" style="width: 18rem;">
                    <img src="img/m1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portada Nativa</h5>
                        <p class="card-text">Una portada basica con muy lindos estilos en css, dandole un aspecto profesional gracias a ser Responsive. creada unicamente con <samp class="badge badge-pill badge-warning">HTML</samp> y <samp class="badge badge-pill badge-info">CSS</samp> puro.</p>
                        <a target="blank" href="proyectos/PportadaNativa/inicio.php" class="btn btn-primary">Ver Pagina Web</a>
                    </div>
                </div>
            </div><!--Cierra colum-->

            <div class="col-12 col-sm-4"><!--Abre colum-->

                <div class=" mx-auto my-2 card" style="width: 18rem;">
                    <img src="img/m2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mini Red Social</h5>
                        <p class="card-text">Una Mini Red Social, Cuenta con un sistema de registro y login, el cual posee su respectiva validacion desde el backend, puedes registrarte y dejar un comentario, gracias a la persistencia de datos por su conexion a la base de datos. <samp class="badge badge-pill badge-warning">HTML</samp> <samp class="badge badge-pill badge-info">CSS</samp>
                        <span class="badge badge-pill badge-primary">PHP</span> <span class="badge badge-pill badge-success">MySql</span>
                        </p>
                        <a target="blank" href="proyectos/Piamigos/paginas/index.php" class="btn btn-primary">Ver Pagina Web</a>
                    </div>
                </div>
            </div><!--Cierra colum-->

            <div class="col-12 col-sm-4"><!--Abre colum-->

                <div class=" mx-auto my-2 card" style="width: 18rem;">
                    <img src="img/encon.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Proximamente</h5>
                        <p class="card-text">Pronto podras visualizarlo</p>
                        <a href="#" class="btn btn-primary">Ver Pagina Web</a>
                    </div>
                </div>
            </div><!--Cierra colum-->
            
        </div><!--Cierra row 9---------------------------------------------------------------------------------->


        <div class="row"><!--Abre row 10--------------------------------------------------------->

        <div class="col-12 col-sm-4"><!--Abre colum-->

            <div class=" mx-auto my-2 card" style="width: 18rem;">
                <img src="img/encon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Proximamente</h5>
                    <p class="card-text">Pronto podras visualizarlo</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div><!--Cierra colum-->

        <div class="col-12 col-sm-4"><!--Abre colum-->

            <div class=" mx-auto my-2 card" style="width: 18rem;">
                <img src="img/encon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Proximamente</h5>
                    <p class="card-text">Pronto podras visualizarlo</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div><!--Cierra colum-->

        <div class="col-12 col-sm-4"><!--Abre colum-->
            <div class=" mx-auto my-2 card" style="width: 18rem;">
                <img src="img/encon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Proximamente</h5>
                    <p class="card-text">Pronto podras visualizarlo</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    <a name="contactame">
                </div>
            </div>
        </div><!--Cierra colum-->

</div><!--Cierra row 10---------------------------------------------------------------------------------->


<div class="row"><!--Se abre row 11-->
    <div class="col-12 col-sm-12 my-4">
        <h2 class="bg-info text-white text-center">Contáctame</h2>
    </div>

</div><!--Se Cierra row 11-->


<div class="row"><!--Se abre row 11-->

    <div class="col-12 col-sm-5" style="background-image: url('img/contact.png'); background-size: cover;">
        
    </div>

    <div class="col-12 col-sm-7">
        <form action="" class="" method="POST">
            <div class="form-group w-75"> 
                <label for="exampleFormControlInput1">Tu Nombre:</label>
                <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="..." name="nombre">
             </div>
             <div class="form-group w-75"> 
                <label for="exampleFormControlInput1">Correo:</label>
                <input type="email" class="form-control"  id="exampleFormControlInput1" placeholder="tucorreo@servidor.com" name="correo">
             </div>
             <div class="form-group w-75"> 
                <label for="exampleFormControlInput1">Asunto</label>
                <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="Cotizacion de proyecto" name="asunto">
             </div>
             <div class="form-group w-75">
                <label for="exampleFormControlTextarea1">Mensaje:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje"></textarea>
            </div>
            <?PHP   if(isset($_POST['enviar']) && $bandera == 1){echo "<h3 class=' w-50 bg-success'>Enviado</h3>"; }?>
            <?PHP   if(isset($_POST['enviar']) && $bandera == 2){echo "<h3 class=' w-50 bg-danger'>Algo salio mal</h3>"; }?>
            <?PHP   if(isset($_POST['enviar']) && isset($error)){echo "<h3 class=' w-50 bg-warning'>Llene todos los datos</h3>"; }?>
            <button type="submit"  name ="enviar" class="btn btn-primary mb-2">Enviar Mensaje</button>
        </form>



        

    </div>

</div><!--Se Cierra row 11-->


<div class="row mt-5"><!--Se abre row 11-->

    <div class="col-12 col-sm-12 mt-5 bg-info p-2 d-flex justify-content-center">
        <a target="blank" href="https://github.com/Brakoran/"><img width="60px" height="60px" src="img/git.png" class=" mx-3 img-fluid" alt="Responsive image"></a>
        <a target="blank" href="https://www.linkedin.com/in/duqueg/"><img width="60px" height="60px" src="img/lin.png" class=" mx-3 img-fluid" alt="Responsive image"></a>
    </div>
    <a name="gi">
</div><!--Se Cierra row 11-->


<!--Boton Wassap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=573013324259&text=Hola!%20Alexander%20" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<!--Cierre del di boton wassap-->

        </div>


    </div>

   <!--Scrip para cambiar el active-->
  <script>
        $('navbar-nav').on('click','li', function(){
        $(this).addClass('active').siblings().removeClass('active');
                                                        });
  </script>
<!--Scrip para cambiar el active-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>