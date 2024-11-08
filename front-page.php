<?php 

  /*
  * Template Name: Pagina Principal (Index)
  */
  get_header();
?>

  <section class="bienvenida seccion contenedor">
    <h1 class="text-center text-negro title is-size-3-mobile">
      <?php the_field('encabezado_bienvenida');?>
    </h1>
    <h4 class="text-center text-negro subtitle is-size-4-tablet">
      <?php the_field('texto_bienvenida');?>
    </h4>
  </section>

  <section class="areas">
    <div class="area">
      <?php 
        $area1 = get_field('area_1');
        $img_avatar = $area1['imagen_avatar']['sizes']['medium'];
        $img_herramientas = $area1['imagen_herramientas']['sizes']['large'];
        /*echo "<pre>";
        var_dump($area1);
        echo "</pre>"
        */
      ?>
      <img class="img-avatar" src="<?php echo  esc_attr($img_avatar);?>" alt="Imagen <?php echo esc_attr($img_avatar);?>">
      <img class="img-herramientas" src="<?php echo esc_attr($img_herramientas);?>" alt="Imagen <?php echo esc_attr($imagen_herramientas);?>">
    </div>
  </section>

  <section class="contenedor seccion sec-morado">
    <div class="columns info-personal">
      <?php 
        $info_per = get_field('yo_soy');
        $titulo_soy = $info_per['texto_soy'];
        $parrafo_soy = $info_per['texto_info_personal'];
      ?>
      <div class="column">
        <h3 class="is-size-3-mobile">
          <?php echo esc_html( $info_per['texto_soy']);?>
        </h3>
        <p>
          <?php echo esc_html( $info_per['texto_info_personal']);?>
        </p>
      </div>
    </div>
  </section>

  
  


  <section class="section skills has-text-centered">
      <div class="container is-narrow">
        <div class="box">
          <div class="content">
            <div class="columns is-centered">
              <div class="column is-size-4-mobile">
              <?php
                  $habilidad1 = get_field('habilidad_1');
                  $skill_icono1 = $habilidad1['skill_icono']['sizes']['medium'];
                  $skill_texto1 = $habilidad1['skill_texto'];
                  $skill_descripcion1 = $habilidad1['skill_descripcion'];
                  $titulo_lenguajes1 = $habilidad1['titulo_lenguajes'];
                  $descripcion_lenguajes1 = $habilidad1['descripcion_lenguajes'];
                  $titulo_herramientas1 = $habilidad1['titulo_herramientas'];
                  $descripcion_herramientas1 = $habilidad1['descripcion_herramientas'];

                  $habilidad2 = get_field('habilidad_2');
                  $skill_icono2 = $habilidad2['skill_icono']['sizes']['medium'];
                  $skill_texto2 = $habilidad2['skill_texto'];
                  $skill_descripcion2 = $habilidad2['skill_descripcion'];
                  $titulo_lenguajes2 = $habilidad2['titulo_lenguajes'];
                  $descripcion_lenguajes2 = $habilidad2['descripcion_lenguajes'];
                  $titulo_herramientas2 = $habilidad2['titulo_herramientas'];
                  $descripcion_herramientas2 = $habilidad2['descripcion_herramientas'];

                  $habilidad3 = get_field('habilidad_3');
                  $skill_icono3 = $habilidad3['skill_icono']['sizes']['medium'];
                  $skill_texto3 = $habilidad3['skill_texto'];
                  $skill_descripcion3 = $habilidad3['skill_descripcion'];
                  $titulo_lenguajes3 = $habilidad3['titulo_lenguajes'];
                  $descripcion_lenguajes3 = $habilidad3['descripcion_lenguajes'];
                  $titulo_herramientas3 = $habilidad3['titulo_herramientas'];
                  $descripcion_herramientas3 = $habilidad3['descripcion_herramientas'];

                  // echo "<pre>";
                  // var_dump($habilidad1);
                  // echo "</pre>";
                  
                ?>
                <span class="fa-stack fa-2x">
                  <img class="img-avatar" src="<?php echo  esc_attr($skill_icono1);?>" alt="Imagen <?php echo esc_attr($skill_icono1);?>">
                </span>
                <h1 class="title is-size-4 is-spaced"><?php echo esc_attr($skill_texto1); ?></h1>
                <p><?php echo esc_attr($skill_descripcion1); ?></p>
                <p class="list-title has-text-primary has-text-weight-normal"><?php echo esc_attr($titulo_lenguajes1); ?></p>
                <p><?php echo esc_attr($descripcion_lenguajes1); ?></p>
                <p class="list-title has-text-primary has-text-weight-normal"><?php echo esc_attr($titulo_herramientas1); ?></p>
                <ul>
                <?php echo esc_attr($descripcion_herramientas1); ?>
                </ul>
              </div>
              <div class="column is-size-4-mobile">
                <span class="fa-stack fa-2x">
                  <img class="img-avatar" src="<?php echo  esc_attr($skill_icono2);?>" alt="Imagen <?php echo esc_attr($skill_icono2);?>">
                </span>
                <h1 class="title is-size-4 is-spaced"><?php echo esc_attr($skill_texto2); ?></h1>
                <p><?php echo esc_attr($skill_descripcion2); ?></p>
                <p class="list-title has-text-primary has-text-weight-normal"><?php echo esc_attr($titulo_lenguajes2); ?></p>
                <p><?php echo esc_attr($descripcion_lenguajes2); ?></p>
                <p class="list-title has-text-primary has-text-weight-normal"><?php echo esc_attr($titulo_herramientas2); ?></p>
                <ul>
                  <?php echo esc_attr($descripcion_herramientas2); ?>
                </ul>
              </div>
              <div class="column is-size-4-mobile">
                <span class="fa-stack fa-2x">
                  <img class="img-avatar" src="<?php echo  esc_attr($skill_icono3);?>" alt="Imagen <?php echo esc_attr($skill_icono3);?>">
                </span>
                <h1 class="title is-size-4 is-spaced"><?php echo esc_attr($skill_texto3); ?></h1>
                <p><?php echo esc_attr($skill_descripcion3); ?></p>
                <p class="list-title has-text-primary has-text-weight-normal"><?php echo esc_attr($titulo_lenguajes3); ?></p>
                <p><?php echo esc_attr($descripcion_lenguajes3); ?></p>
                <p class="list-title has-text-primary has-text-weight-normal"><?php echo esc_attr($titulo_herramientas3); ?></p>
                <ul>
                  <?php echo esc_attr($descripcion_herramientas3); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="contenedor seccion sec-blanco">
    <div class="content my-work">

      <?php

          $trabajos_texto = get_field('trabajos_texto');
          $titulo_trabajo = $trabajos_texto['titulo_trabajo'];
          $descripcion_trabajo = $trabajos_texto['descripcion_trabajo'];
          $texto_correo = $trabajos_texto['texto_correo'];


          $trabajos_imagenes_1 = get_field('trabajos_imagenes_1');
          $imagen_principal = $trabajos_imagenes_1['imagen_principal']['sizes']['large'];
          $titulo_imagen_trabajo = $trabajos_imagenes_1['titulo_imagen_trabajo'];
          $texto_boton_trabajo = $trabajos_imagenes_1['texto_boton_trabajo'];

          $trabajos_imagenes_2 = get_field('trabajos_imagenes_2');
          $imagen_principal_2 = $trabajos_imagenes_2['imagen_principal']['sizes']['large'];
          $titulo_imagen_trabajo_2 = $trabajos_imagenes_2['titulo_imagen_trabajo'];
          $texto_boton_trabajo_2 = $trabajos_imagenes_2['texto_boton_trabajo'];

          $trabajos_imagenes_3 = get_field('trabajos_imagenes_3');
          $imagen_principal_3 = $trabajos_imagenes_3['imagen_principal']['sizes']['large'];
          $titulo_imagen_trabajo_3 = $trabajos_imagenes_3['titulo_imagen_trabajo'];
          $texto_boton_trabajo_3 = $trabajos_imagenes_3['texto_boton_trabajo'];

          $trabajos_imagenes_4 = get_field('trabajos_imagenes_4');
          $imagen_principal_4 = $trabajos_imagenes_4['imagen_principal']['sizes']['large'];
          $titulo_imagen_trabajo_4 = $trabajos_imagenes_4['titulo_imagen_trabajo'];
          $texto_boton_trabajo_4 = $trabajos_imagenes_4['texto_boton_trabajo'];

          /*echo "<pre>";
          var_dump($trabajos_imagenes_2);
          echo "</pre>";
          */
      ?>

      <h3 class="text-negro"><?php echo esc_attr($titulo_trabajo) ?></h3>
      <p class="text-my-work"><?php echo esc_attr($descripcion_trabajo) ?> 
        <a class="has-text-weight-normal" href="mailto:tylergarg@gmail.com" _istranslated="1"><?php echo esc_attr($texto_correo) ?></a>
      </p>
      <div class="project-grid">
        <div class="columns_3">
          <div class="column_3">
            <figure class="image is-3by2">
              <img class="project-thumb" src="<?php echo  esc_attr($imagen_principal);?>" alt="img_1">
              <figcaption>
                <h3 class="title is-size-5"><?php echo esc_attr($titulo_imagen_trabajo); ?></h1>
                <a class="button is-outlined is-rounded" href="https://graficareal.pe/" target="_blank"><?php echo esc_attr($texto_boton_trabajo); ?>
                  <span class="icon_enlace">
                    <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                    </svg><!-- <i class="fas fa-angle-right"></i> -->
                  </span>
                </a>
              </figcaption>
              <div class="overlay"></div>
            </figure>
          </div>
          <div class="column_3">
          <figure class="image is-3by2">
              <img class="project-thumb" src="<?php echo  esc_attr($imagen_principal_2);?>" alt="img_2">
              <figcaption>
                <h3 class="title is-size-5"><?php echo esc_attr($titulo_imagen_trabajo_2); ?></h1>
                <a class="button is-outlined is-rounded" href="https://amorenaccion.org.pe/" target="_blank"><?php echo esc_attr($texto_boton_trabajo_2); ?>
                  <span class="icon_enlace">
                    <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                    </svg><!-- <i class="fas fa-angle-right"></i> -->
                  </span>
                </a>
              </figcaption>
              <div class="overlay"></div>
            </figure>
          </div>
          <div class="column_3">
          <figure class="image is-3by2">
              <img class="project-thumb" src="<?php echo  esc_attr($imagen_principal_3);?>" alt="">
              <figcaption>
                <h3 class="title is-size-5"><?php echo esc_attr($titulo_imagen_trabajo_3); ?></h1>
                <a class="button is-outlined is-rounded" href="https://elepicperu.com/" target="_blank"><?php echo esc_attr($texto_boton_trabajo_3); ?>
                  <span class="icon_enlace">
                    <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                    </svg><!-- <i class="fas fa-angle-right"></i> -->
                  </span>
                </a>
              </figcaption>
              <div class="overlay"></div>
            </figure>
          </div>
          <div class="column_3">
          <figure class="image is-3by2">
              <img class="project-thumb" src="<?php echo  esc_attr($imagen_principal_4);?>" alt="">
              <figcaption>
                <h3 class="title is-size-5"><?php echo esc_attr($titulo_imagen_trabajo_4); ?></h1>
                <a class="button is-outlined is-rounded" href="https://estaciondg.com/" target="_blank"><?php echo esc_attr($texto_boton_trabajo_4); ?>
                  <span class="icon_enlace">
                    <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                       <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                     </svg><!-- <i class="fas fa-angle-right"></i> -->
                  </span>
                </a>
              </figcaption>
              <div class="overlay"></div>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr>
  <section class="contenedor seccion sec-blanco pd-bot-10rem has-text-centered">
    <div class="content testimoniales">

        <?php

          $testi_texto = get_field('textos_testimoniales');
          $title_testi = $testi_texto['titulo_testimonial'];
          $subtitle_testi = $testi_texto['subtitulo_testimonial'];

          $testimonial1 = get_field('testimonial_1');
          $img_testi1 = $testimonial1['imagen_testimonial']['sizes']['medium'];
          $coment_testi1 = $testimonial1['coment_testi'];
          $name_customer1 = $testimonial1['name_customer'];
          $cargo_customer1 = $testimonial1['cargo_customer'];

          $testimonial2 = get_field('testimonial_2');
          $img_testi2 = $testimonial2['imagen_testimonial']['sizes']['medium'];
          $coment_testi2 = $testimonial2['coment_testi'];
          $name_customer2 = $testimonial2['name_customer'];
          $cargo_customer2 = $testimonial2['cargo_customer'];

        ?>


        <h3 class="title text-negro"><?php echo esc_attr($title_testi); ?></h3>
        <h4 class="subtitle-testimonials"><?php echo esc_attr($subtitle_testi); ?></h4>
        <div class="columns_1 is-centered">
            <div class="column_1 is-two-thirds">
                <div class="testimonials-slider">
                    <input id="carousel-1" type="radio" name="carousel" checked>
                    <input id="carousel-2" type="radio" name="carousel">
                    <div class="carousel-slides">
                        <div class="carousel-inner">
                            <div class="carousel-item" id="item-1">
                                <div class="testimonial-block">
                                    <img class="avatar" src="<?php echo  esc_attr($img_testi1);?>">
                                    <p class="quote"><?php echo esc_attr($coment_testi1); ?></p>
                                    <h1 class="title is-size-5"><?php echo esc_attr($name_customer1); ?></h1>
                                    <h2 class="subtitle is-size-6"><?php echo esc_attr($cargo_customer1); ?></h2>
                                </div>
                            </div>
                            <div class="carousel-item" id="item-2">
                                <div class="testimonial-block">
                                    <img class="avatar" src="<?php echo  esc_attr($img_testi2);?>">
                                    <p class="quote"><?php echo esc_attr($coment_testi2); ?></p>
                                    <h1 class="title is-size-5"><?php echo esc_attr($name_customer2); ?></h1>
                                    <h2 class="subtitle is-size-6"><?php echo esc_attr($cargo_customer2); ?></h2>
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
              <h1 class="titulo">Iniciar un proyecto</h1>
            </div>
            <div class="column_final level-item">
              <p>¿Interesado en trabajar juntos? Deberiamos hacer cola para charlar. Compraré el café.</p>
            </div>
            <div class="column_final level-item">
              <a class="button is-success is-outlined is-rounded is-medium has-text-weight-normal" href="/project-planner">
                <span class="icon_mano">
                  <svg class="svg-inline--fa fa-hand-horns" aria-hidden="true" focusable="false" data-prefix="far" data-icon="hand-horns" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M80 48c8.8 0 16 7.2 16 16l0 144 0 32-16 0c-5.5 0-10.8 .6-16 1.6L64 64c0-8.8 7.2-16 16-16zM16 64l0 208C6 285.4 0 302 0 320c0 0 0 0 0 0l0 24c0 92.8 75.2 168 168 168l48 0c92.8 0 168-75.2 168-168l0-56 0-32 0-128c0-35.3-28.7-64-64-64s-64 28.7-64 64l0 50c-5.1-1.3-10.5-2-16-2c-7.9 0-15.4 1.4-22.4 4c-10.4-21.3-32.3-36-57.6-36c-5.5 0-10.9 .7-16 2l0-82c0-35.3-28.7-64-64-64S16 28.7 16 64zM336 256l0 32 0 56c0 66.3-53.7 120-120 120l-48 0c-66.3 0-120-53.7-120-120l0-24s0 0 0 0c0-17.7 14.3-32 32-32l40 0 40 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0c15.1 0 29-5.3 40-14c11 8.8 24.9 14 40 14c35.3 0 64-28.7 64-64l0-48 0-16 0-112c0-8.8 7.2-16 16-16s16 7.2 16 16l0 128zM160 240l-16 0 0-32c0-8.8 7.2-16 16-16s16 7.2 16 16l0 32 0 2c-5.1-1.3-10.5-2-16-2zm96 16l0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-40 0-24c0-8.8 7.2-16 16-16s16 7.2 16 16l0 16z"></path>
                  </svg><!-- <i class="fa-regular fa-hand-horns"></i> -->
                </span>
                <span>Hagámoslo</span>
              </a>
          </div>
          </div>
        </div>
      </div>
</section>

  <?php 
    get_footer();
  ?>