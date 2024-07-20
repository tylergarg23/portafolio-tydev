<?php
  while(have_posts() ): the_post();
?>
    
  <h1 class="text-center text-negro title">Developer Software, QA Automation & Mentor</h1>
  <h4 class="text-center text-negro subtitle">Desarrollo y Automatizo software que te haga las cosas mas simples.</h4>

<?php    
    the_title('');
    the_content();
    if(has_post_thumbnail()){
      the_post_thumbnail('full', array('class' => 'imagen-avatar'));
    }

    endwhile;
?>