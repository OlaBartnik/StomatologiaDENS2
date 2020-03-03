<?php
/**
 * Template Name: Page
 */

get_header();
?>



			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

			endwhile; // End of the loop.
			?>



<?php include 'footer.php'; ?>