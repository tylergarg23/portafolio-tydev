<?php

/*
  * Template Name: Mentoria Indagación
  */
get_header();
?>
<main class="contenedor seccion contenido-centrado">
  <span class="icon-avatar-saludar">
    <img src="\wp-content\themes\tylerdev\img\AVATAR.png" alt="img" width="84px">
  </span>
  <div class="is-8">
    <h2 class="text-center text-negro title-saludar">
      <?php
      while (have_posts()): the_post();
        the_content();
      endwhile;
      ?>
    </h2>
  </div>
</main>

<!-- Seccion de Formulario Plan de Proyectos -->
<section class="contenedor seccion sec-blanco section benefits has-text-centered is-medium">

  <div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
      <form id="contactForm" method="POST" class="formulario-contacto">
        <p>
          <label>Nombre</label>
          <input type="text" name="fullname" id="fullname" placeholder="Jhon Done">
        </p>
        <p>
          <label>Correo electrónico</label>
          <input type="email" name="email" id="email" placeholder="correo@correo.com">
        </p>
        <p>
          <label>Tipo de mentoría</label>
          <select class="is-large" name="project_type" id="project_type">
            <option value="" disabled selected hidden></option>
            <option>Mentoría puntual</option>
            <option>Apoyo a la producción</option>
            <option>Aprendizaje a medida</option>
          </select>
        </p>
        <p>
          <label>Resultado deseado</label>
          <select class="is-large" name="budget" id="budget">
            <option value="" disabled selected hidden></option>
            <option>Llenar las brechas de conocimiento</option>
            <option>Mejorar las habilidades de desarrollo</option>
            <option>Dar un paso a la automatización (QA)</option>
            <option>Otro</option>
          </select>
        </p>
        <p class="block">
          <label>Su historia</label>
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