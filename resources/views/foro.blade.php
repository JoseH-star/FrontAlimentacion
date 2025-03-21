<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/Footer.css">
    <link rel="stylesheet" href="css/body-foro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/foro.css">
    <title>Foro</title>

    <link rel="stylesheet" href="{{ asset('css/Header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body-foro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/foro.css') }}">
</head>
<header>
    <div class="logo-container">
        <a href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html"><img href="/inicio-de-sesion/Modulo-iniciar-sesion/home/home.html" src="inclued/lOGO.jpg" alt="Logo" class="logo"></a>
       
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
               <a href="/inicio-de-sesion/Modulo-iniciar-sesion/usuario/usuario.html">Perfil</a>
              <a href="/inicio-de-sesion/Modulo-iniciar-sesion/configuracion/configuracion.html">configuracion</a>
              <a href="/inicio-de-sesion/Modulo-iniciar-sesion/login/login.html">Cerrar sesión</a>
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
    <main class="container">
        <!-- Tarjeta 1 -->
        <div class="card">
            <div class="profile">
                <img src="../inclued/usuaria1.png" alt="Elisabeth May">
                <div>
                    <p class="name">Elisabeth May</p>
                    <p class="time">⏰ Hace 6 horas</p>
                </div>
            </div>
            <p>Cada pequeño cambio suma. Comer más frutas es una excelente decisión, tu cuerpo te lo agradecerá.</p>
    
            <div class="actions-right">
                <button class="like-button" onclick="incrementLike(this)">❤️ <span class="like-count">0</span></button>
                <button class="edit-button">📝</button>
                <button class="delete-button">🚮</button>
            </div>
    
            <div class="reactions">
                <img src="https://i.pravatar.cc/30?img=1" alt="User">
                <img src="https://i.pravatar.cc/30?img=2" alt="User">
                <span>👍 +11</span>
            </div>
    
            <div class="comment-container">
                <button class="addCardBtn">💭</button>
                <div class="commentContainer"></div>
            </div>
        </div>
    
        <!-- Tarjeta 2 -->
        <div class="card">
            <div class="profile">
                <img src="../inclued/usuaria2.png" alt="Carlos Ruiz">
                <div>
                    <p class="name">Carlos Ruiz</p>
                    <p class="time">⏰ Hace 3 horas</p>
                </div>
            </div>
            <p>Beber suficiente agua a lo largo del día es clave para mantenernos saludables y con energía.</p>
    
            <div class="actions-right">
                <button class="like-button" onclick="incrementLike(this)">❤️ <span class="like-count">0</span></button>
                <button class="edit-button">📝</button>
                <button class="delete-button">🚮</button>
            </div>
    
            <div class="reactions">
                <img src="https://i.pravatar.cc/30?img=3" alt="User">
                <img src="https://i.pravatar.cc/30?img=4" alt="User">
                <span>👍 +7</span>
            </div>
    
            <div class="comment-container">
                <button class="addCardBtn">💭</button>
                <div class="commentContainer"></div>
            </div>
        </div>
    
        <!-- Tarjeta 3 -->
        <div class="card">
            <div class="profile">
                <img src="../inclued/Usuario3.png" alt="Ana Gómez">
                <div>
                    <p class="name">Ana Gómez</p>
                    <p class="time">⏰ Hace 1 hora</p>
                </div>
            </div>
            <p>Las proteínas son esenciales para la reparación y crecimiento muscular. Asegúrate de incluirlas en tu dieta.</p>
    
            <div class="actions-right">
                <button class="like-button" onclick="incrementLike(this)">❤️ <span class="like-count">0</span></button>
                <button class="edit-button">📝</button>
                <button class="delete-button">🚮</button>
            </div>
    
            <div class="reactions">
                <img src="https://i.pravatar.cc/30?img=5" alt="User">
                <img src="https://i.pravatar.cc/30?img=6" alt="User">
                <span>👍 +15</span>
            </div>
    
            <div class="comment-container">
                <button class="addCardBtn">💭</button>
                <div class="commentContainer"></div>
            </div>
        </div>
    
        <!-- Tarjeta 4 -->
        <div class="card">
            <div class="profile">
                <img src="../inclued/Usuario4.png" alt="Sofía Martínez">
                <div>
                    <p class="name">Sofía Martínez</p>
                    <p class="time">⏰ Hace 30 minutos</p>
                </div>
            </div>
            <p>Incluir más verduras en tus comidas mejora tu digestión y aporta vitaminas esenciales.</p>
    
            <div class="actions-right">
                <button class="like-button" onclick="incrementLike(this)">❤️ <span class="like-count">0</span></button>
                <button class="edit-button">📝</button>
                <button class="delete-button">🚮</button>
            </div>
    
            <div class="reactions">
                <img src="https://i.pravatar.cc/30?img=7" alt="User">
                <img src="https://i.pravatar.cc/30?img=8" alt="User">
                <span>👍 +9</span>
            </div>
    
            <div class="comment-container">
                <button class="addCardBtn">💭</button>
                <div class="commentContainer"></div>
            </div>
        </div>
    </main>
    
 <!-- Barra lateral izquierda con opción para crear publicación -->
 <div class="sidebar-left">
     <div class="create-post-section">
         <p class="create-post-text">Comparte tus experiencias</p>
         <button id="createPostBtn" class="create-button" onclick="addNewCard()">+</button>
     </div>
 </div>
 
<!-- Modal para nueva publicación -->
<div id="postModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Nueva publicación</h3>
            <span class="close-modal">&times;</span>
        </div>
        <div class="modal-body">
            <textarea id="newPostContent" placeholder="¿Qué quieres compartir hoy?"></textarea>
        </div>
        <div class="modal-footer">
            <button id="publishPostBtn">Publicar</button>
        </div>
    </div>
</div>



<style>
    .card {
        margin-top: 25px;
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
    }
    .like-button {
        margin: 8px;
        display: flex;
        align-items: center;
        background: none;
        border: none;
        cursor: pointer;
        font-size: 16px;
        padding: 5px 10px;
        transition: transform 0.2s;
    }
    .like-button:active {
        transform: scale(1.1);
    }
    .like-button .heart {
        color: red;
        font-size: 22px;
        margin-right: 5px;
        transition: transform 0.2s;
    }
</style>

<script>
    function incrementLike(button) {
        let countSpan = button.querySelector(".like-count");
        let likes = parseInt(countSpan.textContent, 10);
        likes++;
        countSpan.textContent = likes;
    }
</script>

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
    
    
    <div class="foteor-bottom">
      <p>Copyright © 2024 Tranquilidad. Todos los derechos reservados.</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        
      </div>
    </div>
</footer>

    <script src="{{ asset('js/foro.js') }}"></script>
    <script src="{{ asset('js/Header.js') }}"></script>


</html>
