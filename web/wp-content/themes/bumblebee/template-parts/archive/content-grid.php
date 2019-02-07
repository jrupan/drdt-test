<?php
/** Archive Grid template

 * @package bumblebee
 */

$archive_hero_analytics = 'data-analytics-metrics=\'{"link_name":"' . get_the_title() . '","link_module":"content navigation","link_pos":"individual content well"}\'';


?>
<div class="pure-u-1 pure-u-sm-1-4">
	<div class="single-recipe">
		<?php bumblebee_post_thumbnail( 'grid-thumbnail', 'individual content well', 'content navigation' ); ?>
		<div class="recipe-content">
			<?php the_title( '<h5 class="entry-title"><a ' . $archive_hero_analytics . ' href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>
		</div>

	</div>
</div>
