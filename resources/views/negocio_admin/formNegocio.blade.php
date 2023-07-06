<!--Formulario que tendra los datos en comun con create y update--> 
<h1>{{ $modo }} negocio </h1>

@if(count($errors)>0)
    
    <div class="alert alert-danger" role="alert">
    <ul>    
        @foreach( $errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach

    </ul>
    </div>
    
@endif

<div class="form-group">

<label for="nombre_negocio"> Nombre del negocio, empresa o comercio: </label>
<!--Los isset validan si se esta recibiendo un dato o no, si no se recibe nada, muestra los espacios en blanco-->
    <input type="text" class="form-control" name="nombre_negocio" value="{{ isset($negocio->nombre_negocio)?$negocio->nombre_negocio:old('nombre_negocio') }}" id="nombre_negocio"><br>
</div>

<div class="form-group">
    <label for="ubicación"> Dirección: </label>
    <input type="text" class="form-control" name="ubicación" value="{{ isset($negocio->ubicación)?$negocio->ubicación:old('ubicación') }}" id="ubicación"><br>
</div>

<div class="form-group">
    <label for="descripcion"> Descripción (Producto o servicio ofrecido): </label>
    <input type="text" class="form-control" name="descripcion" value="{{ isset($negocio->descripcion)?$negocio->descripcion:old('descripcion') }}" id="descripcion"><br>
</div>

<div class="form-group">
    <label for="telefono"> Número telefonico: </label>
    <input type="tel" pattern="[0-9]+" class="form-control" name="telefono" value="{{ isset($negocio->telefono)?$negocio->telefono:old('telefono') }}" id="telefono"><br>
</div>

<div class="form-group">
    <label for="correo"> Correo: </label>
    <input type="text" class="form-control" name="correo" value="{{ isset($negocio->correo)?$negocio->correo:old('correo') }}" id="correo"><br>
</div>

<div class="form-group">
    <label for="sitio_web"> Sitio web (opcional): </label>
    <input type="text" class="form-control" name="sitio_web" value="{{ isset($negocio->sitio_web)?$negocio->sitio_web:old('sitio_web') }}" id="sitio_web"><br>
</div>

<div class="form-group">
    <label for="facebook"> Facebook: </label>
    <input type="text" class="form-control" name="facebook" value="{{ isset($negocio->facebook)?$negocio->facebook:old('facebook') }}" id="facebook"><br>
</div>

<div class="form-group">
    <label for="instagram"> Instagram: </label>
    <input type="text" class="form-control" name="instagram" value="{{ isset($negocio->instagram)?$negocio->instagram:old('instagram') }}" id="instagram"><br>
</div>

<div class="form-group">
    <label for="imagen"> Imagen o logotipo: </label>
    @if(isset($negocio->imagen))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$negocio->imagen }}" width="100" alt=""><br><br>
    @endif
    <input type="file" class="form-control" name="imagen" value="" id="imagen" accept=".jpg, .png" ><br>
</div>


    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    
    <a class="btn btn-primary" href="{{ url('negocios/') }}"> Regresar </a>

    <br>