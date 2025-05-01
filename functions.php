<?php

function tylerdev_setup()
{
  //Imagenes Destacadas
  add_theme_support('post-thumbnails');

  //Titulos para SEO
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tylerdev_setup');

function tylerdev_menus()
{
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'tylerdev'),
    'redes-sociales' => __('Redes Sociales', 'tylerdev')
  ));
}

add_action('init', 'tylerdev_menus');

function tylerdev_scripts_styles()
{
  // Archivos CSS
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/', array(), '8.0.1'); //Styles Normalize

  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

  // Archivos JS
  wp_enqueue_script('gotopjs', get_template_directory_uri() . '/js/gotop.js', array(), '1.0.0', true);
  wp_enqueue_script('contactplnpytojs', get_template_directory_uri() . '/js/contact-plans-pyto.js', array(), '1.0.0', true);
  wp_enqueue_script('modalyape', get_template_directory_uri() . '/js/modal-yape.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'tylerdev_scripts_styles');

/** Funcion para Iconos de Redes Sociales **/
function display_footer_icon_links()
{
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

function procesar_formulario()
{
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
add_action('phpmailer_init', function ($phpmailer) {
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

/* Envio de reserva para Mentorias */

add_action('admin_post_nopriv_enviar_reserva_mentoria', 'procesar_reserva_mentoria');
add_action('admin_post_enviar_reserva_mentoria', 'procesar_reserva_mentoria');

function procesar_reserva_mentoria()
{
  if (!isset($_POST['form_origen']) || $_POST['form_origen'] !== 'mentoria_yape') {
    wp_redirect(home_url());
    exit;
  }

  // Variables del formulario
  $nombre    = sanitize_text_field($_POST['nombre']);
  $correo    = sanitize_email($_POST['correo']);
  $mentoria = sanitize_text_field($_POST['mentoria_titulo']);
  $precio    = sanitize_text_field($_POST['mentoria_precio']);

  // Manejo de archivo (comprobante)
  $comprobante_url = '';
  if (!empty($_FILES['comprobante']['tmp_name'])) {
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    $uploaded = media_handle_upload('comprobante', 0);
    if (!is_wp_error($uploaded)) {
      $comprobante_url = wp_get_attachment_url($uploaded);
    }
  }

  // 🔧 DEFINIR el enlace al QR de Yape
  $qr_yape_link = 'http://tylerdev.test:8080/wp-content/uploads/2025/03/cod-yape.png';

  // 📩 Enviar correo
  $to = get_option('admin_email');
  $subject = 'Nueva reserva de mentoría';
  $message = "
        <strong>Nombre:</strong> {$nombre}<br>
        <strong>Correo:</strong> {$correo}<br>
        <strong>Mentoría:</strong> {$mentoria}<br>
        <strong>Precio:</strong> S/ {$precio}<br>
        <strong>Comprobante:</strong> <a href='{$comprobante_url}' target='_blank'>Ver comprobante</a>
    ";
  $headers = array('Content-Type: text/html; charset=UTF-8');

  wp_mail($to, $subject, $message, $headers);

  // Guardar en CPT
  wp_insert_post(array(
    'post_type'   => 'reserva_mentoria',
    'post_title'  => 'Reserva de ' . $nombre,
    'post_status' => 'publish',
    'meta_input'  => array(
      'nombre'      => $nombre,
      'correo'      => $correo,
      'mentoria'    => $mentoria,
      'precio'      => $precio,
      'comprobante' => $comprobante_url,
      'qr_link'     => $qr_yape_link
    )
  ));
}

function crear_cpt_reservas_mentoria()
{
  register_post_type('reserva_mentoria', array(
    'labels' => array(
      'name' => 'Reservas de Mentoría',
      'singular_name' => 'Reserva de Mentoría',
    ),
    'public' => true, //false
    'show_ui' => true,
    'supports' => array('title'),
    'menu_icon' => 'dashicons-calendar-alt',
  ));
}
add_action('init', 'crear_cpt_reservas_mentoria');

// Añadir columnas personalizadas al listado del CPT
add_filter('manage_reserva_mentoria_posts_columns', 'agregar_columnas_reservas');
function agregar_columnas_reservas($columns)
{
  $columns['correo'] = 'Correo';
  $columns['mentoria'] = 'Mentoría';
  $columns['precio'] = 'Precio';
  $columns['comprobante'] = 'Comprobante';

  return $columns;
}

// Mostrar el contenido de las columnas personalizadas
add_action('manage_reserva_mentoria_posts_custom_column', 'mostrar_contenido_columnas_reservas', 10, 2);
function mostrar_contenido_columnas_reservas($column, $post_id)
{
  switch ($column) {
    case 'correo':
      echo esc_html(get_post_meta($post_id, 'correo', true));
      break;
    case 'mentoria':
      echo esc_html(get_post_meta($post_id, 'mentoria', true));
      break;
    case 'precio':
      echo 'S/ ' . esc_html(get_post_meta($post_id, 'precio', true));
      break;
    case 'comprobante':
      $url = esc_url(get_post_meta($post_id, 'comprobante', true));
      if ($url) {
        echo '<a href="' . $url . '" target="_blank">
                <img src="' . $url . '" style="max-height:50px;" alt="Ver Comprobante" />
              </a>';
      } else {
        echo 'No adjunto';
      }
      break;
  }
}

?>