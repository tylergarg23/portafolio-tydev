<?php 

function tylerdev_setup(){
  //Imagenes Destacadas
  add_theme_support('post-thumbnails');

  //Titulos para SEO
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tylerdev_setup');

function tylerdev_menus(){
  register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'tylerdev'),
    'redes-sociales' => __('Redes Sociales', 'tylerdev')
  ));
}

add_action('init', 'tylerdev_menus');

function tylerdev_scripts_styles(){
  // Archivos CSS
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/', array(), '8.0.1'); //Styles Normalize

  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

  // Archivos JS
  wp_enqueue_script('gotopjs', get_template_directory_uri() . '/js/gotop.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'tylerdev_scripts_styles');

/** Funcion para Iconos de Redes Sociales **/
function display_footer_icon_links() {
  ?>
  <div class="footer-links button">
        <a href="mailto:tylergarg@gmail.com" class="icon-link" target="_blank">
          <i class="fas fa-envelope icon email"></i>
          
        </a>
      <a href="https://www.instagram.com/tylergarcia.dev/" class="icon-link" target="_blank">
          <i class="fab fa-instagram icon"></i>
      </a>
      <a href="https://www.linkedin.com/in/tyler-garc%C3%ADa-rodr%C3%ADguez-51838bb9/" class="icon-link" target="_blank">
          <i class="fab fa-linkedin-in icon"></i>
      </a>
  </div>
  <?php
}

// Crear Shortcode

/** Formulario para envio de correos pagina Plan de Proyectos **/



?>