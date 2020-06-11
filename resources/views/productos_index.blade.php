@extends("home")
@section("content")
    <div class="container-fluid">
        <div id="header">
            <button class="pull-right btn btn-warning"
            data-title="Agregar" title="Agregar"
            ><span class="fa fa-plus"></span></button>
            <h1 class="mt-4">Productos</h1>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" ><a href="/productos">Productos</a></li>

            <li class="breadcrumb-item active">Lista de Productos</li>
        </ol>


    </div>


@endsection
