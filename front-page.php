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
              <div class="column is-size-4-mobile"><span class="fa-stack fa-2x"><svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path></svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> --><svg class="svg-inline--fa fa-layer-plus fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="layer-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M480 24c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 40-40 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l40 0 0 40c0 8.8 7.2 16 16 16s16-7.2 16-16l0-40 40 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-40 0 0-40zM288 128c-7.5 0-15 1.6-21.8 4.7L48.8 230.1C38.6 234.7 32 244.8 32 256s6.6 21.3 16.8 25.9l217.4 97.5c6.9 3.1 14.3 4.7 21.8 4.7s15-1.6 21.8-4.7l217.4-97.5c10.2-4.6 16.8-14.7 16.8-25.9s-6.6-21.3-16.8-25.9L309.8 132.7c-6.9-3.1-14.3-4.7-21.8-4.7zm-8.8 33.9c2.8-1.2 5.7-1.9 8.8-1.9s6 .6 8.8 1.9l210 94.1-210 94.1c-2.8 1.2-5.7 1.9-8.8 1.9s-6-.6-8.8-1.9L69.3 256l210-94.1zM94.7 337.5L48.8 358.1C38.6 362.7 32 372.8 32 384s6.6 21.3 16.8 25.9l217.4 97.5c6.9 3.1 14.3 4.7 21.8 4.7s15-1.6 21.8-4.7l217.4-97.5c10.2-4.6 16.8-14.7 16.8-25.9s-6.6-21.3-16.8-25.9l-45.9-20.6-39.1 17.5L506.7 384l-210 94.1c-2.8 1.2-5.7 1.9-8.8 1.9s-6-.6-8.8-1.9L69.3 384l64.5-28.9L94.7 337.5z"></path></svg><!-- <i class="fa-light fa-layer-plus fa-stack-1x has-text-dark"></i> --></span>
                <h1 class="title is-size-4 is-spaced">Designer</h1>
                <p>I value simple content structure, clean design patterns, and thoughtful interactions.</p>
                <p class="list-title has-text-primary has-text-weight-normal">Things I enjoy designing:</p>
                <p>UX, UI, Web, Apps, Logos</p>
                <p class="list-title has-text-primary has-text-weight-normal">Design Tools:</p>
                <ul>
                  <li>Affinity Designer</li>
                  <li>Figma</li>
                  <li>Pen &amp; Paper</li>
                  <li>Sketch</li>
                </ul>
              </div>
              <div class="column is-size-4-mobile"><span class="fa-stack fa-2x"><svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path></svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> --><svg class="svg-inline--fa fa-square-terminal fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="square-terminal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64c17.7 0 32 14.3 32 32l0 320c0 17.7-14.3 32-32 32L64 448c-17.7 0-32-14.3-32-32L32 96c0-17.7 14.3-32 32-32l320 0zM64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM83.9 149.6c-5.8 6.7-5 16.8 1.7 22.6L183.4 256 85.6 339.9c-6.7 5.8-7.5 15.8-1.7 22.6s15.9 7.5 22.6 1.7l112-96c3.5-3 5.6-7.5 5.6-12.1s-2-9.1-5.6-12.1l-112-96c-6.7-5.8-16.8-5-22.6 1.7zM208 352c-8.8 0-16 7.2-16 16s7.2 16 16 16l160 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-160 0z"></path></svg><!-- <i class="fa-light fa-square-terminal fa-stack-1x has-text-dark"></i> --></span>
                <h1 class="title is-size-4 is-spaced">Frontend Developer</h1>
                <p>I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
                <p class="list-title has-text-primary has-text-weight-normal">Languages I speak:</p>
                <p>HTML, Pug, Slim, CSS, Sass, Git</p>
                <p class="list-title has-text-primary has-text-weight-normal">Dev Tools:</p>
                <ul>
                  <li>Astro JS</li>
                  <li>Bitbucket</li>
                  <li>Bootstrap</li>
                  <li>Bulma</li>
                  <li>Codekit</li>
                  <li>Github</li>
                  <li>Netlify</li>
                  <li>Tailwind CSS</li>
                  <li>VS Code</li>
                </ul>
              </div>
              <div class="column is-size-4-mobile"><span class="fa-stack fa-2x"><svg class="svg-inline--fa fa-circle fa-stack-2x has-text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path></svg><!-- <i class="fa-solid fa-circle fa-stack-2x has-text-success"></i> --><svg class="svg-inline--fa fa-book fa-stack-1x has-text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="book" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64L0 448s0 0 0 0c0 35.3 28.7 64 64 64l368 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-16 0 0-66.7c18.6-6.6 32-24.4 32-45.3l0-320c0-26.5-21.5-48-48-48L64 0zM384 416l0 64L64 480c-17.7 0-32-14.3-32-32s14.3-32 32-32l320 0zM64 384c-11.7 0-22.6 3.1-32 8.6L32 64c0-17.7 14.3-32 32-32l32 0 0 352-32 0zm64 0l0-352 272 0c8.8 0 16 7.2 16 16l0 320c0 8.8-7.2 16-16 16l-272 0zm48-240c0 8.8 7.2 16 16 16l160 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-160 0c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16l160 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-160 0c-8.8 0-16 7.2-16 16z"></path></svg><!-- <i class="fa-light fa-book fa-stack-1x has-text-dark"></i> --></span>
                <h1 class="title is-size-4 is-spaced">Mentor</h1>
                <p>I genuinely care about people, and enjoy helping them work on their craft.</p>
                <p class="list-title has-text-primary has-text-weight-normal">Experiences I draw from:</p>
                <p>UX/UI, Product design, Freelancing</p>
                <p class="list-title has-text-primary has-text-weight-normal">Mentor Stats:</p>
                <ul>
                  <li>9+ years experience</li>
                  <li>30+ short courses</li>
                  <li>65+ bootcamps</li>
                  <li>250+ students</li>
                  <li>2,500+ mentor sessions</li>
                  <li>60+ group critiques</li>
                  <li>18,000+ bits of feedback</li>
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
        <h3 class="title text-negro">Testimoniales</h3>
        <h4 class="subtitle-testimonials">La gente con la que he trabajado me ha dicho cosas bonitas...</h4>
        <div class="columns_1 is-centered">
            <div class="column_1 is-two-thirds">
                <div class="testimonials-slider">
                    <input id="carousel-1" type="radio" name="carousel" checked>
                    <input id="carousel-2" type="radio" name="carousel">
                    <div class="carousel-slides">
                        <div class="carousel-inner">
                            <div class="carousel-item" id="item-1">
                                <div class="testimonial-block">
                                    <img class="avatar" src="wp-content/themes/tylerdev/img/pascal.png">
                                    <p class="quote">"Fue un verdadero placer trabajar con Tyler y esperamos volver a trabajar con él. Definitivamente es el tipo de diseñador en el que puedes confiar un proyecto de principio a fin".</p>
                                    <h1 class="title is-size-5">Pascal Tremblay</h1>
                                    <h2 class="subtitle is-size-6">Líder creativo, buen tipo</h2>
                                </div>
                            </div>
                            <div class="carousel-item" id="item-2">
                                <div class="testimonial-block">
                                    <img class="avatar" src="wp-content/themes/tylerdev/img/alvin.png">
                                    <p class="quote">"Tyler es un profesional excelente y de confianza, para profundizar en escenarios de diseño complicados y la fricción colaborativa que se necesita para producir un trabajo de calidad".</p>
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