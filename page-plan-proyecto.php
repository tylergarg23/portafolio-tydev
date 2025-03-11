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
          <form action="">
              <p>
                <label>Nombre</label>
                <input type="text" name="fullname">
              </p>
              <p>
                <label>Correo electrónico</label>
                <input type="email" name="email">
              </p>
              <p>
                <label>Tipo de proyecto</label>
                <select class="is-large" name="project type" required="">
                  <option value="0" disabled="" selected="" hidden=""> </option>
                  <option>Responsive design</option>
                  <option>Web app</option>
                  <option>Mobile app</option>
                </select>
              </p>
              <p>
                <label>Presupuesto</label>
                <select class="is-large" name="budget" required="">
                  <option value="0" disabled="" selected="" hidden=""> </option>
                  <option>$5,000 - $10,000</option>
                  <option>$10,000 - $25,000</option>
                  <option>$25,000+</option>
                </select>
              </p>
              <p class="block">
                <label>Detalles adicionales</label> 
                <textarea name="message" rows="3"></textarea>
              </p>
              <p class="block">
                <input class="button-form" type="submit" value="Enviar">
              </p>
          </form>
      </div>
    </div>


  </section>