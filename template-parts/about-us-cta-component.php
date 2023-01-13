<?php
?>

<div class="about-us-call-to-action__container">
	<div class="about-us-call-to-action__wrapper">
		<h3 class="about-us-cta__title">
			<?php
			echo $args["title"];
			?>
		</h3>
		<p class="about-us-cta__content">
			<?php
			echo $args["content"];
			?>
		</p>
		<a class="about-us-cta__button" target="_blank" href="<?php
		echo $args["button_link"];
		?>">
			<?php
			echo $args["button_text"];
			?>
		</a>
	</div>
</div>