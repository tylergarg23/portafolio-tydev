<?php

/*
  * Template Name: Mentoria
  */
get_header();
?>
<main class="contenedor seccion contenido-centrado">
  <section class="bienvenida seccion contenedor">
    <h1 class="text-center text-negro title is-size-3-mobile">
      <?php the_field('titulo_bienvenida'); ?>
    </h1>
    <h4 class="text-center text-negro subtitle is-size-4-tablet">
      <?php the_field('descripcion_mentoria'); ?>
    </h4>
  </section>

  <section class="areas">
    <div class="area">
      <?php
      //$imagen_mentoria_avatar = get_field('imagen_mentoria_avatar');
      //$img_mentoria = $imagen_mentoria_avatar['img_mentoria']['sizes']['large'];
      //$title_name_img = $imagen_mentoria_avatar['img_mentoria']['alt'];

      $imagen_mentoria = get_field('imagen_mentoria');
      $img_ment_avatar = $imagen_mentoria['sizes']['large'];
      $text_img_ment = $imagen_mentoria['alt'];

      /*
        echo "<pre>";
        var_dump($imagen_mentoria);
        echo "</pre>"
        */
      ?>

      <div class="img-mento">
        <img class="img-herramientas img-mentoria" src="<?php echo esc_attr($img_ment_avatar); ?>" alt=" <?php echo esc_attr($text_img_ment); ?>" width="700px">
      </div>

    </div>
  </section>

</main>

<section class="contenedor seccion sec-morado">
  <div class="columns info-personal">
    <div class="column">
      <h3>
        <?php the_field('titulo_developer'); ?>
      </h3>
      <p>
        <?php the_field('descripcion_dev'); ?>
      </p>
    </div>
  </div>
</section>

