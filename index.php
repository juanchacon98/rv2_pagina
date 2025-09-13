<?php
// index.php
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
  <!-- Título ~60 caracteres -->
  <title>RV2VEN – Recorridos Virtuales 360 en Venezuela | Tours Interactivos</title>
  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  <!-- Meta Descripción ~120-160 caracteres -->
  <meta name="description" content="RV2VEN, primera empresa en Venezuela especializada en recorridos virtuales 360°. Exhibe tus espacios y atrae más clientes en todo el país." />
  
  <meta name="keywords" content="recorridos virtuales, tours 360, casas, museos, gimnasios, venezuela" />
  <meta name="author" content="RV2VEN" />
  <meta name="robots" content="index,follow" />

  <!-- Favicon y Apple Touch Icon -->
  <link rel="icon" type="image/png" href="images/logo_rv2.png" />
  <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />

  <!-- boxicon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- CSS Principal + Cache Busting -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=<?php echo filemtime('assets/css/main.css'); ?>" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css?v=<?php echo filemtime('assets/css/noscript.css'); ?>" /></noscript>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KS7X142MYL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-KS7X142MYL');
  </script>
  <!-- Fin Google Analytics -->

  <!-- Microsoft Clarity -->
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "pzphwdgptn");
  </script>
  <!-- Fin Microsoft Clarity -->

  <!-- Schema Markup -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "RV2VEN",
    "description": "Servicios profesionales de recorridos virtuales 360° y fotografía 360 para casas, museos, gimnasios y más en Venezuela.",
    "url": "https://www.rv2ven.com",
    "telephone": "+584143357226",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Baruta",
      "addressLocality": "Caracas",
      "addressRegion": "Caracas",
      "postalCode": "1030",
      "addressCountry": "VE"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "10.481207",
      "longitude": "-66.859671"
    },
    "openingHours": "Mo-Su 09:00-20:00",
    "sameAs": [
      "https://www.linkedin.com/in/rv2ven",
      "https://www.instagram.com/rv2ven",
      "https://wa.me/584143357226",
      "mailto:juanchacon@rv2ven.com"
    ]
  }
  </script>
