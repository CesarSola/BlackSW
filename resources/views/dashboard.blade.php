@extends('layouts.app')
  
@section('title')
  
@section('contents')
 

  </div>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('./admin_assets/css/style.css') }}" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="clima" id="clima">
            <div class="icon-container">
              <img src="{{ asset('admin_assets/img/cloud.png') }}" class="icon">
            </div>
            <script >
         
                // Ubicación y claves de API
                const ubicacion = "20.5858,-90.0024"; 
                const app_id = "eed041ed"; 
                const app_key = "f5aae82e8f0b31450a8c860832b43379"; 
        
                // URL de la API
                
        
                // Obtener el elemento donde se mostrará el clima
                const elementoClima = document.getElementById('clima');
        
                // Realizar la solicitud a la API
                fetch(`http://api.weatherunlocked.com/api/current/${ubicacion}?app_id=${app_id}&app_key=${app_key}`)
                    .then(response => response.json()) // Trae los datos del api y los convierte en datos json
                    .then(data => {
                        // Mostrar los datos del clima en el div
                        elementoClima.innerHTML = `     
                  <div class="icon-container">
                    <img src="{{ asset('admin_assets/img/cloud.png') }}" class="icon">
                  </div>
                  <p>Temperatura: ${data.temp_c} °C</p>
                  <p>Descripción: ${data.wx_desc}</p>
                </div>
                
          <div class="weather-details">
              <div class="humidity">
                  <i class="fa-solid fa-water"></i>
                  <div class="text">
                      <span></span>
                      <p>Humedad: ${data.humid_pct}%</p>
                  </div>
              </div>
              <div class="wind">
                  
                  <div class="text">
                      <span></span>
                      <i class="fa-solid fa-wind"></i><p>Velocidad del Viento: ${data.windspd_kts} nudos</p>
                  </div>
              </div>
                        `;
                    })
                    .catch(error => {
                        elementoClima.innerHTML = 'Error al obtener los datos del clima.';
                        console.error('Error al obtener los datos del clima:', error);
                    });
            </script>
            
          </div>
        </div>
        <div class="col-md-6">
          <div style="width: 100%; height: 300px; padding: 10px;" id="piechart"></div>
        </div>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/7c8801c017.js" crossorigin="anonymous"></script>
    <script>
      // ... (código JavaScript omitido para mayor claridad)
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/654a8138a84dd54dc4898660/1helghhjp';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Largo', 'Metros'],
          ['Cama1', 10],
          ['Cama2', 16]
        ]);

        var options = {
          title: 'Largo de camas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div class="columns has-text-centered">
        <div class="column"><i id="icon-temp" class="fa fa-thermometer-half" style="font-size: 4rem;"></i></div>
        <h5 class="is-size-1" id="temperature">Cargando...</h5>
        <h5 class="is-size-1" id="lastReading"></h5>
          </div>
<script>
  let lectura = 0;

  window.onload = function getTemperatureByCity() {
    // Realizar una solicitud usando fetch() para obtener la temperatura de la ciudad
    fetch("https://api.openweathermap.org/data/2.5/weather?q=maxcanu&appid=ddfa71bccb894fb51eb436a61f9ea444")
      .then(response => response.json())
      .then(data => {
        const temperature = data.main.temp;
        // La temperatura se proporciona en kelvin, así que conviértela a Celsius
        const temperatureCelsius = (temperature - 273.15).toFixed(2);

        const elementTemp = document.getElementById("temperature");
        const iconTemp = document.getElementById("icon-temp");

        elementTemp.textContent = ${temperatureCelsius} °C;

        if (temperatureCelsius < 18 ) {
          iconTemp.style.color = 'rgba(51, 121, 156, 0.8)';
        }
        else if (temperatureCelsius >= 18 && temperatureCelsius < 30 ) {
          iconTemp.style.color = 'rgba(156, 51, 156, 0.8)';
        }
        else if (temperatureCelsius >= 30) {
          iconTemp.style.color = 'rgba(193, 12, 12, 0.8)';
        }
      })
      .catch(error => {
        console.error(error);
        console.log("Error al cargar la temperatura");
        elementTemp.textContent = "Error al cargar la temperatura";
        iconTemp.style.color = 'rgba(21, 20, 21, 0.8)';
      });
  }

  function actualizarLectura() {
      lectura++;
      document.getElementById("lastReading").innerHTML = Última lectura: Hace <strong class='has-text-black'> ${lectura} </strong> segundo(s);
      setTimeout(actualizarLectura, 1000); // Actualizar cada segundo
  }

  actualizarLectura();
</script>
<div id="player" style="margin: 0 auto; text-align: center;"></div>

        <script>

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '480',
            width: '640',
            videoId: 'PJhEGtKlexo?si=ytP-BgE0IC1oQZOw',
        });
    }
        </script>
        <script src="https://www.youtube.com/iframe_api"></script>
<script>
    fetch(
        'https://www.googleapis.com/youtube/v3/search?key=AIzaSyAUgj8du6DkZFG7M03_TZZ5aaeIU9s6Cko&part=snippet&q=Terminator'
    )
    .then(response => response.json())
    .then(data => {
        const videos = data.items;
        videos.forEach(video => {
            const title = video.snippet.title;
            const videoId = video.id.videoId;

            console.log('${title}: https://www.youtube.com/watch?v=${PJhEGtKlexo?si=ytP-BgE0IC1oQZOw}');
        });
    })
    .catch(error => {
        console.error('Error al buscar videos: ', error);
    });
    </script>
    <!-- ... (código JavaScript y scripts adicionales) ... -->
    <div class="image">
        <img id="usuario-imagen" src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><span id="usuario-nombre"></span></a>
        </div>
<!-- API de RandomUser -->
<script>
    function cargarUsuarioAleatorio() {
      fetch('https://randomuser.me/api/')
        .then(response => response.json())
        .then(data => {
            const usuario = data.results[0];
            const nombre = usuario.name.first;
            // const apellido = usuario.name.last;
            // const correo = usuario.email;
            const imagen = usuario.picture.large;
  
            document.getElementById('usuario-nombre').textContent = nombre;
            // document.getElementById('usuario-apellido').textContent = apellido;
            // document.getElementById('usuario-correo').textContent = correo;
            document.getElementById('usuario-imagen').src = imagen;
        })
        .catch(error => console.error('Error al cargar usuario: ', error));
      }
    // Llamar a la función al cargar la página
    window.onload = cargarUsuarioAleatorio;
  </script>

</body>
@endsection
