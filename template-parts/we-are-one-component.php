<?php

/**
 * Args:
 *
 * Title        = $args["title"]
 * Description  = $args["description"]
 *
 */

$args = $args ?? "";

?>
<div class="we-are-one">
	<h4 class="we-are-one__title">
		<?php
		echo $args['title'];
		?>
	</h4>
	<p class="we-are-one__description">
		<?php
		echo $args['description'];
		?>
	</p>
</div>
