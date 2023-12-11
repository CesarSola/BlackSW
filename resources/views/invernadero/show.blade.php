@extends('layouts.app')

@section('title', 'Detalles del Invernadero')

@section('contents')
<div id="mapa"></div>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdUaRCNxumu4pXK6aawvjmykUdkdNCdb4&callback=generarMapa"></script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdUaRCNxumu4pXK6aawvjmykUdkdNCdb4&callback=generarMapa"></script>
<script>
  const coord = { lat: 20.7685, lng: -90.6753};
  const mapaDiv = document.getElementById("mapa");
  let mapa;
  let marcador;

  function generarMapa() {
    mapa = new google.maps.Map(mapaDiv, {
      center: coord,
      zoom: 15,
    });
    marcador = new google.maps.Marker({
      position: coord,
      map: mapa,
    });
  }
</script>
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detalles del Invernadero</h1>
    </div>
    <hr />

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <br><br>

    @foreach ($invernaderos as $invernadero)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{$invernadero->nombre}}</h5>
                <p class="card-text"><strong>ID:</strong> {{$invernadero->id}}</p>
                <p class="card-text"><strong>Longitud:</strong> {{$invernadero->longitud}}</p>
                <p class="card-text"><strong>Latitud:</strong> {{$invernadero->latitud}}</p>
                <p class="card-text"><strong>Ancho:</strong> {{$invernadero->ancho}}</p>
                <p class="card-text"><strong>Alto:</strong> {{$invernadero->alto}}</p>
                <p class="card-text"><strong>Largo:</strong> {{$invernadero->largo}}</p>
                <p class="card-text"><strong>Descripción:</strong> {{$invernadero->descripcion}}</p>

                <h6 class="card-subtitle mb-2 text-muted">Camas:</h6>
                <ul>
                    @foreach ($invernadero->camas as $cama)
                        <li>{{$cama->nombre}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
@endsection
