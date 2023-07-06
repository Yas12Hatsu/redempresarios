<!--Mostrar la lista de negocios que se vayan a agregar--> 

@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alerta">
        {{ Session::get('mensaje') }}
    </div>
@endif
<!--EL SCRIPT PERMITE QUE LA ALERTA SE QUITE A LOS 5 SEGUNDOS AUTOMATICAMENTE-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alerta = document.getElementById('alerta');

        setTimeout(function() {
            alerta.classList.add('fade');
            setTimeout(function() {
                alerta.style.display = 'none';
            }, 500);
        }, 5000); // 5 segundos
    });
</script>


<a href="{{ url('negocios/create') }}" class="btn btn-success"> Registrar nuevo comercio </a>
<br><br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Razón Social</th>
            <th>Ubicación</th>
            <th>Descripción</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <!--<th>Sitio Web</th>-->
            <!--<th>Redes sociales</th>-->
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $negocios as $negocio)
        <tr>
            <td>{{ $negocio->id }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$negocio->imagen }}" width="100" alt="">
                <!--{{ $negocio->imagen }}-->
            </td>
            <td>{{ $negocio->nombre_negocio }}</td>
            <td>{{ $negocio->ubicación }}</td>
            <td>{{ $negocio->descripcion }}</td>
            <td>{{ $negocio->telefono }}</td>
            <td>{{ $negocio->correo }}</td>
           <!-- <td>{{ $negocio->sitio_web }}</td> -->
           <!-- <td>{{ $negocio->facebook }} | {{ $negocio->instagram }} </td>-->
            <td>

            <a href="{{ url('/negocios/'.$negocio->id.'/edit' ) }}" class="btn btn-warning">
                Editar
            </a>    
            <form action="{{ url('/negocios/'.$negocio->id ) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar este negocio del directorio?')" value="Eliminar">
            </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $negocios->links() !!}
</div>
@endsection