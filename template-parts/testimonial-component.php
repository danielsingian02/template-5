<?php

$testimonial = $args[ "testimonial" ];

?>

<div class="testimonial-content">
	<div class="testimonial-content__text-content">
		<h2 class="testimonial-title">
			<?php
			echo esc_attr($testimonial[ "testimonial_section_title" ]) ?? "";
			?>
		</h2>

		<p class="testimonial-description">
			<?php
			echo esc_attr($testimonial[ "testimonial_section_description" ]) ?? "";
			?>
		</p>
	</div>

	<?php
	// Checks if there are client's testimonials
	if (
		$testimonial[ "client_testimonials" ][ "client_testimonial_1" ][ "client_name" ] ||
		$testimonial[ "client_testimonials" ][ "client_testimonial_2" ][ "client_name" ] ||
		$testimonial[ "client_testimonials" ][ "client_testimonial_3" ][ "client_name" ]
	) :
		echo "<div class='testimonial-content__testimonials'>";
		foreach ( $testimonial[ "client_testimonials" ] as $client ) :
			if ( $client[ "client_name" ] ) :?>
				<div class="client-testimonials">
					<p class="client-testimonial">
						<?php echo acf_esc_html( $client[ "client_testimonial" ] );?>
					</p>
					<div class="client-container">
						<?php
						if ( $img = esc_url( $client[ "client_image" ] ) ) : ?>
							<div class='client-picture'>
								<img src='<?php echo $img; ?>' alt=''>
							</div>
						<?php endif; ?>
						<div class="client-info"
							<?php
							if ( ! $img )
								echo 'style="text-align: center"';
							?>
						>
							<p class="client-name">
								<?php echo esc_attr($client[ "client_name" ])?>
							</p>
							<p class="client-description">
								<?php echo esc_attr($client[ "client_description" ])?>
							</p>
						</div>
					</div>
				</div>
			<?php endif ?>
		<?php endforeach;?>
		<?php echo "</div>"; ?>
	<?php endif ?>
</div>