<!--Formulario de creacion de negocios al directorio--> 
@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/negocios') }}" method="post" enctype="multipart/form-data">
@csrf

@include('negocio_admin.formNegocio',['modo'=>'Crear']);
</form>
</div>

@endsection