<section class="contenedor seccion sec-blanco section pricing has-text-centered">
  <div class="container is-narrow">
    <div class="pricing-grid">

      <?php
      $mento_puntual = get_field('mentoria_puntual');
      $title_mento1 = $mento_puntual['title_mentoria'];
      $price_mentoria1 = $mento_puntual['price_mentoria'];
      $descr_mentoria1 = $mento_puntual['description_mentoria'];
      $subtitle_mentoria1 = $mento_puntual['subtitle_mentoria'];
      $categori_mentoria1 = $mento_puntual['categori_mentoria'];
      $boton_mentoria1 = $mento_puntual['boton_mentoria'];

      $apoyo_product = get_field('apoyo_a_la_produccion');
      $title_mento2 = $apoyo_product['title_mentoria'];
      $price_mentoria2 = $apoyo_product['price_mentoria'];
      $descr_mentoria2 = $apoyo_product['description_mentoria'];
      $subtitle_mentoria2 = $apoyo_product['subtitle_mentoria'];
      $categori_mentoria2 = $apoyo_product['categori_mentoria'];
      $boton_mentoria2 = $apoyo_product['boton_mentoria'];

      $apren_medida = get_field('aprendizaje_a_medida');
      $title_mento3 = $apren_medida['title_mentoria'];
      $price_mentoria3 = $apren_medida['price_mentoria'];
      $descr_mentoria3 = $apren_medida['description_mentoria'];
      $subtitle_mentoria3 = $apren_medida['subtitle_mentoria'];
      $categori_mentoria3 = $apren_medida['categori_mentoria'];
      $boton_mentoria3 = $apren_medida['boton_mentoria'];

      $presentarte = get_field('presentarte');
      $title_pre = $presentarte['title_presentarte'];
      $desc_pre = $presentarte['description_presentarte'];
      $boton_pre = $presentarte['boton_presentarte'];

      ?>

      <div class="tres_columns is-centered level">
        <div class="tres_column level-item">
          <div class="box">
            <span class="fa-stack fa-2x">
              <svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
              </svg>
              <!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> -->
              <svg class="svg-inline--fa fa-dice-d4 fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="dice-d4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M240.1 56.5L35.4 310.6 240.1 465.9l0-409.4zm32 409.2L476.6 310.6 272.1 56.7l0 409.1zM256 0c7.3 0 14.1 3.3 18.7 8.9l232 288c4.1 5.1 5.9 11.5 5.1 18s-4.1 12.3-9.3 16.2l-232 176c-8.6 6.5-20.4 6.5-29 0l-232-176c-5.2-3.9-8.5-9.8-9.3-16.2s1.1-12.9 5.1-18l232-288C241.9 3.3 248.7 0 256 0z"></path>
              </svg>
              <!-- <i class="fa-light fa-dice-d4 fa-stack-1x has-text-dark"></i> -->
            </span>
            <h1 class="title is-size-4 is-spaced mt-5"><?php echo esc_attr($title_mento1); ?></h1>
            <h2 class="title price is-size-2"><?php echo esc_attr($price_mentoria1); ?></h2>
            <p><?php echo esc_attr($descr_mentoria1); ?></p>
            <p class="list-title has-text-primary has-text-weight-bold is-family-primary is-size-6"><?php echo esc_attr($subtitle_mentoria1); ?></p>
            <ul>
              <li><?php echo esc_attr($categori_mentoria1); ?></li>
            </ul>
            <!-- Botón para abrir el modal -->
            <a href="#"
              class="button is-dark is-rounded is-medium is-fullwidth has-text-weight-normal has-text-success open-modal"
              data-title="<?php echo esc_attr($title_mento1); ?>"
              data-price="<?php echo esc_attr($price_mentoria1); ?>">
              <span class="text-btn"><?php echo esc_attr($boton_mentoria1); ?></span>
            </a>


            <!-- Modal Mentoria Puntual-->
            <div id="mentoriaModal" class="custom-modal">
              <div class="custom-modal-content">
                <span class="custom-modal-close" id="closeModal">&times;</span>

                <h2 id="modal-title" class="title is-4 has-text-centered"></h2>
                <h3 id="modal-price" class="subtitle is-3 has-text-centered"></h3>

                <div class="field has-text-centered">
                  <p><strong>Escanea este código QR con Yape:</strong></p>
                  <div id="yape-qr-dynamic" class="qr-yape-container"></div>
                  <p class="mt-2"><strong>Número de Yape:</strong> 997 890 843</p>
                </div>

                <form id="yape-form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" enctype="multipart/form-data">
                  <input type="hidden" name="form_origen" value="mentoria_yape">
                  <input type="hidden" name="action" value="enviar_reserva_mentoria">

                  <div class="field">
                    <label>Tu nombre</label>
                    <input type="text" name="nombre" required>
                  </div>

                  <div class="field">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo" required>
                  </div>

                  <div class="field">
                    <label>Sube tu comprobante de Yape</label>
                    <input type="file" name="comprobante" accept="image/*" required>
                  </div>

                  <input type="hidden" name="mentoria_titulo" id="input-mentoria-title">
                  <input type="hidden" name="mentoria_precio" id="input-mentoria-price">

                  <div class="field">
                    <button type="submit">Enviar y reservar</button>
                  </div>
                </form>
                <div id="reserva-confirmacion" style="display: none; text-align: center;">
                  <div class="checkmark-container">
                    <div class="checkmark-circle">
                      <div class="checkmark-stem"></div>
                      <div class="checkmark-kick"></div>
                    </div>
                    <p class="confirmacion-text">
                      ✅ <strong>Tu reserva se ha realizado con éxito.</strong><br>
                      Validaremos la transferencia y nos pondremos en contacto contigo para acordar las fechas de sesión.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="tres_column level-item">
          <div class="box">
            <span class="fa-stack fa-2x">
              <svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
              </svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> -->
              <svg class="svg-inline--fa fa-dice-d12 fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="dice-d12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M200.3 32c-2.8 0-5.6 .7-8 2.1L128.7 70.9 256 111.2 383.3 70.9 319.7 34.1c-2.4-1.4-5.2-2.1-8-2.1L200.3 32zM92 92.8c-.8 .9-1.6 1.9-2.2 2.9L34.2 192.2c.6 .5 1.2 1 1.7 1.6l95.8 106.4L240 246.1l0-106.4L92 92.8zM32 237.3l0 74.4c0 2.8 .7 5.6 2.1 8l55.7 96.5c1.4 2.4 3.4 4.5 5.9 5.9l62.7 36.2-44.5-130L32 237.3zM199.7 480c.2 0 .4 0 .6 0l111.5 0c.7 0 1.4 0 2.1-.1l50.6-151.8L256 273.9 147.7 328.1l52 151.9zM355 457.5l61.2-35.4c2.4-1.4 4.5-3.4 5.9-5.9l55.7-96.5c1.4-2.4 2.1-5.2 2.1-8l0-74.4-81.9 90.9L355 457.5zM477.8 192.2L422.1 95.7c-.6-1.1-1.3-2-2.2-2.9L272 139.7l0 106.4 108.3 54.1 95.8-106.4c.5-.6 1.1-1.1 1.7-1.6zM176.3 6.4c7.3-4.2 15.6-6.4 24-6.4L311.7 0c8.4 0 16.7 2.2 24 6.4l96.5 55.7c7.3 4.2 13.4 10.3 17.6 17.6l55.7 96.5c4.2 7.3 6.4 15.6 6.4 24l0 111.5c0 8.4-2.2 16.7-6.4 24l-55.7 96.5c-4.2 7.3-10.3 13.4-17.6 17.6l-96.5 55.7c-7.3 4.2-15.6 6.4-24 6.4l-111.5 0c-8.4 0-16.7-2.2-24-6.4L79.7 449.8c-7.3-4.2-13.4-10.3-17.6-17.6L6.4 335.7c-4.2-7.3-6.4-15.6-6.4-24L0 200.3c0-8.4 2.2-16.7 6.4-24L62.2 79.7c4.2-7.3 10.3-13.4 17.6-17.6L176.3 6.4z"></path>
              </svg><!-- <i class="fa-light fa-dice-d12 fa-stack-1x has-text-dark"></i> --></span>
            <h1 class="title is-size-4 is-spaced mt-5"><?php echo esc_attr($title_mento2); ?></h1>
            <h2 class="title price is-size-2"><?php echo esc_attr($price_mentoria2); ?></h2>
            <p><?php echo esc_attr($descr_mentoria2); ?></p>
            <p class="list-title has-text-primary has-text-weight-bold is-family-primary is-size-6"><?php echo esc_attr($subtitle_mentoria2); ?></p>
            <ul>
              <li><?php echo esc_attr($categori_mentoria2); ?></li>
            </ul>
            <!-- Botón para abrir el modal -->
            <a href="#"
              class="button is-dark is-rounded is-medium is-fullwidth has-text-weight-normal has-text-success open-modal"
              data-title="<?php echo esc_attr($title_mento2); ?>"
              data-price="<?php echo esc_attr($price_mentoria2); ?>">
              <span class="text-btn"><?php echo esc_attr($boton_mentoria2); ?></span>
            </a>

            <!-- Modal Apoyo a la Producción-->
            <div id="mentoriaModal" class="custom-modal">
              <div class="custom-modal-content">
                <span class="custom-modal-close" id="closeModal">&times;</span>

                <h2 id="modal-title" class="title is-4 has-text-centered"></h2>
                <h3 id="modal-price" class="subtitle is-3 has-text-centered"></h3>

                <div class="field has-text-centered">
                  <p><strong>Escanea este código QR con Yape:</strong></p>
                  <div id="yape-qr-dynamic" class="qr-yape-container"></div>
                  <p class="mt-2"><strong>Número de Yape:</strong> 997 890 843</p>
                </div>

                <form id="yape-form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" enctype="multipart/form-data">
                  <input type="hidden" name="form_origen" value="mentoria_yape">
                  <input type="hidden" name="action" value="enviar_reserva_mentoria">

                  <div class="field">
                    <label>Tu nombre</label>
                    <input type="text" name="nombre" required>
                  </div>

                  <div class="field">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo" required>
                  </div>

                  <div class="field">
                    <label>Sube tu comprobante de Yape</label>
                    <input type="file" name="comprobante" accept="image/*" required>
                  </div>

                  <input type="hidden" name="mentoria_titulo" id="input-mentoria-title">
                  <input type="hidden" name="mentoria_precio" id="input-mentoria-price">

                  <div class="field">
                    <button type="submit">Enviar y reservar</button>
                  </div>
                </form>
                <div id="reserva-confirmacion" style="display: none; text-align: center;">
                  <div class="checkmark-container">
                    <div class="checkmark-circle">
                      <div class="checkmark-stem"></div>
                      <div class="checkmark-kick"></div>
                    </div>
                    <p class="confirmacion-text">
                      ✅ <strong>Tu reserva se ha realizado con éxito.</strong><br>
                      Validaremos la transferencia y nos pondremos en contacto contigo para acordar las fechas de sesión.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="tres_column level-item">
          <div class="box">
            <span class="fa-stack fa-2x">
              <svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
              </svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> --><svg class="svg-inline--fa fa-dice-d20 fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="dice-d20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M217.5 56.4L77.9 140.2l61.4 44.7L217.5 56.4zM64 169.6l0 150.7 59.2-107.6L64 169.6zM104.8 388L240 469.1l0-70.3L104.8 388zM272 469.1L407.2 388 272 398.8l0 70.3zM448 320.3l0-150.7-59.2 43L448 320.3zM434.1 140.2L294.5 56.4l78.2 128.4 61.4-44.7zM243.7 3.4c7.6-4.6 17.1-4.6 24.7 0l200 120c7.2 4.3 11.7 12.1 11.7 20.6l0 224c0 8.4-4.4 16.2-11.7 20.6l-200 120c-7.6 4.6-17.1 4.6-24.7 0l-200-120C36.4 384.2 32 376.4 32 368l0-224c0-8.4 4.4-16.2 11.7-20.6l200-120zM225.3 365.5L145 239.4 81.9 354l143.3 11.5zM338.9 224l-165.7 0L256 354.2 338.9 224zM256 54.8L172.5 192l167.1 0L256 54.8zm30.7 310.7L430.1 354 367 239.4 286.7 365.5z"></path>
              </svg><!-- <i class="fa-light fa-dice-d20 fa-stack-1x has-text-dark"></i> --></span>
            <h1 class="title is-size-4 is-spaced mt-5"><?php echo esc_attr($title_mento3); ?></h1>
            <h2 class="title price is-size-2"><?php echo esc_attr($price_mentoria3); ?></h2>
            <p><?php echo esc_attr($descr_mentoria3); ?></p>
            <p class="list-title has-text-primary has-text-weight-bold is-family-primary is-size-6"><?php echo esc_attr($subtitle_mentoria3); ?></p>
            <ul>
              <li><?php echo esc_attr($categori_mentoria3); ?></li>
            </ul>
            <!-- Botón para abrir el modal -->
            <a href="#"
              class="button is-dark is-rounded is-medium is-fullwidth has-text-weight-normal has-text-success open-modal"
              data-title="<?php echo esc_attr($title_mento3); ?>"
              data-price="<?php echo esc_attr($price_mentoria3); ?>">
              <span class="text-btn"><?php echo esc_attr($boton_mentoria3); ?></span>
            </a>

            <!-- Modal Aprendizaje a medida-->
            <div id="mentoriaModal" class="custom-modal">
              <div class="custom-modal-content">
                <span class="custom-modal-close" id="closeModal">&times;</span>

                <h2 id="modal-title" class="title is-4 has-text-centered"></h2>
                <h3 id="modal-price" class="subtitle is-3 has-text-centered"></h3>

                <div class="field has-text-centered">
                  <p><strong>Escanea este código QR con Yape:</strong></p>
                  <div id="yape-qr-dynamic" class="qr-yape-container"></div>
                  <p class="mt-2"><strong>Número de Yape:</strong> 997 890 843</p>
                </div>

                <form id="yape-form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" enctype="multipart/form-data">
                  <input type="hidden" name="form_origen" value="mentoria_yape">
                  <input type="hidden" name="action" value="enviar_reserva_mentoria">

                  <div class="field">
                    <label>Tu nombre</label>
                    <input type="text" name="nombre" required>
                  </div>

                  <div class="field">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo" required>
                  </div>

                  <div class="field">
                    <label>Sube tu comprobante de Yape</label>
                    <input type="file" name="comprobante" accept="image/*" required>
                  </div>

                  <input type="hidden" name="mentoria_titulo" id="input-mentoria-title">
                  <input type="hidden" name="mentoria_precio" id="input-mentoria-price">

                  <div class="field">
                    <button type="submit">Enviar y reservar</button>
                  </div>
                </form>
                <div id="reserva-confirmacion" style="display: none; text-align: center;">
                  <div class="checkmark-container">
                    <div class="checkmark-circle">
                      <div class="checkmark-stem"></div>
                      <div class="checkmark-kick"></div>
                    </div>
                    <p class="confirmacion-text">
                      ✅ <strong>Tu reserva se ha realizado con éxito.</strong><br>
                      Validaremos la transferencia y nos pondremos en contacto contigo para acordar las fechas de sesión.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="callout">
      <div class="tres_columns is-centered">
        <div class="tres_column">
          <h4 class="title is-spaced has-text-weight-semibold"><?php echo esc_attr($title_pre); ?></h4>
          <p class="subtitle is-size-5-desktop"><?php echo esc_attr($desc_pre); ?></p>
          <a class="btn-read-mentoria button is-primary is-outlined is-rounded is-medium has-text-weight-normal" href="/saludar/">
            <span class="icon_saludo">
              <svg class="svg-inline--fa fa-hand-wave" aria-hidden="true" focusable="false" data-prefix="far" data-icon="hand-wave" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M336.2 82.3L335 73.8c-3-21.1-19.6-37.7-40.7-40.7l-8.5-1.2c-8.7-1.2-14.8-9.4-13.6-18.1S281.5-1.1 290.3 .2l8.5 1.2c35.2 5 62.9 32.7 67.9 67.9l1.2 8.5c1.2 8.7-4.8 16.9-13.6 18.1s-16.9-4.8-18.1-13.6zM80 68.7c17.9-17.9 43.8-23 66.2-15.2c3.1-6.8 7.4-13.1 13-18.7c25-25 65.5-25 90.5 0L368 153l0-5.2c0-35.3 28.7-64 64-64s64 28.7 64 64l0 157.7c0 1.6 0 3.1-.1 4.7c0 .6 .1 1.1 .1 1.7c0 109.9-88.7 199.2-198.5 200l-.5 0-1 0s0 0 0 0l-6.6 0c-53 0-103.9-21.1-141.4-58.6L34.7 340.2c-25-25-25-65.5 0-90.5c3.9-3.9 8.2-7.2 12.7-9.9l-1.4-1.4c-25-25-25-65.5 0-90.5c5.6-5.6 11.9-9.9 18.7-13C57 112.5 62.1 86.6 80 68.7zm79.3 56.7l-.1-.1-22.6-22.6c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l22.5 22.5 .1 .1L232.7 244c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-96.1-96.1c0 0 0 0-.1-.1c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L119.5 244l.1 .1 56.6 56.6c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L91.4 283.7l-.1-.1c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L181.9 419.5C210.4 448 249.1 464 289.4 464l6.6 0s0 0 0 0l.6 0 .2 0c82.8-.5 149.9-67.1 151.1-149.8c-.1-1-.1-2.1-.1-3.1c.1-1.8 .1-3.6 .1-5.5l0-157.7c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 63.1c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2L215.8 68.7c-6.2-6.2-16.4-6.2-22.6 0c-6.2 6.2-6.2 16.3-.1 22.6l96.2 96.2c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-96.1-96.1zM13.7 368.2c8.7-1.3 16.9 4.8 18.1 13.6l1.2 8.5c3 21.1 19.6 37.7 40.7 40.7l8.5 1.2c8.7 1.2 14.8 9.4 13.6 18.1s-9.4 14.8-18.1 13.6l-8.5-1.2c-35.2-5-62.9-32.7-67.9-67.9L.2 386.3c-1.2-8.7 4.8-16.9 13.6-18.1z"></path>
              </svg><!-- <i class="fa-regular fa-hand-wave"></i> -->
            </span>
            <span><?php echo esc_attr($boton_pre); ?></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<hr>

