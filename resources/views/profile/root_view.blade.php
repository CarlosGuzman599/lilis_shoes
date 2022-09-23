@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center fm-raleway">*Administrador*</h1>

        <div class="actions-container row container justify-content-center">

            <div class="col-9 my-3 justify-content-center">
                <i class="fas fa-search color-grey"></i>
                <input type="text" class="text-center fm-raleway search-place" placeholder="¿Qué estamos buscando cliente, ciudad, producto?">
            </div>

            {{-- comment 
            
            <button class="btn btn-danger col-3 text-center m-2">
                <i class="fas fa-cash-register fs-4 mt-3"></i>
                <p class="fm-raleway text-decription">Punto</p>
            </button>
            
            <button class="btn btn-primary col-3 text-center m-2">
                <i class="fas fa-receipt fs-4 mt-3"></i>
                <p class="fm-raleway text-decription">Pedidos</p>
            </button>
            
            <button class="btn btn-success col-3 text-center m-2">
                <i class="fas fa-users fs-4 mt-3"></i>
                <p class="fm-raleway text-decription">Clientes</p>
            </button>
            
            <button class="btn btn-secondary col-3 text-center m-2">
                <i class="fas fa-tshirt fs-4 mt-3"></i>
                <p class="fm-raleway text-decription">Productos</p>
            </button>

            <button class="btn btn-warning col-3 text-center m-2">
                <i class="fas fa-city fs-4 mt-3"></i>
                <p class="fm-raleway text-decription">Luegares</p>
            </button>

            <button class="btn btn-outline-dark col-3 text-center m-2">
                <i class="fas fa-cogs fs-4 mt-3"></i>
                <p class="fm-raleway text-decription">Ajustes</p>
            </button>

            --}}

            {{-- comment --}}

            <button class="btn btn-danger col-3 text-center m-2">
                <img src="./img/layout/buttons/cash-register.png" class="img-main-button" alt="no-img">
                <p class="fm-raleway text-decription">Punto</p>
            </button>
            
            <button class="btn btn-primary col-3 text-center m-2">
                <img src="./img/layout/buttons/list.png" class="img-main-button" alt="no-img">
                <p class="fm-raleway text-decription">Pedidos</p>
            </button>
            
            <button class="btn btn-success col-3 text-center m-2">
                <img src="./img/layout/buttons/users.png" class="img-main-button" alt="no-img">
                <p class="fm-raleway text-decription">Clientes</p>
            </button>
            
            <button class="btn btn-secondary col-3 text-center m-2">
                <img src="./img/layout/buttons/storage.png" class="img-main-button" alt="no-img">
                <p class="fm-raleway text-decription">Productos</p>
            </button>

            <button class="btn btn-warning col-3 text-center m-2">
                <img src="./img/layout/buttons/city.png" class="img-main-button" alt="no-img">
                <p class="fm-raleway text-decription">Luegares</p>
            </button>

            <button class="btn btn-outline-dark col-3 text-center m-2">
                <img src="./img/layout/buttons/settings.png" class="img-main-button" alt="no-img">
                <p class="fm-raleway text-decription">Ajustes</p>
            </button>

        </div>
    </div>
@endsection
