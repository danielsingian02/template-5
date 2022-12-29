<?php

?>

<div class="welcome-component">
    <div class="welcome-component__content">

        <h2 class="welcome-component__content__title">
            <?php echo $args['title']; ?>
        </h2>

        <div class="welcome-component__content__content">
		    <?php echo $args['content']; ?>
        </div>

        <!-- List -->
        <?php
            if ($args['display_list']) {
	            echo "<div class='welcome-component__content__lists' style='display: flex'>";

                    foreach ( $args[ "lists" ] as $list ){
                        if( $list = acf_esc_htmL( $list ) ) {
	                        echo "<div class='welcome-component__content__lists__list'>";
                                echo "<i class='bi bi-check-circle-fill'></i>";
                                echo "<p>$list</p>";
	                        echo "</div>";
                        }
                    }

                echo "</div>";
            }
        ?>

    </div>
    <div class="welcome-component__content">
        <div class="welcome-component__grid-image">
            <div class="grid-image__left">
                <img src="
                    <?php
                        echo $args['left_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_5/main/assets/images/Asset2.png";
                    ?>
                "
                     alt="">
            </div>
            <div class="grid-image__right">
                <img src="
                    <?php
                    echo $args['right_image'] ?: "https://raw.githubusercontent.com/danielsingian02/template_5/main/assets/images/Asset3.png";
                    ?>"
                     alt="">
            </div>
        </div>
    </div>
</div>
