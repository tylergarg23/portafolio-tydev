<?php 
  get_header();
?>

  <section class="bienvenida seccion contenedor">
    <h1 class="text-center text-negro title">
      <?php the_field('encabezado_bienvenida');?>
    </h1>
    <h4 class="text-center text-negro subtitle">
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
      <img class="img-avatar"src="<?php echo  esc_attr($img_avatar);?>" alt="Imagen <?php echo esc_attr($img_avatar);?>">
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

      <h3>
        <?php echo esc_html( $info_per['texto_soy']);?>
      </h3>
      <p>
        <?php echo esc_html( $info_per['texto_info_personal']);?>
      </p>

    </div>
  </section>

  <main class="contenedor seccion">
    
  </main>

  <?php 
    get_footer();
  ?>