<section class="contenedor seccion sec-blanco section benefits has-text-centered is-medium">
  <div class="container is-narrow">

    <?php

    $texto_beneficios = get_field('texto_beneficios');
    $titulo_bene = $texto_beneficios['titulo_beneficio'];
    $desc_bene = $texto_beneficios['description_mentoria'];

    $icons_bene_mento = get_field('iconos_ben_mento');
    $txt_icon_bene1 = $icons_bene_mento['texto_icon_bene_1'];
    $des_icon_bene1 = $icons_bene_mento['des_icon_bene_1'];
    $txt_icon_bene2 = $icons_bene_mento['texto_icon_bene_2'];
    $des_icon_bene2 = $icons_bene_mento['des_icon_bene_2'];
    $txt_icon_bene3 = $icons_bene_mento['texto_icon_bene_3'];
    $des_icon_bene3 = $icons_bene_mento['des_icon_bene_3'];
    $txt_icon_bene4 = $icons_bene_mento['texto_icon_bene_4'];
    $des_icon_bene4 = $icons_bene_mento['des_icon_bene_4'];
    $txt_icon_bene5 = $icons_bene_mento['texto_icon_bene_5'];
    $des_icon_bene5 = $icons_bene_mento['des_icon_bene_5'];

    ?>


    <div class="tres_columns is-centered">
      <div class="tres_column is-three-fifths">
        <h3 class="title is-spaced is-size-3-desktop is-size-4-mobile" _msttexthash="573339" _msthash="30"><?php echo esc_attr($titulo_bene); ?></h3>
        <h4 class="subtitle is-size-5-desktop" _msttexthash="9877023" _msthash="31"><?php echo esc_attr($desc_bene); ?></h4>
      </div>
    </div>
    <div class="benefits-grid">
      <div class="tres_columns is-multiline is-centered">
        <div class="tres_column is-12-mobile is-one-third-tablet is-one-fifth-desktop"><span class="icon has-text-primary"><svg class="svg-inline--fa fa-bezier-curve fa-3x" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bezier-curve" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
              <path fill="currentColor" d="M352 64c8.8 0 16 7.2 16 16l0 21.2 0 10.8 0 22 0 10c0 8.8-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16l0-10 0-22 0-10.8L272 80c0-8.8 7.2-16 16-16l64 0zm83.4 64l78.6 0c7.1 27.6 32.2 48 62 48c35.3 0 64-28.7 64-64s-28.7-64-64-64c-29.8 0-54.9 20.4-62 48L400 96l0-16c0-26.5-21.5-48-48-48l-64 0c-26.5 0-48 21.5-48 48l0 16L126 96c-7.1-27.6-32.2-48-62-48C28.7 48 0 76.7 0 112s28.7 64 64 64c29.8 0 54.9-20.4 62-48l78.6 0C139.5 167.2 96 238.5 96 320l-16 0c-26.5 0-48 21.5-48 48l0 64c0 26.5 21.5 48 48 48l64 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48l-16 0c0-77.5 45.9-144.3 112-174.6c.7 25.9 21.9 46.6 48 46.6l64 0c26 0 47.2-20.7 48-46.6c66.1 30.3 112 97.1 112 174.6l-16 0c-26.5 0-48 21.5-48 48l0 64c0 26.5 21.5 48 48 48l64 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48l-16 0c0-81.5-43.5-152.8-108.6-192zM544 352l16 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16l16 0 32 0zm-416 0l16 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16l16 0 32 0zM32 112a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm512 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"></path>
            </svg><!-- <i class="fa-light fa-bezier-curve fa-3x"></i> --></span>
          <h1 class="title is-size-4 is-spaced" _msttexthash="206141" _msthash="32"><?php echo esc_attr($txt_icon_bene1); ?></h1>
          <p class="benf-prf" _msttexthash="3690999" _msthash="33"><?php echo esc_attr($des_icon_bene1); ?></p>
        </div>
        <div class="tres_column is-12-mobile is-one-third-tablet is-one-fifth-desktop"><span class="icon has-text-primary"><svg class="svg-inline--fa fa-book-spells fa-3x" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="book-spells" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
              <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64L0 448s0 0 0 0c0 35.3 28.7 64 64 64l368 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-16 0 0-66.7c18.6-6.6 32-24.4 32-45.3l0-320c0-26.5-21.5-48-48-48L64 0zM384 416l0 64L64 480c-17.7 0-32-14.3-32-32s14.3-32 32-32l320 0zM64 384c-11.7 0-22.6 3.1-32 8.6L32 64c0-17.7 14.3-32 32-32l336 0c8.8 0 16 7.2 16 16l0 320c0 8.8-7.2 16-16 16L64 384zM265.9 170.9l-16.5 38.6-38.6 16.5c-19.4 8.3-19.4 35.8 0 44.1l38.6 16.5 16.5 38.6c8.3 19.4 35.8 19.4 44.1 0l16.5-38.6 38.6-16.5c19.4-8.3 19.4-35.8 0-44.1l-38.6-16.5-16.5-38.6c-8.3-19.4-35.8-19.4-44.1 0zM288 200.6l11.7 27.3c1.6 3.8 4.6 6.8 8.4 8.4L335.4 248l-27.3 11.7c-3.8 1.6-6.8 4.6-8.4 8.4L288 295.4l-11.7-27.3c-1.6-3.8-4.6-6.8-8.4-8.4L240.6 248l27.3-11.7c3.8-1.6 6.8-4.6 8.4-8.4L288 200.6zM153 121.8l7-14 7 14c1.5 3.1 4.1 5.6 7.2 7.2l14 7-14 7c-3.1 1.5-5.6 4.1-7.2 7.2l-7 14-7-14c-1.5-3.1-4.1-5.6-7.2-7.2l-14-7 14-7c3.1-1.5 5.6-4.1 7.2-7.2zm28.5-42.7c-8.8-17.7-34.1-17.7-42.9 0l-11.8 23.6-23.6 11.8c-17.7 8.8-17.7 34.1 0 42.9l23.6 11.8 11.8 23.6c8.8 17.7 34.1 17.7 42.9 0l11.8-23.6 23.6-11.8c17.7-8.8 17.7-34.1 0-42.9l-23.6-11.8L181.5 79.2z"></path>
            </svg><!-- <i class="fa-light fa-book-spells fa-3x"></i> --></span>
          <h1 class="title is-size-4 is-spaced" _msttexthash="118690" _msthash="34"><?php echo esc_attr($txt_icon_bene2); ?></h1>
          <p class="benf-prf" _msttexthash="1799941" _msthash="35"><?php echo esc_attr($des_icon_bene2); ?></p>
        </div>
        <div class="tres_column is-12-mobile is-one-third-tablet is-one-fifth-desktop"><span class="icon has-text-primary"><svg class="svg-inline--fa fa-chart-network fa-3x" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chart-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
              <path fill="currentColor" d="M224 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm0 96c4.5 0 8.9-.5 13.1-1.3l38.1 83.2c-26.6 17.2-45.4 45.4-50.1 78.1L126 288c-7.1-27.6-32.2-48-62-48c-35.3 0-64 28.7-64 64s28.7 64 64 64c29.8 0 54.9-20.4 62-48l99.2 0c7.8 54.3 54.4 96 110.9 96c35 0 66.3-16.1 86.8-41.2l91.8 55.1c-1.7 5.8-2.6 11.9-2.6 18.2c0 35.3 28.7 64 64 64s64-28.7 64-64s-28.7-64-64-64c-17.5 0-33.4 7-44.9 18.4l-91.8-55.1c5.6-13.3 8.7-28 8.7-43.3c0-18.7-4.6-36.3-12.7-51.8l101.8-73.3c10.8 8.2 24.2 13.1 38.8 13.1c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64c0 9.1 1.9 17.8 5.4 25.7L416.6 226.2c-20.4-21.1-49-34.2-80.6-34.2c-11 0-21.6 1.6-31.7 4.5l-38.5-84.1C279.4 100.7 288 83.4 288 64c0-35.3-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64zM576 96a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM544 448a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM64 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm272-48a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"></path>
            </svg><!-- <i class="fa-light fa-chart-network fa-3x"></i> --></span>
          <h1 class="title is-size-4 is-spaced" _msttexthash="279188" _msthash="36"><?php echo esc_attr($txt_icon_bene3); ?></h1>
          <p class="benf-prf" _msttexthash="3007498" _msthash="37"><?php echo esc_attr($des_icon_bene3); ?></p>
        </div>
        <div class="tres_column is-12-mobile is-one-third-tablet is-one-fifth-desktop"><span class="icon has-text-primary"><svg class="svg-inline--fa fa-door-open fa-3x" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="door-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
              <path fill="currentColor" d="M288 480L96 480 96 86.2c0-7.5 5.1-13.9 12.4-15.6l166-38.3c.8-.2 1.7-.3 2.5-.3C283 32 288 37 288 43.1L288 480zm32 0l0-436.9C320 19.3 300.7 0 276.9 0c-3.3 0-6.5 .4-9.7 1.1l-166 38.3C79.4 44.4 64 63.8 64 86.2L64 480l-48 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l48 0 16 0 16 0 192 0 32 0 0-32zM232 288c13.2 0 24-14.4 24-32s-10.8-32-24-32s-24 14.4-24 32s10.7 32 24 32zM464 64L352 64l0 32 112 0c8.8 0 16 7.2 16 16l0 384c0 8.8 7.2 16 16 16l64 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-48 0 0-368c0-26.5-21.5-48-48-48z"></path>
            </svg><!-- <i class="fa-light fa-door-open fa-3x"></i> --></span>
          <h1 class="title is-size-4 is-spaced" _msttexthash="180960" _msthash="38"><?php echo esc_attr($txt_icon_bene4); ?></h1>
          <p class="benf-prf" _msttexthash="2620150" _msthash="39"><?php echo esc_attr($des_icon_bene4); ?></p>
        </div>
        <div class="tres_column is-12-mobile is-one-third-tablet is-one-fifth-desktop"><span class="icon has-text-primary"><svg class="svg-inline--fa fa-rocket-launch fa-3x" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="rocket-launch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor" d="M219.3 292.7c-10-10-21.4-18.1-33.8-24.1C215.6 146.3 269 86.7 321.1 58.1c53.5-29.4 111.4-29.4 154.6-21.8c7.6 43.2 7.7 101.1-21.8 154.6C425.3 243 365.7 296.4 243.4 326.5c-6-12.4-14.1-23.9-24.1-33.8zM256 381.3c0-8.2-.8-16.3-2.4-24.3c37.8-9.5 70.4-21.3 98.4-34.7l0 80.1c0 12.1-6.8 23.2-17.7 28.6L256 470.1l0-88.9zm128 21.1l0-97.4C515.7 225.1 520.5 102.5 506.7 28.1c-2.2-11.6-11.2-20.7-22.8-22.8C409.5-8.5 286.9-3.7 207 128l-97.4 0c-24.2 0-46.4 13.7-57.2 35.4L1.7 264.8c-2.5 5-2.2 10.9 .7 15.6s8.1 7.6 13.6 7.6l114.7 0c24.7 0 48.5 9.8 65.9 27.3s27.3 41.2 27.3 65.9L224 496c0 5.5 2.9 10.7 7.6 13.6s10.6 3.2 15.6 .7l101.5-50.7c21.7-10.8 35.4-33 35.4-57.2zm-229-144c-7.9-1.6-16.1-2.4-24.3-2.4l-88.9 0L81 177.7c5.4-10.8 16.5-17.7 28.6-17.7l80.1 0c-13.5 28-25.2 60.5-34.7 98.4zm-11.2 189c-11 11-29.4 19.4-52.6 24.9c-20.6 4.9-42.1 6.8-59 7.4c.6-17 2.5-38.4 7.4-59c5.5-23.2 13.9-41.6 24.9-52.6c21.9-21.9 57.4-21.9 79.3 0s21.9 57.4 0 79.3zM166.5 470c34.4-34.4 34.4-90.1 0-124.5s-90.1-34.4-124.5 0C7.7 379.7 1 446 .1 483.7c-.4 16 12.2 28.6 28.2 28.2C66 511 132.3 504.3 166.5 470zM392 144a24 24 0 1 1 -48 0 24 24 0 1 1 48 0zM368 88a56 56 0 1 0 0 112 56 56 0 1 0 0-112z"></path>
            </svg><!-- <i class="fa-light fa-rocket-launch fa-3x"></i> --></span>
          <h1 class="title is-size-4 is-spaced" _msttexthash="180895" _msthash="40"><?php echo esc_attr($txt_icon_bene5); ?></h1>
          <p class="benf-prf" _msttexthash="2175069" _msthash="41"><?php echo esc_attr($des_icon_bene5); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="contenedor seccion sec-morado">
  <div class="columns info-personal">
    <div class="column">
      <h3>
        Mi Estilo de Mentoría
      </h3>
      <p>
        Me esfuerzo por funcionar como un catalizador y te desafío a crecer como diseñador y como ser humano. Me importan los detalles y te animaré a pensar, planificar y soñar. Estas son las cualidades que aportaré a cada conversación.
      </p>
    </div>
  </div>