</head>
<body class="is-preload landing">

    <div class="menu">
      <ul>
        <li><a href="index.php">Hogar</a></li>
        <li><a href="servicios-recorridos-virtuales.php">Servicios</a></li>
        <li><a href="proyectos.php">Proyectos</a></li>
        <li><a href="#about">Acerca de</a></li>
        <li><a href="#five">Contacto</a></li>
      </ul>
    </div>

    <div class="close">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="30"
        height="30"
        color="#ffffff"
        fill="none"
      >
        <path
          d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999"
          stroke="currentColor"
          stroke-width="2.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </div>

    <!-- Encabezado -->
    <nav>
      <div class="logo"><a href="index.php"><img src="images/dark_blur_logo.png" alt="rv2ven"></a></div>
      <div class="nav">
        <ul>
          <li class="nav_links"><a href="index.php">Hogar</a></li>
          <li class="nav_links"><a href="servicios-recorridos-virtuales.php">Servicios</a></li>
          <li class="nav_links"><a href="proyectos.php">Proyectos</a></li>
          <li class="nav_links"><a href="#about">Acerca de</a></li>
          <li>
            <button class="contact_btn">
            <a class="contact_link" href="#five">
              Contacto
            </a>
        </button>
      </li>
      <li class="menu_icon">
      <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="30"
            height="30"
            color="#0000ee"
            fill="none"
          >
            <path
              d="M4 5L20 5"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M4 12L20 12"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M4 19L20 19"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
      </li>
        </ul>
      </div>
    </nav>

    <!---- Hero section ----->
    <section class="hero">
     <div class="hero_content">
      <h1>Recorridos Virtuales Profesionales</h1>
      <p>Impulsa tus espacios en Venezuela: casas, museos, gimnasios y mucho más.</p>
      <button class="hero_btn">
      <a href="#five">Empieza ya</a>
      </button>
     </div>
    </section>

    <!---- Sección 2 ------>
    <section class="highlight">

      <div class="upper_cont">
        <h2>Destaca tus propiedades</h2>
        <p>Ofrece visitas 360° a potenciales clientes sin salir de casa.</p>
      </div>

      <div class="lower_cont">

        <div class="highlight_card card1">
          <div class="card_img">
            <img src="images/modern-office-space-interior.jpg" alt="3d house tour">
          </div>
          <h3>
            Más que casas
          </h3>
          <p>
            Recorridos para museos, gimnasios, hoteles, oficinas y cualquier espacio.
          </p>
        </div>

        <div class="highlight_card card2">
          <div class="card_img">
            <img src="images/dispos.webp" alt="mobile devices">
          </div>
          <h3>
          Calidad y simplicidad
          </h3>
          <p>
          Diseños rápidos, visuales y compatibles con dispositivos móviles.
          </p>
        </div>

      </div>

    </section>

    <!-- section 3 -->
     <section class="tour">
        <div class="upper_content">
          <h2>Ejemplos de Tours Interactivos</h2>
          <p class="content_para">Descubre cómo funcionan nuestros recorridos virtuales interactivos.
          </p>
        </div>
        <div class="lower_content">
          <div class="tour_container">
            <div class="upper_container">
              <div class="iframe_container">
                <iframe src="https://rv2ven.com/tours/CIV/" allowfullscreen></iframe>
                 <div class="details">
                  <p>CIV</p>
                  <button class="new_tab_button">
                    <a href="https://rv2ven.com/tours/CIV/" target="_blank">Abrir en otra pestaña</a>
                  </button>
                 </div>
              </div>

              <div class="iframe_container">
                <iframe src="https://rv2ven.com/tours/Ejemplo%20de%20casa/" allowfullscreen></iframe>
                 <div class="details">
                  <p>Ejemplo De Casa</p>
                  <button class="new_tab_button">
                    <a href="https://rv2ven.com/tours/Ejemplo%20de%20casa/" target="_blank">Abrir en otra pestaña</a>
                  </button>
                 </div>
              </div>

              <div class="iframe_container">
                <iframe src="https://rv2ven.com/tours/CRC-GYM" allowfullscreen></iframe>
                 <div class="details">
                  <p>CRC-GYM</p>
                  <button class="new_tab_button">
                    <a href="https://rv2ven.com/tours/CRC-GYM" target="_blank">Abrir en otra pestaña</a>
                  </button>
                 </div>
              </div>

              <!-- Movido aquí para ser la 4ª celda -->
              <div class="iframe_container car_tour">
                <!-- el script de CloudPano se mantine dentro de la tarjeta -->
                <div class="cloudpano_wrapper">
                  <script id="cloudpano-script" type="text/javascript" async data-short="phE4sYEanMEzJ" data-path="tours" data-is-self-hosted="false" width="width" height="height" src="https://app.cloudpano.com/public/shareScript.js"></script>
                </div>
                 <div class="details">
                  <p>Ventas de Carros</p>
                  <button class="new_tab_button">
                    <a href="https://rv2ven.com/tours/" target="_blank">Abrir en otra pestaña</a>
                  </button>
                 </div>
              </div>

            </div>   

          </div>
        </div>
     </section>

     <!-- section 4 -->
      <section id="about" class="about">
        <h2 class="main_about_heading">¿Qué es un Recorrido Virtual 360°?</h2>
        <div class="about_container">
          <p class="upper_para">
          Un recorrido virtual 360° es una experiencia inmersiva que
            permite a tus clientes conocer tus espacios desde cualquier
            dispositivo. Al ser la primera empresa en Venezuela
            <strong>especializada únicamente en este tipo de recorridos</strong>,
            hemos perfeccionado nuestro método para que obtengas un
            resultado profesional y envolvente. 
          </p>
          <p class="lower_para">
          Estos tours no son simples fotos estáticas, sino un entorno
            navegable que brinda seguridad y transparencia a quienes buscan
            conocer tu establecimiento antes de visitarlo en persona.
          </p>
  
          <h2 class="advantages_heading">Ventajas para tus clientes</h2>
          <ul class="advantages">
          <li><strong>Tiempo y comodidad:</strong> Evitan desplazamientos
                innecesarios y pueden “visitar” el sitio en segundos.</li>
            <li><strong>Confianza total:</strong> Al mostrar el espacio real,
                generas mayor credibilidad.</li>
            <li><strong>Interactividad:</strong> La navegación 360° invita
                a explorar cada rincón, lo que despierta curiosidad y
                emoción.</li>
          </ul>
        </div>
      </section>


      <!-- section 5 -->
       <section class="location">
          <div class="left_side">
          <div id="map"></div>
          </div>
          <div class="right_side">
          <h2 >¿Dónde Trabajamos?</h2>
        <p>
          Aunque estamos ubicados en <strong>Caracas</strong>, ofrecemos
          nuestros servicios en toda <strong>Venezuela.</strong> No importa
          si tu proyecto está en Maracaibo, Valencia, Barquisimeto u otra
          región: coordinamos la logística para que el recorrido virtual
          cumpla con la más alta calidad.
        </p>
          </div>
       </section>
       

      <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
      <script>
          const map = L.map('map').setView([10.481207, -66.859671], 12);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              maxZoom: 19
          }).addTo(map);
        
          const marker = L.marker([10.481207, -66.859671]).addTo(map)
              .bindPopup('<b>RV2VEN</b>')
              .openPopup();
      </script>

      <!-- section 6 -->
       <section class="testimonial_section">
        <h2>Testimonios</h2>
        <div class="testimonial_container">
        <div class="slider">
          <div class="testimonial">
            <div class="user">
              <div class="pfp">
                <img src="images/fabrina.jpg" alt="customer">
              </div>
              <div class="testimonial_details">
                <div class="name">Fabiana Moreau</div>
                <div class="stars">
                  ★ ★ ★ ★ ★
                </div>
              </div>
            </div>
            <div class="review">
              <p>Contraté el servicio de recorridos virtuales para el evento de mi empresa y quedé impresionado. La experiencia fue única e innovadora, permitiendo a los asistentes explorar cada detalle de manera interactiva y envolvente. La tecnología de punta y el equipo profesional hicieron que el evento fuera memorable. ¡Recomiendo este servicio a cualquiera que quiera sorprender y deleitar a sus invitados!</p>
            </div>
          </div>


          <!-- 1. In the img tag, add the image location in the src attribut of the customer -->

          <!-- 2. In the div with class name, add the customer name -->

          <!-- 3. In the p tag under div with class review, add the customer review there. -->

          <!-- 4. To add more testimonials, just copy and paste the div with class "testimonial" -->

          <!-- <div class="testimonial">
            <div class="user">
              <div class="pfp">
                <img src=" customer picture " alt="customer icon">
              </div>
              <div class="testimonial_details">
                <div class="name"> customer name </div>
                <div class="stars">
                  ★ ★ ★ ★ ★
                </div>
              </div>
            </div>
            <div class="review">
              <p>
                customer review
              </p>
            </div>
            </div>
          </div> -->

          <!-- Navigation Buttons -->
          <button class="nav-button prev">&#10094;</button>
          <button class="nav-button next">&#10095;</button>
        </div>

       </section>

       <!-- section 7 -->
        <section class="faq">
          <h2 class="main_heading_faq">Preguntas Frecuentes (FAQ)</h2>
          <div class="faq_container">
            <div class="sep"></div>
            <h3>1. ¿Cuánto tarda un recorrido virtual?</h3>
            <p>Depende del tamaño y complejidad del lugar. Un espacio pequeño puede completarse en pocos días, mientras que uno más grande podría requerir más tiempo para la captura y la edición.</p>
            <div class="sep"></div>
            <h3>2. ¿Cómo es el proceso de contratación?</h3>
            <p>Normalmente gestionamos la información a través de llamadas telefónicas o correo electrónico para brindar un trato ágil y profesional. Sin embargo, si lo prefiere, podemos coordinar reuniones presenciales para planificar la visita y resolver cualquier detalle. De forma general:</p>
            <ol>
          <li><strong>Primer contacto:</strong> Usted nos describe su
              espacio y objetivos.</li>
          <li><strong>Presupuesto y fechas:</strong> Definimos el costo
              estimado y programamos la sesión de captura.</li>
          <li><strong>Sesión 360°:</strong> Nuestro equipo se traslada y
              realiza las tomas necesarias del lugar.</li>
          <li><strong>Edición y entrega:</strong> Unimos todo en un
              recorrido virtual y le proporcionamos el enlace o código
              embebible.</li>
        </ol>
        <p class="last_para">Nos adaptamos a su forma de comunicación favorita, ya sea por teléfono, email o reuniones cara a cara.</p>
        <div class="sep"></div>
          </div>
        </section>

    <!-- Sección 8: Contacto -->
    <section id="five" class="contact">
          <div class="contact_content">
            <h2>Contáctanos</h2>
            <p>Solicita tu recorrido virtual y recibe asesoría gratuita.</p>
          </div>
          <div class="contact_form_container">
            <form method="POST" action="procesar_contacto.php" id="demo-form" class="cta">
              
              <div class="upper_inputs">
            <!-- Nombre -->
              <input class="name_input" type="text" name="nombre" id="nombre" placeholder="Tu Nombre" required />
            <!-- Email -->
              <input class="email_input" type="email" name="email" id="email" placeholder="Tu Correo Electrónico" required />
          </div>

          <div class="mid_inputs">
            <!-- Teléfono -->
              <input class="phone_input" type="tel" name="telefono" id="telefono" placeholder="Tu Número Telefónico" pattern="(\+?\d{1,3}[- ]?)?\d{10}" title="Formato válido: +584242889840 o 04242889840" required />
              <small>Formato: 10 dígitos sin espacios ni guiones, o con prefijo internacional.</small>
          </div>

          <div class="lower_input">
            <!-- Servicio -->
              <textarea class="message_input" name="servicio" id="servicio" placeholder="Describe el servicio que te interesa" required></textarea>
            <!-- Honeypot -->
            <div class="col-12" style="display: none;">
              <label for="website">Website:</label>
              <input type="text" name="website" id="website" />
            </div>
          </div>
          <!-- Botón Enviar -->
           <!-- Botón Enviar y Calendly juntos -->
           <div class="button_container">
            <button type="submit" class="send_btn">Enviar</button>
            <a href="https://calendly.com/juanchacon0298/30min" target="_blank" class="send_btn">Agendar una llamada</a>
          </div>
          
        </form>
          </div>

    </section>

    

    <!-- Footer -->
    <footer id="footer">
      <ul class="icons">
        <li><a href="https://www.linkedin.com/in/rv2ven" class=""><i class='bx bxl-linkedin'></i></a></li>
        <li><a href="https://www.instagram.com/rv2ven" class=""><i class='bx bxl-instagram'></i></a></li>
        <li><a href="https://wa.me/584143357226" class=""><i class='bx bxl-whatsapp'></i></a></li>
        <li><a href="/cdn-cgi/l/email-protection#d6bca3b7b8b5beb7b5b9b896a4a0e4a0b3b8f8b5b9bb" class=""><i class='bx bxs-envelope'></i></a></li>
      </ul>
      <div class="copyright">
        &copy; RV2VEN. Todos los derechos reservados.
      </div>
    </footer>

  <!-- Scripts -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js?v=1737566328"></script>
  <script src="assets/js/jquery.scrolly.min.js?v=1737566329"></script>
  <script src="assets/js/jquery.dropotron.min.js?v=1737566328"></script>
  <script src="assets/js/jquery.scrollex.min.js?v=1737566328"></script>
  <script src="assets/js/browser.min.js?v=1737566329"></script>
  <script src="assets/js/breakpoints.min.js?v=1737566328"></script>
  <script src="assets/js/util.js?v=1737566328"></script>
  <script src="assets/js/main.js?v=1737566329"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91a068c77b9bc7aa","version":"2025.1.0","r":1,"token":"a117fc3d2a4e46b096ccd1631cd9a31d","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
