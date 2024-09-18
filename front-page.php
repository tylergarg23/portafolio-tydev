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

  <main class="contenedor seccion sec-blanco skills">
    <div class="columns herramientas-dev">
      <div class="column">
        <?php 

          $habilidad1 = get_field('habilidad_1');
          $img_icon1 = $habilidad1['skill_icono']['sizes']['medium'];
          $skill_texto1 = $habilidad1['skill_texto'];
          $skill_descripcion1 = $habilidad1['skill_descripcion'];
          $titulo_lenguajes1 = $habilidad1['titulo_lenguajes'];
          $descripcion_lenguajes1 = $habilidad1['descripcion_lenguajes'];
          $titulo_herramientas1 = $habilidad1['titulo_herramientas'];
          $descripcion_herramientas1 = $habilidad1['descripcion_herramientas'];


          //echo "<pre>";
          //var_dump($habilidad1);
          //echo "</pre>"
        ?>

        <span class="icon-stack icon-2x">
          <img src="<?php echo  esc_attr($img_icon1);?>" alt="Imagen <?php echo esc_attr($img_icon1);?>" width="110px">
          <!--<svg width="91" height="73" viewBox="0 0 91 73" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M45.66 72.28C55.2078 72.28 64.3645 68.4872 71.1158 61.7359C77.8672 54.9846 81.66 45.8278 81.66 36.28C81.66 26.7322 77.8672 17.5755 71.1158 10.8242C64.3645 4.07288 55.2078 0.280029 45.66 0.280029C36.1122 0.280029 26.9555 4.07288 20.2042 10.8242C13.4529 17.5755 9.66 26.7322 9.66 36.28C9.66 45.8278 13.4529 54.9846 20.2042 61.7359C26.9555 68.4872 36.1122 72.28 45.66 72.28Z" fill="#5C3469"/>
            <g clip-path="url(#clip0_1_10)">
            <path d="M40.9551 15.6148C40.4301 15.8445 40.0117 16.5418 40.0117 17.1816C40.0117 17.8215 40.4055 18.4859 40.9141 18.6992L41.1602 18.7977V22.0953V25.393L40.6105 25.6637C38.4039 26.7383 36.2383 28.9039 35.1637 31.1023L34.893 31.6602H31.5871C28.5109 31.6602 28.273 31.652 28.2238 31.5125C27.8547 30.4625 26.2305 30.1508 25.4676 30.9957C25.1066 31.3977 24.9754 31.8078 25.0164 32.3984C25.082 33.309 25.7055 33.875 26.6652 33.875C26.9113 33.875 27.223 33.834 27.3543 33.7848C27.6496 33.6781 28.0762 33.2598 28.2074 32.9645L28.2977 32.7266H31.3902H34.4828L34.2531 33.6289C34.1301 34.1211 34.007 34.8594 33.9742 35.2695L33.9168 36.0078H32.1367H30.3484L30.2992 35.8109C30.2336 35.5484 29.8809 35.1301 29.602 34.9906C29.0523 34.7035 28.191 34.7609 27.6824 35.1219C26.8949 35.6797 26.8949 37.3203 27.6824 37.8781C28.191 38.2391 29.0523 38.2965 29.602 38.0094C29.8809 37.8699 30.2336 37.4516 30.2992 37.1891L30.3484 36.9922H32.1367H33.9168L33.9742 37.7305C34.007 38.1406 34.1301 38.8789 34.2531 39.3711L34.4828 40.2734H31.3902H28.2977L28.2074 40.0355C28.0762 39.7402 27.6496 39.3219 27.3543 39.2152C26.9852 39.0758 26.2305 39.1086 25.8449 39.2809C25.3691 39.5023 25.0574 39.9863 25.0164 40.6016C24.9754 41.1922 25.1066 41.6023 25.4676 42.0043C26.2305 42.8492 27.8547 42.5375 28.2238 41.4875C28.273 41.348 28.5109 41.3398 31.5871 41.3398H34.893L35.1637 41.8895C36.2383 44.0961 38.4039 46.2617 40.6105 47.3363L41.1602 47.607V50.9047V54.2023L40.9141 54.3008C39.9707 54.6863 39.7164 56.1547 40.4465 56.9832C40.7828 57.3687 41.1191 57.5 41.759 57.5C42.6941 57.5 43.2766 56.9422 43.3586 55.9742C43.375 55.7363 43.3504 55.4164 43.293 55.2441C43.1699 54.8668 42.7926 54.432 42.4727 54.3008L42.2266 54.2023V51.1016V48.009L42.7844 48.1648C43.4406 48.3453 44.6875 48.5586 45.1223 48.5586H45.4258V50.3633C45.4258 51.6758 45.4012 52.168 45.3273 52.168C45.2781 52.168 45.1141 52.2664 44.9582 52.3812C44.1051 53.0293 44.1461 54.5961 45.032 55.1867C45.4996 55.4984 46.2543 55.5395 46.7793 55.2852C47.3371 55.0145 47.5914 54.5879 47.6242 53.8496C47.6488 53.3738 47.6242 53.1934 47.4848 52.9227C47.3207 52.6027 46.9352 52.25 46.6398 52.1434C46.5086 52.0941 46.4922 51.9301 46.4922 50.3223V48.5586H46.8449C47.3043 48.5586 48.5348 48.3535 49.2238 48.1648L49.7734 48.009V51.1016V54.2023L49.5273 54.3008C49.2074 54.432 48.8301 54.8668 48.707 55.2441C48.5758 55.6379 48.6332 56.3023 48.8301 56.7125C48.9203 56.9094 49.1254 57.1227 49.3551 57.2621C49.6586 57.459 49.8145 57.5 50.241 57.5C50.8809 57.5 51.2172 57.3687 51.5535 56.9832C52.2672 56.1711 52.0375 54.7602 51.1188 54.3254L50.8398 54.1859V50.8965V47.607L51.3977 47.3363C53.5961 46.2617 55.7617 44.0961 56.8363 41.8895L57.107 41.3398H60.4129C63.4891 41.3398 63.727 41.348 63.7762 41.4793C64.1453 42.5375 65.7695 42.8492 66.5324 42.0043C66.8934 41.6023 67.0246 41.1922 66.9836 40.6016C66.918 39.691 66.2945 39.125 65.3348 39.125C65.0887 39.125 64.777 39.166 64.6457 39.2152C64.3504 39.3219 63.9238 39.7402 63.7926 40.0355L63.7023 40.2734H60.6098H57.5172L57.7469 39.3711C57.8699 38.8789 57.993 38.1406 58.0258 37.7305L58.0832 36.9922H59.8633H61.6516L61.7008 37.1891C61.7664 37.4598 62.1273 37.8699 62.4391 38.034C62.5949 38.116 62.8984 38.1734 63.2266 38.1734C63.932 38.1734 64.3668 37.952 64.6785 37.427C65.1051 36.6969 64.9246 35.5566 64.3176 35.1219C63.809 34.7609 62.9477 34.7035 62.398 34.9906C62.1191 35.1301 61.7664 35.5484 61.7008 35.8109L61.6516 36.0078H59.8633H58.0832L58.0258 35.2695C57.993 34.8594 57.8699 34.1211 57.7469 33.6289L57.5172 32.7266H60.6098H63.7023L63.7926 32.9645C63.9238 33.2598 64.3504 33.6781 64.6457 33.7848C64.777 33.834 65.0887 33.875 65.3348 33.875C66.2945 33.875 66.918 33.309 66.9836 32.3984C67.0246 31.8078 66.8934 31.3977 66.5324 30.9957C65.7695 30.1508 64.1453 30.4625 63.7762 31.5125C63.727 31.652 63.4891 31.6602 60.4129 31.6602H57.107L56.8363 31.1023C55.7617 28.9039 53.5961 26.7383 51.3977 25.6637L50.8398 25.393V22.1035V18.8141L51.1188 18.6746C51.5945 18.4531 51.9883 17.7723 51.9883 17.1898C51.9883 16.5254 51.5699 15.8363 51.0285 15.6148C50.6266 15.4426 49.8227 15.4672 49.4453 15.6641C48.3133 16.2383 48.3707 18.2234 49.5355 18.6992L49.7734 18.7977V21.8984V24.9992L49.3879 24.8844C48.7152 24.6793 47.9031 24.5234 47.1813 24.4742L46.4922 24.4168V22.6613C46.4922 21.0699 46.5086 20.9059 46.6398 20.8566C46.9352 20.75 47.3207 20.3973 47.4848 20.0773C47.6242 19.8066 47.6488 19.6262 47.6242 19.1504C47.5914 18.4121 47.3371 17.9855 46.7793 17.7148C46.2543 17.4605 45.4996 17.5016 45.032 17.8133C44.1461 18.4039 44.1051 19.9707 44.9582 20.6187C45.1141 20.7336 45.2781 20.832 45.3273 20.832C45.4012 20.832 45.4258 21.3242 45.4258 22.6285V24.4168L44.7121 24.4742C44.3102 24.507 43.5965 24.6383 43.1125 24.7613L42.2266 24.9828V21.8902V18.7977L42.4727 18.6992C42.7926 18.568 43.1699 18.1332 43.293 17.7559C43.4242 17.3621 43.3668 16.6977 43.1699 16.2875C43.0797 16.0906 42.8746 15.8773 42.6449 15.7379C42.3332 15.5328 42.1938 15.5 41.7426 15.5C41.4391 15.5082 41.0863 15.5574 40.9551 15.6148ZM42.1445 16.7305C42.3906 16.9766 42.366 17.4113 42.0953 17.6246C41.8082 17.8543 41.5293 17.8379 41.2832 17.5918C41.0371 17.3457 41.0207 17.0668 41.2504 16.7797C41.4637 16.509 41.8984 16.4844 42.1445 16.7305ZM50.7496 16.7797C50.9793 17.0668 50.9629 17.3457 50.7168 17.5918C50.4707 17.8379 50.1918 17.8543 49.9047 17.6246C49.634 17.4113 49.6094 16.9766 49.8555 16.7305C50.1016 16.4844 50.5363 16.509 50.7496 16.7797ZM46.2871 18.6664C46.4758 18.7402 46.6727 19.1668 46.607 19.3801C46.5086 19.7 46.3199 19.8477 46 19.8477C45.5078 19.8477 45.2371 19.3965 45.4586 18.9535C45.6227 18.6418 45.9262 18.5352 46.2871 18.6664ZM47.2305 25.557C48.7563 25.6801 50.725 26.4102 52.2016 27.3945C53.0219 27.9441 54.5477 29.4617 55.0809 30.2656C56.5328 32.4395 57.1563 34.7609 56.9758 37.3531C56.6559 42.0453 53.1367 46.1469 48.4855 47.2379C45.5242 47.927 42.3906 47.3363 39.7656 45.5809C38.9781 45.0559 37.4441 43.5219 36.9191 42.7344C35.7953 41.0527 35.1473 39.2234 35.0242 37.3531C34.8438 34.7609 35.4672 32.4395 36.9191 30.2656C37.4523 29.4617 38.9781 27.9441 39.7984 27.3945C40.8156 26.7137 42.1609 26.1066 43.2684 25.8277C44.2445 25.5816 45.5652 25.4258 46.2461 25.475C46.4512 25.4914 46.8941 25.5242 47.2305 25.557ZM27.0918 31.7832C27.3379 32.0293 27.3543 32.3082 27.1246 32.5953C26.7801 33.0301 26.0664 32.784 26.0664 32.218C26.0664 31.652 26.698 31.3812 27.0918 31.7832ZM65.7449 31.7586C65.9828 31.9801 65.9992 32.4148 65.7695 32.6445C65.5234 32.8906 65.0887 32.866 64.8754 32.5953C64.6457 32.3082 64.6621 32.0293 64.9082 31.7832C65.1543 31.5289 65.4906 31.5207 65.7449 31.7586ZM29.1426 36.0488C29.6348 36.5328 29.1016 37.3777 28.5027 37.066C27.9941 36.7953 27.9859 36.2293 28.4863 35.9422C28.7406 35.7945 28.9293 35.8273 29.1426 36.0488ZM63.4973 35.9422C63.8664 36.1391 63.9566 36.4016 63.7926 36.7789C63.6695 37.0496 63.325 37.1891 63.0379 37.0824C62.6195 36.9184 62.5211 36.377 62.8574 36.0488C63.0789 35.8191 63.2348 35.7945 63.4973 35.9422ZM27.1246 40.4047C27.3543 40.6918 27.3379 40.9707 27.0918 41.2168C26.698 41.6187 26.0664 41.3562 26.0664 40.7902C26.0664 40.216 26.7719 39.9617 27.1246 40.4047ZM65.7695 40.3555C66.1305 40.7164 65.8434 41.4219 65.343 41.4219C65.0477 41.4219 64.7031 41.0937 64.7031 40.823C64.7031 40.7164 64.777 40.5277 64.8754 40.4047C65.0887 40.134 65.5234 40.1094 65.7695 40.3555ZM46.4266 53.2918C46.6398 53.5379 46.6727 53.784 46.5332 54.0465C46.3938 54.3172 46.123 54.432 45.7949 54.35C45.5488 54.2844 45.3109 53.866 45.393 53.6199C45.4914 53.3 45.6801 53.1523 46 53.1523C46.1887 53.1523 46.3527 53.2098 46.4266 53.2918ZM42.0953 55.3754C42.366 55.5887 42.3906 56.0234 42.1445 56.2695C41.8984 56.5156 41.4637 56.491 41.2504 56.2203C41.0207 55.9332 41.0371 55.6543 41.2832 55.4082C41.5293 55.1621 41.8082 55.1457 42.0953 55.3754ZM50.7168 55.4082C50.9629 55.6543 50.9793 55.9332 50.7496 56.2203C50.5363 56.491 50.1016 56.5156 49.8555 56.2695C49.6094 56.0234 49.634 55.5887 49.9047 55.3754C50.1918 55.1457 50.4707 55.1621 50.7168 55.4082Z" fill="#FFE15B"/>
            <path d="M39.6672 28.9613C39.5359 29.0352 39.5195 29.2402 39.5195 31.291C39.5195 33.9242 39.4785 33.793 40.3398 33.793H40.9141L40.8238 34.0145C40.7746 34.1457 40.7172 34.5723 40.6926 34.966C40.6516 35.5648 40.6187 35.6797 40.5203 35.6387C40.4465 35.6141 40.225 35.6141 40.0199 35.6469C39.6836 35.6961 39.577 35.7781 38.9699 36.4098C38.4121 36.9922 38.2891 37.1645 38.2891 37.3777C38.2891 37.7059 38.4777 37.8945 38.7977 37.8945C38.9945 37.8945 39.1668 37.7715 39.6344 37.3203C40.0527 36.9184 40.2906 36.7461 40.4383 36.7461C40.6434 36.7461 40.6434 36.7625 40.6926 37.5418C40.7254 37.9848 40.7992 38.5426 40.8566 38.7723L40.9715 39.207H40.3809C39.4211 39.207 39.4785 39.0594 39.4785 41.668C39.4785 43.7762 39.4867 43.8992 39.6344 44.0141C39.8477 44.1699 40.2168 44.1617 40.3727 43.9977C40.4875 43.891 40.5039 43.5957 40.5039 42.0699V40.2734H40.9797H41.4637L41.841 40.7574C42.5219 41.6352 43.5801 42.316 44.7285 42.6113C45.352 42.7672 46.5414 42.7672 47.2305 42.6031C48.3543 42.3406 49.6586 41.4711 50.2738 40.5688C50.4625 40.2898 50.4953 40.2734 50.9465 40.2734H51.4141V42.0617C51.4141 43.6941 51.4305 43.8664 51.5617 43.9895C51.7832 44.1945 52.2016 44.1699 52.3492 43.9484C52.4641 43.7926 52.4805 43.4234 52.4805 41.6105C52.4805 39.1168 52.5379 39.2645 51.5699 39.166L51.0367 39.1086L51.1434 38.6082C51.2008 38.3293 51.25 37.7961 51.25 37.4187V36.7461H51.5125C51.7258 36.7461 51.8816 36.8527 52.3656 37.3203C52.8332 37.7715 53.0055 37.8945 53.2023 37.8945C53.5223 37.8945 53.7109 37.7059 53.7109 37.3777C53.7109 37.1645 53.5961 36.9922 53.0711 36.4426C52.4312 35.7699 52.3574 35.7289 51.652 35.6387L51.2664 35.5895L51.2336 34.8348C51.209 34.4164 51.168 34.0145 51.127 33.9324C51.0777 33.8094 51.127 33.793 51.6437 33.793C52.5051 33.793 52.4805 33.875 52.4805 31.332C52.4805 28.9777 52.4559 28.8711 51.9555 28.8711C51.4387 28.8711 51.4141 28.9613 51.4141 30.9465V32.7266H50.9219C50.4871 32.7266 50.3805 32.6938 50.0277 32.4395C49.8062 32.2754 49.4617 32.0949 49.2566 32.0211C48.9039 31.898 48.8875 31.8898 48.8547 31.5125C48.7645 30.6102 48.1164 29.6914 47.2633 29.273C46.7957 29.0434 46.6398 29.0023 46.0574 29.0023C45.0895 28.9941 44.6137 29.1746 43.982 29.8062C43.4734 30.3148 43.1945 30.8645 43.0797 31.5617C43.0305 31.857 42.9977 31.8898 42.5137 32.1031C42.2348 32.2262 41.9148 32.4148 41.8082 32.5297C41.6523 32.6938 41.5457 32.7266 41.1109 32.7266H40.5941L40.5695 30.9137C40.5449 29.232 40.5367 29.0926 40.3891 28.9859C40.2004 28.8547 39.8723 28.8383 39.6672 28.9613ZM46.7219 30.2328C47.2797 30.4625 47.7965 31.1352 47.8047 31.6355V31.8242H45.9508H44.0969L44.1543 31.5535C44.2937 30.9301 44.7121 30.4133 45.2617 30.1918C45.5816 30.0687 46.3855 30.0852 46.7219 30.2328ZM45.4258 37.2793V41.668L45.2043 41.6188C43.5965 41.2332 42.4316 40.175 41.9559 38.6738C41.7918 38.1488 41.7754 37.9273 41.7754 36.2539C41.7754 34.4984 41.7836 34.3918 41.9559 34.0801C42.1855 33.6617 42.3742 33.4484 42.6777 33.2434C43.0961 32.9645 43.3832 32.907 44.425 32.8988L45.4258 32.8906V37.2793ZM49.0762 33.1121C49.5027 33.3418 49.8062 33.6617 50.0113 34.1211C50.1672 34.4574 50.1836 34.6543 50.1836 36.2457C50.1836 38.1898 50.1098 38.6492 49.675 39.4695C49.3879 40.0027 48.666 40.7656 48.1574 41.0691C47.7555 41.307 47.1484 41.5367 46.7629 41.6105L46.4922 41.6598V37.2711V32.8742L47.6242 32.907C48.5758 32.9316 48.7973 32.9645 49.0762 33.1121Z" fill="#FFE15B"/>
            </g>
            <defs>
            <clipPath id="clip0_1_10">
            <rect width="42" height="42" fill="white" transform="translate(25 15.5)"/>
            </clipPath>
            </defs>
          </svg>-->
        </span>
        
        <h4><?php echo esc_attr($skill_texto1) ?></h4>
        <p><?php echo esc_attr($skill_descripcion1) ?></p>
        <p class="subtitulos-column"><?php echo esc_attr($titulo_lenguajes1) ?></p>
        <p><?php echo esc_attr($descripcion_lenguajes1) ?></p>
        <p class="subtitulos-column"><?php echo esc_attr($titulo_herramientas1) ?></p>
        <p><?php echo esc_attr($descripcion_herramientas1) ?></p>
      </div>

      <div class="column">
        <?php 

          $habilidad2 = get_field('habilidad_2');
          $img_icon2 = $habilidad2['skill_icono']['sizes']['medium'];
          $skill_texto2 = $habilidad2['skill_texto'];
          $skill_descripcion2 = $habilidad2['skill_descripcion'];
          $titulo_lenguajes2 = $habilidad2['titulo_lenguajes'];
          $descripcion_lenguajes2 = $habilidad2['descripcion_lenguajes'];
          $titulo_herramientas2 = $habilidad2['titulo_herramientas'];
          $descripcion_herramientas2 = $habilidad2['descripcion_herramientas'];
        ?>

        <span class="icon-stack icon-2x">
          <img src="<?php echo  esc_attr($img_icon2);?>" alt="Imagen <?php echo esc_attr($img_icon2);?>" width="110px">
        </span>
        <h4><?php echo esc_attr($skill_texto2) ?></h4>
        <p><?php echo esc_attr($skill_descripcion2) ?></p>
        <p class="subtitulos-column"><?php echo esc_attr($titulo_lenguajes2) ?></p>
        <p><?php echo esc_attr($descripcion_lenguajes2) ?></p>
        <p class="subtitulos-column"><?php echo esc_attr($titulo_herramientas2) ?></p>
        <p><?php echo esc_attr($descripcion_herramientas2) ?></p>
      </div>
      <div class="column">

      <?php 

        $habilidad3 = get_field('habilidad_3');
        $img_icon3 = $habilidad3['skill_icono']['sizes']['medium'];
        $skill_texto3 = $habilidad3['skill_texto'];
        $skill_descripcion3 = $habilidad3['skill_descripcion'];
        $titulo_lenguajes3 = $habilidad3['titulo_lenguajes'];
        $descripcion_lenguajes3 = $habilidad3['descripcion_lenguajes'];
        $titulo_herramientas3 = $habilidad3['titulo_herramientas'];

      ?>
        <span class="icon-stack icon-2x">
          <img src="<?php echo  esc_attr($img_icon3);?>" alt="Imagen <?php echo esc_attr($img_icon3);?>" width="110px">
        </span>
        <h4><?php echo esc_attr($skill_texto3) ?></h4>
        <p><?php echo esc_attr($skill_descripcion3) ?></p>
        <p class="subtitulos-column"><?php echo esc_attr($titulo_lenguajes3) ?></p>
        <p><?php echo esc_attr($descripcion_lenguajes3) ?></p>
        <p class="subtitulos-column"><?php echo esc_attr($titulo_herramientas3) ?></p>
        
      </div>
    </div>
  </main>

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
                <h3 class="title"><?php echo esc_attr($titulo_imagen_trabajo); ?></h1>
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
                <h3 class="title"><?php echo esc_attr($titulo_imagen_trabajo_2); ?></h1>
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
                <h3 class="title"><?php echo esc_attr($titulo_imagen_trabajo_3); ?></h1>
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
                <h3 class="title"><?php echo esc_attr($titulo_imagen_trabajo_4); ?></h1>
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
  <section class="contenedor seccion sec-blanco pd-bot-10rem">
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
                                    <p class="quote">"Fue un verdadero placer trabajar con Matt y esperamos volver a trabajar con él. Definitivamente es el tipo de diseñador en el que puedes confiar un proyecto de principio a fin".</p>
                                    <h1 class="title is-size-5">Pascal Tremblay</h1>
                                    <h2 class="subtitle is-size-6">Líder creativo, buen tipo</h2>
                                </div>
                            </div>
                            <div class="carousel-item" id="item-2">
                                <div class="testimonial-block">
                                    <img class="avatar" src="wp-content/themes/tylerdev/img/alvin.png">
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