<?php

  /*
  * Template Name: Saludar
  */
  get_header();
?>
  <main class="contenedor seccion contenido-centrado">
    <span class="icon-avatar-saludar">
      <img  src="\wp-content\themes\tylerdev\img\AVATAR.png" alt="img" width="84px">
    </span>
    <div class="is-8">
      <h2 class="text-center text-negro title-saludar">Hola, gracias por comunicarse. ¿Cómo puedo ayudarte hoy?</h2>
    </div>
    
  <?php
    while(have_posts() ): the_post();  
      
      the_content();
      endwhile;
  ?>
  </main>

   <!-- Boton go top -->
 <div class="go-top-container">
  <div class="go-top-button">
    <i class="fas fa-chevron-up"></i>
  </div>
 </div>

  <?php 
    get_footer();
  ?>