<script>
const slider = document.querySelector('.slider');
const testimonials = document.querySelectorAll('.testimonial');
const prevButton = document.querySelector('.nav-button.prev');
const nextButton = document.querySelector('.nav-button.next');

let currentIndex = 0;
let startX = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let isDragging = false;

function updateSlider() {
  const slideWidth = testimonials[0].clientWidth;
  slider.style.transition = 'transform 0.5s ease-in-out';
  slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

// Button Navigation
nextButton.addEventListener('click', () => {
  if (currentIndex < testimonials.length - 1) {
    currentIndex++;
  } else {
    currentIndex = 0; // Loop back to the first
  }
  updateSlider();
});

prevButton.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = testimonials.length - 1; // Loop back to the last
  }
  updateSlider();
});

// Touch Events for Mobile
slider.addEventListener('touchstart', touchStart);
slider.addEventListener('touchmove', touchMove);
slider.addEventListener('touchend', touchEnd);

function touchStart(event) {
  startX = event.touches[0].clientX;
  isDragging = true;
  slider.style.transition = 'none'; // Disable transition during drag
}

function touchMove(event) {
  if (!isDragging) return;
  const currentX = event.touches[0].clientX;
  const diff = currentX - startX;
  slider.style.transform = `translateX(${currentTranslate + diff}px)`;
}

