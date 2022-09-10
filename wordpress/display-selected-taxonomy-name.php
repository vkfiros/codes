<?php

 $type = get_the_terms( $post->ID , 'my_taxonomy' );

foreach ( $type as $mctype ) {
echo $cati->name;

?>

<p> <?php $mctype->name ?> </p>

<?php
			 }

?>
