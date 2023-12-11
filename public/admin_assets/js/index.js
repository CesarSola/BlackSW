   
        // Ubicación y claves de API
        const ubicacion = "20.5858,-90.0024"; 
        const app_id = "eed041ed"; 
        const app_key = "f99fe785658ab7515d8522ae6027b937"; 

        // URL de la API
        const apiUrl = `http://api.weatherunlocked.com/api/current/${ubicacion}?app_id=${app_id}&app_key=${app_key}`;

        // Obtener el elemento donde se mostrará el clima
        const elementoClima = document.getElementById('clima');

        // Realizar la solicitud a la API
        fetch(apiUrl)
            .then(response => response.json()) // Trae los datos del api y los convierte en datos json
            .then(data => {
                // Mostrar los datos del clima en el div
                elementoClima.innerHTML = `
                   
                   
                    
                    
                    
                    
      <div class="weather-box">
      
<img src='{{ asset('admin_assets/img/cloud.png') }}'>
      <p>Temperaturaa: ${data.temp_c} °C</p>
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