function touchEnd() {
  isDragging = false;
  const slideWidth = testimonials[0].clientWidth;
  const movedBy = currentTranslate - parseInt(slider.style.transform.split('(')[1]);

  if (movedBy > 100 && currentIndex < testimonials.length - 1) {
    currentIndex++;
  } else if (movedBy < -100 && currentIndex > 0) {
    currentIndex--;
  }

  updateSlider();
  currentTranslate = -currentIndex * slideWidth;
}

// Initial setup
updateSlider();
</script>

<script>
  // Function to update the script attributes based on screen width
  function updateScriptAttributes() {
    const script = document.getElementById('cloudpano-script');
    const splashScreen = document.getElementById('cp-splash-screen-phE4sYEanMEzJ');
    let width, height;

    if (window.innerWidth <= 450) {
      width = '300px';
      height = '300px';
    } else if (window.innerWidth <= 570) {
      width = '400px';
      height = '300px';
    } else {
      width = '500px';
      height = '400px';
    }

    script.setAttribute('width', width);
    script.setAttribute('height', height);

    // Update the splash screen dimensions if it exists
    if (splashScreen) {
      splashScreen.style.width = width;
      splashScreen.style.height = height;
    }
  }

  // Function to observe changes in the DOM and update the splash screen dimensions
  function observeSplashScreen() {
    const observer = new MutationObserver((mutations) => {
      mutations.forEach((mutation) => {
        if (mutation.addedNodes.length) {
          mutation.addedNodes.forEach((node) => {
            if (node.id === 'cp-splash-screen-phE4sYEanMEzJ') {
              updateScriptAttributes();
            }
          });
        }
      });
    });

    observer.observe(document.body, { childList: true, subtree: true });
  }

  // Initial check when DOM is fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    setTimeout(updateScriptAttributes, 100);
    observeSplashScreen();
  });

  // Add event listener to update the attributes on window resize
  window.addEventListener('resize', updateScriptAttributes);
</script>

</body>
</html>