</section>

<section class="contenedor seccion sec-blanco section mentor-style has-text-centered">
  <div class="container is-narrow">
    <div class="mentor-style-grid">
      <div class="box">
        <div class="content">
          <div class="dos_columns is-multiline is-centered level">
            <div class="dos_column is-half level-item">
              <span class="fa-stack fa-2x">
                <svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                </svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> -->
                <svg class="svg-inline--fa fa-fingerprint fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="fingerprint" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M32 256C32 132.3 132.3 32 256 32c70.3 0 133 32.4 174.1 83c5.6 6.9 15.6 7.9 22.5 2.4s7.9-15.6 2.4-22.5C408.1 37 336.3 0 256 0C114.6 0 0 114.6 0 256l0 48c0 8.8 7.2 16 16 16s16-7.2 16-16l0-48zm470.8-68.3c-2.4-8.5-11.2-13.5-19.7-11.2s-13.5 11.2-11.2 19.7c5.2 19 8.1 39 8.1 59.7l0 48c0 8.8 7.2 16 16 16s16-7.2 16-16l0-48c0-23.6-3.2-46.5-9.2-68.3zM256 80c-22.8 0-44.6 4.3-64.6 12.2c-9.7 3.8-12 16.1-5.2 24.1c4.8 5.6 12.8 7.2 19.7 4.6c15.6-5.8 32.5-9 50.1-9c79.5 0 144 64.5 144 144l0 24.9c0 28.3-1.8 56.6-5.5 84.6c-1.3 9.7 6.2 18.5 16 18.5c7.9 0 14.6-5.8 15.6-13.6c3.9-29.6 5.8-59.5 5.8-89.5l0-24.9c0-97.2-78.8-176-176-176zM145.1 142.1c-6-7-16.8-7.6-22.8-.5C95.9 172.3 80 212.3 80 256l0 24.9c0 27.8-3.4 55.4-10.2 82.3c-2.6 10.4 5 20.8 15.7 20.8c7 0 13.2-4.6 15-11.4c7.7-29.9 11.6-60.7 11.6-91.7l0-24.9c0-34.7 12.3-66.5 32.7-91.4c5.4-6.5 5.8-16.1 .3-22.5zM256 160c-53 0-96 43-96 96l0 24.9c0 38.6-5.4 77-15.9 114c-3 10.4 4.7 21.1 15.5 21.1c6.9 0 13-4.5 14.9-11.1c11.6-40.2 17.5-82 17.5-124l0-24.9c0-35.3 28.7-64 64-64s64 28.7 64 64l0 24.9c0 38.8-3.9 77.5-11.7 115.4c-2.1 10.1 5.5 19.7 15.8 19.7c7.4 0 13.9-5.1 15.4-12.4c8.3-40.3 12.5-81.4 12.5-122.7l0-24.9c0-53-43-96-96-96zm16 96c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 24.9c0 60.9-11.2 121.2-33.1 178.1l-5.9 15.3c-3.2 8.2 .9 17.5 9.2 20.7s17.5-.9 20.7-9.2l5.9-15.3C260.1 410 272 345.7 272 280.9l0-24.9z"></path>
                </svg><!-- <i class="fa-light fa-fingerprint fa-stack-1x has-text-dark"></i> -->
              </span>
              <h1 class="title is-size-4 is-spaced" _msttexthash="200486" _msthash="46">Autenticidad</h1>
              <p _msttexthash="14324908" _msthash="47">Aquí no hay críticas edulcoradas. Me preocupo demasiado por tu crecimiento como para no mantenerlo real. Derribaremos cosas y las reconstruiremos mejor, juntos.</p>
            </div>
            <div class="dos_column is-half level-item"><span class="fa-stack fa-2x"><svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                </svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> --><svg class="svg-inline--fa fa-dumpster-fire fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="dumpster-fire" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M423.4 32L288 32s0 0 0 0s0 0 0 0L152.3 32c-.2 0-.4 0-.6 0L57 32c-14.7 0-27.5 10-31 24.2L.9 156.6c-.6 2.3-.9 4.6-.9 6.9C0 179.2 12.8 192 28.5 192l5.3 0L66 192l61.7 0 .6 0L288 192l49.5 0c7.5-10.7 15.7-21.4 24.5-32l-58 0 0-96 106.4 0 7.5 39.6c9.4-6.1 20.5-8.6 31.2-7.3L443 64l76 0 15.4 61.5c11.4-2.8 23.7-1.2 34.2 4.7l-18.5-74C546.5 42 533.7 32 519 32l-95 0c-.2 0-.4 0-.6 0zM337.6 448c-8.8-9.8-16.5-20.6-23.2-32L92.3 416 69.8 224l-32.2 0 3.8 32L16 256c-8.8 0-16 7.2-16 16s7.2 16 16 16l29.1 0L64 448.9 64 464c0 8.8 7.2 16 16 16s16-7.2 16-16l0-16 241.6 0zM272 64l0 96-124.7 0 18-96L272 64zM132.7 64l-18 96-66.5 0-.4 0L33 160 57 64l75.7 0zm314.4 97.1l47.4 49.8c3.1 3.2 7.4 5 11.9 5s8.7-2 11.7-5.4l21-23.7c16.6 15.9 33.7 37.3 46.7 60.7c13.7 24.6 22.2 50 22.2 72.6c0 33.5-12.7 63.9-33.6 86.6c1-5.2 1.6-10.7 1.6-16.2c0-57.4-63.8-110.5-87.4-128.2c-5.2-3.9-12.1-3.9-17.3 0C447.8 280.1 384 333.2 384 390.6c0 5.7 .6 11.2 1.6 16.6c-21-22.8-33.6-53.3-33.6-87c0-28.4 12.4-58.2 31.4-86.7c18.4-27.5 42-52.6 63.7-72.3zM480 448c-2.4 0-4.7-.1-7-.2c-33.7-3.2-57-29.4-57-57.3c0-17.4 10.1-37.7 27.4-58.5c12.1-14.5 25.8-27 36.6-35.8c10.7 8.8 24.5 21.3 36.6 35.8c17.3 20.7 27.4 41.1 27.4 58.5c0 27.8-23.2 54-56.9 57.3c-2.4 .1-4.7 .2-7.1 .2zM320 320.2c0 85.6 65.7 155 150.9 159.6c3 .3 6 .4 9.1 .4c3.1 0 6.2-.1 9.2-.4C573.6 475 640 405.7 640 320.2c0-30-11-60.9-26.2-88.1c-15.2-27.4-35.3-52.3-55-70.6c-11.2-10.4-28.5-10.4-39.7-.1c-.4 .4-.8 .7-1.1 1.2l-12.3 13.8-37.9-39.9c-.3-.3-.5-.5-.8-.8c-11.1-10.1-28.1-10.1-39.3-.1c-23.4 21.1-50 48.9-70.9 80.2C336 246.8 320 282.8 320 320.2z"></path>
                </svg><!-- <i class="fa-light fa-dumpster-fire fa-stack-1x has-text-dark"></i> --></span>
              <h1 class="title is-size-4 is-spaced" _msttexthash="110760" _msthash="48">Humildad</h1>
              <p _msttexthash="15726217" _msthash="49">No pretendo estar en la cima de la reserva de talentos de diseño, porque sé que todavía me queda mucho por dominar. El diseño es un objetivo móvil que busco todos los días.</p>
            </div>
            <div class="dos_column is-half level-item"><span class="fa-stack fa-2x"><svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                </svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> --><svg class="svg-inline--fa fa-balance-scale fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="balance-scale" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M384 64c0 29.8-20.4 54.9-48 62l0 354 192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-208 0-208 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l192 0 0-354c-27.6-7.1-48-32.2-48-62L112 64c-8.8 0-16-7.2-16-16s7.2-16 16-16l152.6 0C275.6 12.9 296.3 0 320 0s44.4 12.9 55.4 32L512 32c8.8 0 16 7.2 16 16s-7.2 16-16 16L384 64zm56.7 298.3C457.8 375.1 482.9 384 512 384s54.2-8.9 71.3-21.7C600.4 349.5 608 334.2 608 320l-192 0 0-1.6c0 0 0 .1 0 .1l0 1.6c0 14.2 7.6 29.5 24.7 42.3zm71.3-215L426.3 288l171.3 0L512 147.3zM384 320l0-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6l0 1.6c0 53-57.3 96-128 96s-128-43-128-96zM32 320c0 14.2 7.6 29.5 24.7 42.3C73.8 375.1 98.9 384 128 384s54.2-8.9 71.3-21.7C216.4 349.5 224 334.2 224 320L32 320l0-1.6c0 0 0 .1 0 .1l0 1.6zm10.3-32l171.3 0L128 147.3 42.3 288zM128 416C57.3 416 0 373 0 320l0-1.6c0-14.7 4-29.1 11.7-41.6l92-151.2c5.2-8.5 14.4-13.7 24.3-13.7s19.2 5.2 24.3 13.7l92 151.2c7.6 12.5 11.7 26.9 11.7 41.6l0 1.6c0 53-57.3 96-128 96zM320 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path>
                </svg><!-- <i class="fa-light fa-balance-scale fa-stack-1x has-text-dark"></i> --></span>
              <h1 class="title is-size-4 is-spaced" _msttexthash="109291" _msthash="50">Igualdad</h1>
              <p _msttexthash="10647780" _msthash="51">Para mí, eres más que un aprendiz. Eres un colega de la industria. No soy el único que enseña y tú no eres el único que aprende.</p>
            </div>
            <div class="dos_column is-half level-item"><span class="fa-stack fa-2x"><svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                </svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> --><svg class="svg-inline--fa fa-box-full fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="box-full" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M256 32c53 0 96 43 96 96c0 8.8 7.2 16 16 16s16-7.2 16-16C384 57.3 326.7 0 256 0S128 57.3 128 128c0 8.8 7.2 16 16 16s16-7.2 16-16c0-53 43-96 96-96zM80.4 161.5c-14.1-1.6-27.5 6.2-33.1 19.2l-32 74.7C5.4 278.2 18.7 304.4 43 310l159.2 36.7c18.9 4.4 38.6-3.1 49.9-18.9L320 232.9l67.9 95.1c11.3 15.8 30.9 23.2 49.9 18.9L597 310c24.3-5.6 37.6-31.8 27.8-54.7l-32-74.7c-5.6-13-19-20.8-33.1-19.2L320 189.2 80.4 161.5zm-3.7 31.8l214.5 24.8-65.1 91.2c-3.8 5.3-10.3 7.7-16.6 6.3L50.2 278.9c-4.9-1.1-7.5-6.4-5.6-10.9l32-74.7zM544 348.7l0 61.8c0 7.3-5 13.7-12.1 15.5L336 475l0-139c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 139L108.1 426C101 424.3 96 417.9 96 410.5l0-61.8-32-9.1 0 71c0 22 15 41.2 36.4 46.6l208 52c7.6 1.9 15.6 1.9 23.3 0l208-52c21.4-5.3 36.4-24.5 36.4-46.6l0-71-32 9.1zM348.8 218.1l214.5-24.8 32 74.7c2 4.6-.7 9.8-5.6 10.9L430.6 315.6c-6.3 1.5-12.9-1-16.6-6.3l-65.1-91.2zm146.4-181c2.8-8.4-1.7-17.4-10.1-20.2s-17.4 1.7-20.2 10.1l-32 96c-2.8 8.4 1.7 17.4 10.1 20.2s17.4-1.7 20.2-10.1l32-96z"></path>
                </svg><!-- <i class="fa-light fa-box-full fa-stack-1x has-text-dark"></i> --></span>
              <h1 class="title is-size-4 is-spaced" _msttexthash="229190" _msthash="52">Transparencia</h1>
              <p _msttexthash="11904269" _msthash="53">No tengo todas las respuestas, pero estoy feliz de indicarle recursos útiles y compartir lo que he aprendido de mi propio viaje personal de diseño.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="contenedor seccion sec-blanco pd-bot-10rem has-text-centered">
  <div class="content testimoniales">
    <h3 class="title text-negro">Aprendices felices</h3>
    <h4 class="subtitle-testimonials">No te fíes de mi palabra cuando puedes confiar en la suya...</h4>
    <div class="columns_1 is-centered">
      <div class="column_1 is-two-thirds">
        <div class="testimonials-slider">
          <input id="carousel-1" type="radio" name="carousel" checked>
          <input id="carousel-2" type="radio" name="carousel">
          <div class="carousel-slides">
            <div class="carousel-inner">
              <div class="carousel-item" id="item-1">
                <div class="testimonial-block">
                  <img class="avatar" src="\wp-content\themes\tylerdev\img\pascal.png">
                  <p class="quote">"Tyler siempre ofrecía sugerencias perspicaces sobre el trabajo que producía y me desafiaba con preguntas que no había considerado. Es un mentor, diseñador y persona increíble".</p>
                  <h1 class="title is-size-5">Dalrae Kim</h1>
                  <h2 class="subtitle is-size-6">Diseñador de UX, Indeed</h2>
                </div>
              </div>
              <div class="carousel-item" id="item-2">
                <div class="testimonial-block">
                  <img class="avatar" src="\wp-content\themes\tylerdev\img\alvin.png">
                  <p class="quote">"Matt es un comunicador claro con la tenacidad y la confianza para profundizar en escenarios de diseño complicados y la fricción colaborativa que se necesita para producir un trabajo excelente".</p>
                  <h1 class="title is-size-5">Alvin Engler</h1>
                  <h2 class="subtitle is-size-6">Director ejecutivo de West Third Enterprises, Inc.</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-nav">
            <label for="carousel-1"></label>
            <label for="carousel-2"></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section call-to-action is-primary has-text-centered">
  <div class="container is-narrow">
    <div class="box">
      <div class="columns_finals level">
        <div class="column_final level-item">
          <h1 class="titulo">Reservar una consulta</h1>
        </div>
        <div class="column_final level-item">
          <p>¿Estás pensando en la mentoría? Hablemos de ello. La primera llamada es mía.</p>
        </div>
        <div class="column_final level-item">
          <a class="button is-success is-outlined is-rounded is-medium has-text-weight-normal" href="/mentoria-indagacion/">
            <span class="icon_mano">
              <svg class="svg-inline--fa fa-hand-wave" aria-hidden="true" focusable="false" data-prefix="far" data-icon="hand-wave" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M336.2 82.3L335 73.8c-3-21.1-19.6-37.7-40.7-40.7l-8.5-1.2c-8.7-1.2-14.8-9.4-13.6-18.1S281.5-1.1 290.3 .2l8.5 1.2c35.2 5 62.9 32.7 67.9 67.9l1.2 8.5c1.2 8.7-4.8 16.9-13.6 18.1s-16.9-4.8-18.1-13.6zM80 68.7c17.9-17.9 43.8-23 66.2-15.2c3.1-6.8 7.4-13.1 13-18.7c25-25 65.5-25 90.5 0L368 153l0-5.2c0-35.3 28.7-64 64-64s64 28.7 64 64l0 157.7c0 1.6 0 3.1-.1 4.7c0 .6 .1 1.1 .1 1.7c0 109.9-88.7 199.2-198.5 200l-.5 0-1 0s0 0 0 0l-6.6 0c-53 0-103.9-21.1-141.4-58.6L34.7 340.2c-25-25-25-65.5 0-90.5c3.9-3.9 8.2-7.2 12.7-9.9l-1.4-1.4c-25-25-25-65.5 0-90.5c5.6-5.6 11.9-9.9 18.7-13C57 112.5 62.1 86.6 80 68.7zm79.3 56.7l-.1-.1-22.6-22.6c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l22.5 22.5 .1 .1L232.7 244c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-96.1-96.1c0 0 0 0-.1-.1c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L119.5 244l.1 .1 56.6 56.6c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L91.4 283.7l-.1-.1c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L181.9 419.5C210.4 448 249.1 464 289.4 464l6.6 0s0 0 0 0l.6 0 .2 0c82.8-.5 149.9-67.1 151.1-149.8c-.1-1-.1-2.1-.1-3.1c.1-1.8 .1-3.6 .1-5.5l0-157.7c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 63.1c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2L215.8 68.7c-6.2-6.2-16.4-6.2-22.6 0c-6.2 6.2-6.2 16.3-.1 22.6l96.2 96.2c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-96.1-96.1zM13.7 368.2c8.7-1.3 16.9 4.8 18.1 13.6l1.2 8.5c3 21.1 19.6 37.7 40.7 40.7l8.5 1.2c8.7 1.2 14.8 9.4 13.6 18.1s-9.4 14.8-18.1 13.6l-8.5-1.2c-35.2-5-62.9-32.7-67.9-67.9L.2 386.3c-1.2-8.7 4.8-16.9 13.6-18.1z"></path>
              </svg>
            </span>
            <span>Presentarte</span>
          </a>
        </div>
      </div>
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