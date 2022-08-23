@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/slides/slide_01.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="color-terciario text-slider">AMPLIO SURTIDO</h5>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slides/slide_02.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-slider color-black">ROPA DE TEMPORADA</h5>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slides/slide_03.jpg" class="d-block w-100 rounded shadow-lg" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-slider color-secundario">CALZADO PARA TODA LA FAMILIA</h5>
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

    <h2 class="fs-5 text-center mt-5 fm-pacifico">Bienvenidos</h2>
    <p class="fm-raleway text-fluid text-center fs-1">Me pongo a tus ordenes como distribuidora de las mejores marcas en ropa y calzado por catalogo, el mejor servicio al mejor precio , ya no tienes que salir de tu casa para realizar tus pedidos, con entrega a domicilio.</p>

    <div class="container tarjetillas py-4"><!-- tarjetillas -->

        <div class="row"><!-- main row -->

            <div class="col-md-4 text-center"><!-- contenido tarjetilla -->
                <div class="imagen-tarejetilla">
                    <img src="img/services/servicio_01.jpg" class="img-fluid rounded img-tarjetilla">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">

                            <p class="fm-pacifico color-secundario">conoce más sobre</p>
                            <h3 class="text-uppercase mb-3 fm-raleway">Nosotros</h3>
                            <a href="" class="btn btn-personal d-block text-uppercase rounded-0">Ver más</a>

                        </div>
                    </div>
                </div>
            </div><!-- fin contenido tarjetilla -->

            <div class="col-md-4 text-center"><!-- contenido tarjetilla -->
                <div class="imagen-tarejetilla">
                    <img src="img/services/servicio_02.jpg" class="img-fluid rounded img-tarjetilla">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">

                            <p class="fm-pacifico color-secundario">nuestros</p>
                            <h3 class="text-uppercase mb-3 fm-raleway">servicios</h3>
                            <a href="" class="btn btn-personal d-block text-uppercase rounded-0">Ver más</a>

                        </div>
                    </div>
                </div>
            </div><!-- fin contenido tarjetilla -->

            <div class="col-md-4 text-center"><!-- contenido tarjetilla -->
                <div class="imagen-tarejetilla">
                    <img src="img/services/servicio_03.jpg" class="img-fluid rounded img-tarjetilla">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">

                            <p class="fm-pacifico color-secundario">visita nuestra</p>
                            <h3 class="text-uppercase mb-3 fm-raleway">tienda</h3>
                            <a href="" class="btn btn-personal d-block text-uppercase rounded-0">Ver más</a>

                        </div>
                    </div>
                </div>
            </div><!-- fin contenido tarjetilla -->

        </div><!-- fin main row -->

    </div><!--  FIN tarjetillas -->

    <div class="container marcas">
        <div class="row d-block">
            <div class="text-center mt-5">
                <p class="fs-5 text-center mt-5 fm-pacifico">Nuestras pricipales</p>
                <h3 class="text-uppercase mb-3 fm-raleway color-secundario">marcas</h3>
            </div>
        </div>

        <div class="imagenes-marcas">
            <div class="row">
                <img src="img/brands/marca-1.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
                <img src="img/brands/marca-2.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
                <img src="img/brands/marca-3.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
                <img src="img/brands/marca-4.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
                <img src="img/brands/marca-5.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
                <img src="img/brands/marca-6.png" alt="" class="col-5 my-auto col-12 col-md-4 col-sm-6 img-fluid">
            </div>
        </div>

    </div>

    <div class="container cards-productos">
        <div class="row">

            <div class="col-md-4 p-5"><!-- card -->
                <div class="card shadow">
                    <img src="img/cards/tarjeta_01.jpg" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h2 class="card-title text-center fm-pacifico text-capitalize">de temporada</h2>
                        <p class="card-text text-center fm-raleway">Ropa y calzado de temporada para toda la familia, las mejores tendencias, al mejor precio.</p>
                        <a href="#" class="btn btn-personal d-block text-capitalize">Leer más</a>
                    </div>
                </div>
            </div><!-- fin card -->

            <div class="col-md-4 p-5"><!-- card -->
                <div class="card shadow">
                    <img src="img/cards/tarjeta_02.jpg" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h2 class="card-title text-center fm-pacifico text-capitalize">emprende</h2>
                        <p class="card-text text-center fm-raleway">Comienza tu propio negocio vendiendo las mejores marcas a los mejores precios.</p>
                        <a href="#" class="btn btn-personal d-block text-capitalize">Leer más</a>
                    </div>
                </div>
            </div><!-- fin card -->

            <div class="col-md-4 p-5"><!-- card -->
                <div class="card shadow">
                    <img src="img/cards/tarjeta_03.jpg" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h2 class="card-title text-center fm-pacifico text-capitalize">compra</h2>
                        <p class="card-text text-center fm-raleway">Las mejores marcas al mejor precio, afiliandote como socio emprendedor y obtener mejores beneficios</p>
                        <a href="#" class="btn btn-personal d-block text-capitalize">Leer más</a>
                    </div>
                </div>
            </div><!-- fin card -->

        </div><!-- <div class="row"> -->
    </div><!-- cards-productos -->

</div>
@endsection
