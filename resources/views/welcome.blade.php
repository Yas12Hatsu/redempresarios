@extends ('layouts.inicio')

@section('content')

@foreach ($negocios as $negocio)
                                   
<div class="col-md-6" data-aos="fade-right" id="locales{{ $negocio->id }}"> <!--le quite  d-flex-->
            <div class="card">
              <div class="card-img">
                <center><img src="{{ asset('storage').'/'.$negocio->imagen }}" width="450" alt="..."><center>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#negoc">{{ $negocio->nombre_negocio }}</a></h5>
                <p class="card-text">
                    <p style=" font-weight: bold;">Ubicación: <span style=" font-weight: normal;">{{ $negocio->ubicación }}</span> </p>
                    <p style=" font-weight: bold;">Descripción: <span style=" font-weight: normal;">{{ $negocio->descripcion }}</span> </p>
                    <p style=" font-weight: bold;">Teléfono: <span style=" font-weight: normal;">{{ $negocio->telefono }} </span> </p>
                    <p style="font-weight: bold;">
                      Correo:
                      @if (filter_var($negocio->correo, FILTER_VALIDATE_EMAIL))
                        <a href="mailto:{{ $negocio->correo }}" style="color: #2C74B3">{{ $negocio->correo }}</a>
                      @else
                        {{ $negocio->correo }}
                      @endif
</p>
                    <p style=" font-weight: bold;">Redes sociales: 
                    <a href="{{ $negocio->facebook }}" class="facebook"> <i class="bi bi-facebook" style="margin: 10px; color: #2C74B3"></i></a>
                    @if (filter_var($negocio->instagram, FILTER_VALIDATE_URL))
                      <a href="{{ $negocio->instagram }}" class="instagram"><i class="bi bi-instagram" style="color: #C13584"></i></a>
                    @endif


                    <div class="read-more">
                    @if (filter_var($negocio->sitio_web, FILTER_VALIDATE_URL))
                      <a href="{{ $negocio->sitio_web }}"><i class="bi bi-arrow-right"></i> Visita el sitio web o envía un mensaje via WhatsApp</a>
                    @else
                    <span><i class="bi bi-arrow-right"></i> No se proporcionó sitio web</span>
                    @endif
              </div>

              </div>
            </div>
          </div>
    
          @endforeach


@endsection