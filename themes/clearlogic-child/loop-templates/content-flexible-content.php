<div style="height: 900px; background-color: #1a1e21;"></div>

<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :



    endwhile;
endif;
?>