<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="contenedor barra-navegacion">
      <div class="logo">
        <a href="<?php echo site_url('/');?> ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo_tyg.svg" alt="logotipo">
        </a>
      </div>

      <?php 
        $args = array(
          'theme_location' => 'menu-principal',
          'container' => 'nav',
          'container_class' => 'menu-principal'
        );

        wp_nav_menu($args);
      
      ?>
    </div>
  </header>