@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center fm-raleway">Administrador</h1>

        <div class="actions-container row container justify-content-center">
                
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

            {{-- comment --}}

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

        </div>
    </div>
@endsection
