<!--Formulario de edición o actualizacion de negocios al directorio--> 
@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/negocios/'.$negocio->id ) }}" method="post" enctype="multipart/form-data">

@csrf
{{ method_field('PATCH') }}
@include('negocio_admin.formNegocio',['modo'=>'Editar']);

</form>

</div>
@endsection
