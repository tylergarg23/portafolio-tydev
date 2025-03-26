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
  wp_enqueue_script('contactplnpytojs', get_template_directory_uri() . '/js/contact-plans-pyto.js', array(), '1.0.0', true);
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

// Manejo del formulario mediante AJAX
add_action('wp_ajax_enviar_formulario', 'procesar_formulario');
add_action('wp_ajax_nopriv_enviar_formulario', 'procesar_formulario');

function procesar_formulario() {
    // Validar que los datos fueron enviados
    if (!isset($_POST["fullname"], $_POST["email"], $_POST["project_type"], $_POST["budget"], $_POST["message"])) {
        wp_send_json_error(["message" => "Faltan datos en el formulario."]);
    }

    // Limpiar los datos
    $nombre = sanitize_text_field($_POST["fullname"]);
    $email = sanitize_email($_POST["email"]);
    $tipo_proyecto = sanitize_text_field($_POST["project_type"]);
    $presupuesto = sanitize_text_field($_POST["budget"]);
    $mensaje = sanitize_textarea_field($_POST["message"]);

    // Validar email
    if (!is_email($email)) {
        wp_send_json_error(["message" => "Correo electrónico inválido."]);
    }

    // Configurar el correo
    $to = "tylergarg@gmail.com"; // Cambia esto a tu email
    $subject = "Nuevo mensaje de contacto";
    $body = "
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Correo:</strong> $email</p>
        <p><strong>Proyecto:</strong> $tipo_proyecto</p>
        <p><strong>Presupuesto:</strong> $presupuesto</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
    ";
    $headers = ['Content-Type: text/html; charset=UTF-8', 'From: ' . $email];

    // Enviar correo con Brevo
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success(["message" => "Correo enviado correctamente."]);
    } else {
        wp_send_json_error(["message" => "Error al enviar el correo."]);
    }
}


/** Formulario para envio de correos pagina Plan de Proyectos - With Brevo**/
// add_action('phpmailer_init', function($phpmailer) {
//     $phpmailer->isSMTP();
//     $phpmailer->Host = 'smtp-relay.brevo.com';
//     $phpmailer->SMTPAuth = true;
//     $phpmailer->Username = '875252002@smtp-brevo.com';
//     $phpmailer->Password = 'RzS24XFUO8hCtWVg'; // Debes colocar aquí la contraseña SMTP de Brevo
//     $phpmailer->SMTPSecure = 'tls';
//     $phpmailer->Port = 587;
//     $phpmailer->From = '875252002@smtp-brevo.com';
//     $phpmailer->FromName = 'Tu Nombre o Nombre de Empresa';
// });


/** Formulario para envio de correos pagina Plan de Proyectos - With Mailtrap**/
add_action('phpmailer_init', function($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = '39b0ebc7ca1ba4';
    $phpmailer->Password = 'd8f215d86b7306';
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Port = 2525;
    $phpmailer->From = 'tylergarg@gmail.com';
    $phpmailer->FromName = 'Pruebas Locales';
});

?>