<?php

  /*
  * Template Name: Plan Proyecto
  */
  get_header();
?>
  <main class="contenedor seccion contenido-centrado">
    <span class="icon-avatar-saludar">
      <img  src="\wp-content\themes\tylerdev\img\AVATAR.png" alt="img" width="84px">
    </span>
    <div class="is-8">
      <h2 class="text-center text-negro title-saludar">Estoy emocionado de conocer su proyecto. ¿Listo para empezar?</h2>
    </div>
  </main>

  <!-- Seccion de Formulario Plan de Proyectos --> 
  <section class="contenedor seccion sec-blanco section benefits has-text-centered is-medium">
    
    <div class="contact-wrapper animated bounceInUp">
      <div class="contact-form">
          <form action="procesar_formulario.php" id="contactForm" method="POST" class="formulario-contacto">
              <p>
                <label>Nombre</label>
                <input type="text" name="fullname" id="fullname" placeholder="Jhon Done">
              </p>
              <p>
                <label>Correo electrónico</label>
                <input type="email" name="email" id="email" placeholder="correo@correo.com">
              </p>
              <p>
                <label>Tipo de proyecto</label>
                <select class="is-large" name="project_type" id="project_type" >
                  <option value="" disabled selected hidden></option>
                  <option>Landing page</option>
                  <option>Web app</option>
                  <option>Mobile app</option>
                </select>
              </p>
              <p>
                <label>Presupuesto</label>
                <select class="is-large" name="budget" id="budget" >
                  <option value="" disabled selected hidden></option>
                  <option>S/850 - S/2,000</option>
                  <option>S/2,300 - S/4,800</option>
                  <option>S/5,000+</option>
                </select>
              </p>
              <p class="block">
                <label>Detalles adicionales</label> 
                <textarea name="message" id="message" rows="3" placeholder="Tu mensaje"></textarea>
              </p>
              <p class="block">
                <input class="button-form" type="submit" value="Enviar">
              </p>

              <!-- Mensajes de error y éxito -->
              <div id="error-message" class="error-message" style="display: none;"></div>
              <div id="success-message" class="success-message" style="display: none;"></div>
          </form>
      </div>
    </div>

  </section>


    <!-- Boton go top -->
 <div class="go-top-container">
  <div class="go-top-button">
    <i class="fas fa-chevron-up"></i>
  </div>
 </div>

 <?php 
    get_footer();
  ?>