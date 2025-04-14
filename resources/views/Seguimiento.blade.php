<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Seguimiento del Progreso</title>
  
    <link rel="stylesheet" href="{{ asset('css/Header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Seguimiento.css') }}">
</head>

<header>
  <div class="logo-container">
      <a href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html"><img href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html" src="Inclued/lOGO.jpg" alt="Logo" class="logo"></a>
     
  </div>
  <button2 class="hamburger" onclick="toggleHamburgerMenu()">☰</button2>
  <nav class="nav-links">
      <a href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html" class="nav-item">Inicio</a>
      <div class="nav-item modules-item" onclick="toggleModules()">Módulos</div>
      <a href="/mapa-de-suenos/todohh/inicio/link/quienessomos.html" class="nav-item  ">Acerca de </a>
      <a href="/mapa-de-suenos/todohh/inicio/link/contacto.html" class="nav-item ">Contacto</a>
      <div id="modules-indicator" class="modules-indicator"></div>
      
  </nav>
  <div class="nav-right">
     
      
  </div>
  <div class="profile-container">
      <div class="profile-box">
          <a href="#nombre" class="nav-item special-item profile-name">Jhon Sebastian</a>
          <img src="https://media-bog2-2.cdn.whatsapp.net/v/t61.24694-24/464251565_515510564641224_6041331179142873332_n.jpg?ccb=11-4&oh=01_Q5AaICnwz63t7DHwbUzq6FWac1TQ_I-SzEdUmOnmaAtiBuu0&oe=6741C773&_nc_sid=5e03e0&_nc_cat=104" alt="Foto de perfil" class="profile-pic" onclick="toggleProfileMenu()">
          <div id="profile-menu" class="profile-menu">
              <a href="#perfil">Perfil</a>
              <a href="#cerrar-sesion">Cerrar sesión</a>
          </div>
      </div>
  </div>
  <!-- Menú hamburguesa -->
<div id="hamburger-menu" class="hamburger-menu">
<a href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html" class="hamburger-item">Inicio</a>
<a href="#"><div class="hamburger-item" onclick="toggleModulues()">Módulos</div></a>
<!-- Contenedor de módulos (oculto por defecto) -->
<div id="modules-content" class="modules-content" style="display: none;">
  <a href="/mapa-de-suenos/Inicio/Inicio.html"><div class="modulo">Mapa de sueños</div></a>
  <a href="/alimentacion/Inicio/index.html"><div class="modulo">Alimentación</div></a>
  <a href="/musicoterapia/Vistas1.1/bienvenido_a_musicoterapia.html"><div class="modulo">Musicoterapia</div></a>
  <a href="/rutinas-de-ejercicios/inicio/index.html"><div class="modulo">Ejercicios</div></a>
  <a href="/atencion-profesional/USUARIO/Home_Usuario/HomeUsuario.html"><div class="modulo">Atención Profesional</div></a>
</div>
<a href="#perfil" class="hamburger-item">Perfil</a>
</div>
  <!-- Pestaña de módulos -->
  <div id="modules-overlay" class="modules-overlay">
      <div class="module-grid">
         <a href="/mapa-de-suenos/Inicio/Inicio.html"> <div class="module">Mapa de sueños</div></a>
         <a href="/alimentacion/Inicio/index.html"><div class="module">Alimentación</div></a>
          <a href="/musicoterapia/Vistas1.1/bienvenido_a_musicoterapia.html"><div class="module">Musicoterapia</div></a>
          <a href="/rutinas-de-ejercicios/inicio/index.html"><div class="module">Ejercicios</div></a>
          <a href="/atencion-profesional/USUARIO/Home_Usuario/HomeUsuario.html"><div class="module">Atención Profesional</div></a>
      </div>
  </div>
</header>

<body>
    <div class="container">
      <!-- Lado Izquierdo -->
      <div class="left-panel">
        <h1>Objetivo de salud</h1>
        
        <div class="form-section" style="margin-top: 50px;">
            <h2>Descripción del objetivo</h2>
            <textarea id="descripcion" placeholder="Ej: Perder 5kg para verano..."></textarea>
            
            <div class="form-row">
                <div class="form-group">
                    <h2>Fecha objetivo</h2>
                    <input type="date" id="fechaObjetivo">
                </div>
                
                <div class="form-group">
                    <h2>Peso actual (kg)</h2>
                    <input type="number" id="pesoActual" min="20" max="200" step="0.1">
                </div>
                
                <div class="form-group">
                    <h2>Meta de peso (kg)</h2>
                    <input type="number" id="metaPeso" min="20" max="200" step="0.1">
                </div>
            </div>

            <button class="button primary" id="guardar">💾 Guardar Objetivo</button>
            
            <div class="plan-dieta-box" style="margin-top: 100px;">
                <h3>🏅 Plan de dieta recomendado:</h3>
                <textarea id="planDieta" readonly></textarea>
            </div>
        </div>
    </div>

      <div class="right-panel">
        <h1>Seguimiento del Progreso</h1><br>
          <div class="charts-container">
            <div class="chart-box"><canvas id="progressChart"></canvas></div>
          </div>
          <br><br>

          <h3>Historial de avances</h3>
          <ul id="historial">
              <!-- Los elementos se cargarán dinámicamente -->
          </ul>
          <br><br>

          <div class="charts-container">
            <div class="chart-box"><canvas id="goalChart"></canvas></div>
          </div>

          <!-- <div class="buttons">
              <a href="{{ route('inicio') }}" class="button" onclick="volverInicio()">Volver al Inicio</a>
          </div> -->
      </div>
    </div>
</body>

<footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h4>Acerca de Tranquilidad</h4>
        <ul>
            <li><a href="/alimentacion/Inicio/link/quienessomos.html">Acerca de</a></li>
            <li><a href="/alimentacion/Inicio/link/beneficiosdetranquilidad.html">Beneficios de la Tranquilidad</a></li>
            <li><a href="/alimentacion/inicio/link/consejodebienestar.html">Consejos de Bienestar</a></li>
        </ul>
    </div>
      <div class="footer-column">
        <h4>Ayuda y Soporte</h4>
        <ul>
          <li><a href="/alimentacion/inicio/link/contacto.html">Contacto</a></li>
          <li><a href="/alimentacion/inicio/link/sugerencias.html">Sugerencias</a></li>
          <li><a href="/alimentacion/inicio/link/guiadeuso.html">Guía de uso</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h4>Información Legal</h4>
        <ul>
          <li><a href="/alimentacion/inicio/link/terminosycondiciones.html">Términos y condiciones</a></li>
          <li><a href="/alimentacion/inicio/link/politica de privacidad .html">Política de privacidad</a></li>
          <li><a href="/alimentacion/inicio/link/avisolegal.html">Aviso legal</a></li>
        </ul>
      </div>
      
    </div>
    
    <div class="footer-bottom">
      <p>Copyright © 2024 Tranquilidad. Todos los derechos reservados.</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
</footer>

  <script>
      document.addEventListener("DOMContentLoaded", function() {
          // Cargar peso actual del test inicial
          fetch('http://localhost:8000/api/test-bienestar')
              .then(response => response.json())
              .then(data => {
                  if(data.length > 0) {
                      document.getElementById('pesoActual').value = data[0].peso;
                  }
              });
      });
  </script>

    <script src="{{ asset('js/Seguimiento.js') }}"></script>
    <script src="{{ asset('js/Header.js') }}"></script>

</html>
