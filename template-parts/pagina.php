<?php
  while(have_posts() ): the_post();  
    //the_title('');
    the_content();
    if(has_post_thumbnail()){
      the_post_thumbnail('full', array('class' => 'imagen-avatar'));
    }

    endwhile;
?>